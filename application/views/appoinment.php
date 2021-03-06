 
  <?php $this->load->view('head'); ?> 
   <?php $this->load->view('header'); ?> 
   <style>
.form_error{color:red; font-size:20px;}
</style>
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Appointment</p></div>
	<div class="container">
                <h2 class="headingDaiilyNotes">Appoinment</h2>
   </div>
    <div class="dailly-notes-index-panel">
    <?php if($message){echo $message;} ?> 
    <!-- For php validation -->
    <?php 
			//echo form_error('username', '<span class="form_error">', '</span>'); 
			
			if(form_error('task') || form_error('date') || form_error('target_date') || form_error('remark') || form_error('travel_time') || form_error('status') || form_error('active')){
				echo "<h2 class='form_error'>Please provide valid input!</h2 >";
			} 
			 
			 ?>	
            <div class="table-res">
                    <div class="table-view">
                        <table>
                            <thead>
                                <tr><th>Sr No</th><th>Start Time</th><th>End Time</th><th>Subject</th><th>Travel Time</th><th>Remerk</th><th>Status</th><th>Venue</th><th>Active/Inactive</th></tr>
                            </thead>
                            <tbody>

                            <?php 
                            if($records){
                              $i=1;
                                          foreach($records as $r) { 
                                            echo "<tr onclick='newDoc($r->appointment_id)'>"; 
                                            echo "<td>".$i++."</td>"; 
                                            echo "<td>".$r->appointment_start_time."</td>"; 
                                            echo "<td>".$r->appointment_end_time."</td>"; 
                                            echo "<td>".$r->appointment_subject."</td>"; 
                                            // echo "<td>".$r->appointment_periodic."</td>"; 
                                            echo "<td>".$r->appointment_travel_time."</td>"; 
                                            echo "<td>".$r->appointment_remark."</td>"; 
                                            if($r->appointment_status ==0){
                                              echo "<td>Done</td>";
                                            }elseif($r->appointment_status ==1){
                                              echo "<td>Preponed</td>";
                                            }elseif($r->appointment_status ==2){
                                              echo "<td>Postponed</td>";
                                            }elseif($r->appointment_status ==3){  
                                              echo "<td>On Hold</td>";
                                            }else{ 
                                              echo "<td>Cancelled</td>";
                                            } 
                                            echo "<td>".$r->venue."</td>";
                                            if($r->appointment_active == 0){echo "<td>NO</td>";}else{echo "<td>Yes</td>";} 
                                             

                                            
                                         //    echo "<td><a href = '".base_url()."index.php/stud/edit/"
                                         //       .$r->roll_no."'>Edit</a></td>"; 
                                         //    echo "<td><a href = '".base_url()."index.php/stud/delete/"
                                         //       .$r->roll_no."'>Delete</a></td>"; 
                                            echo "<tr>"; 
                                         }
                                        } 
                              ?>
                            
                            </tbody>
                        </table>
                    </div>

            </div>
			 <div class="clear"></div>
			 <div class="col-md-12">
                   <a href="#" id="addnotes"><span class="fa fa-plus" >&nbsp;Add</span></a>
             </div>
             <div class="clear"></div>
			 <div id="container" class="pagination">
      				<p><?php echo $links; ?></p>
             </div>
<?php  
               $success_msg = $this->session->flashdata('success_msg');
               $error_msg   = $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="form_error">
                      <?php echo $error_msg; ?> 
					  
                    </div>
                    <?php
                  }  
                  ?>
       
    </div><!-- dailly index panel end -->
   <div class="clear"></div>
    <!-- popup start -->
	<div class="popup-main">

    <form id="my2Form" method="POST" action="<?php echo base_url();?>Appoinment/req" >
	
    <div class="popup" style="display: none;">
      <div class="header">
        <h3>
          Appointment - <span id="work">Add</span>
        </h3>
        <span id="close-popup"  title="Close">&times;</span>
      </div>
      <div class="content">
        <!-- content start -->
        <div class="col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <label>Date :</label>
              <div class="input-group">
                <div class="form-control">
                  <input required="" type="date" id="task_date" name="date" title="Date" />
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Subject :</label>
              <div class="input-group">
                <div class="form-control">
                  <input required="" type="text" id="task_name" name="task" title="Task" />
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>

        <div class="col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <label>Venue :</label>
              <div class="input-group">
                <div class="form-control">
                  <input required="" type="text" placeholder="Venue" name="venue"/>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Travel Time :</label>
              <div class="input-group">
                <div class="form-control">
                  <input required="" type="time" id="appointment_travel_time" name="travel_time" title="Task" />
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>

        <div class="col-md-12">

          <div class="col-md-12">
            <div class="form-group">
              <label>End Date</label>
              <div class="input-group">
                <div class="form-control">
                  <input required="" type="date" id="task_traget_date" name="target_date" title="Target Date" />
                </div>

              </div>
            </div>

          </div>
          
        </div>
        <div class="clear"></div>
        <div class="col-md-12">

          <div class="form-group">
            <label>Remark</label>
            <div class="input-group">
              <div class="form-control">
                <textarea id="appointment_remark" name="remark" class=""></textarea>
              </div>

            </div>

          </div>
        </div>

        <div class="clear"></div>
        <div class="col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <label>Status</label>
              <div class="input-group">
                <div class="form-control">
                  <!-- <input required="" type="text" id="task_status" name="status" title="Status" /> -->
                  <select name="status" id="task_status">
                    <option value='0' >Done</option>
                    <option value='1'>preponed</option>
                    <option value='2' >Postponed</option>
                    <option value='3'>On Hold</option>
                    <option value='4' >Cancelled</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="form-group">
              <label>Active/Inactive</label>
              <div class="input-group">
                <div class="form-control">
                  <select name="active" id="active">
                    <option value='1' >Yes</option>
                    <option value='0'>No</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <!-- autometic delegates start -->
          <div id="refresh_popup">
            <div id="auto-del">
              <div class="auto-del">
                <div class="left">
                  <div class="form-group">
                    <label>Appointment With</label>
                    <div class="input-group">
                      <div class="form-control">
                        <input required="" type="text" id ="gm1" name="delegate_to[]" title="Delegate To" />
                      </div>
                    </div>
                  </div>

                </div>
                <div class="center">
                  <div class="form-group">
                    <label>Email Id</label>
                    <div class="input-group">
                      <div class="form-control">
                        <input required type="text" id="gm2"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]"/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="left">
                  <div class="form-group">
                    <label>Phone Number</label>
                    <div class="input-group">
                      <div class="form-control">
                        <input required type="tel" pattern="[789][0-9]{9}" id="gm3" placeholder="Phone Number"  name="delegate_phone[]"/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="right text-center">
                  <div class="btn-group">
                    <a href="#" class="plus addiion-task" id="plus">
                      <span class="fa fa-plus " ></span>
                    </a>
                  </div>
                </div>

              </div>
              <div class="clear"></div>
            </div>
            <!--auto del end -->
          </div>


          <!-- autometic delegates end -->

        </div>
        <div class="clear"></div>
      </div>
      <!-- container end -->
      <div class="footer">

        <div class="col-md-12">
          <button type="submit" class="btn-primary btn">Save</button>
          <input required="" class="btn-primary btn" type="reset" value="Reset">
            <!-- <a href="#">Reset</a> -->
            <span id="set_submail"></span>
          </div>

      </div>
      <!-- footer end -->

    </div>
    </form><div class="left"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input required type="text" name="delegate_phone[]" value="'+data_json.insidequickwork[j].phone_number+'"/></div></div></div></div>
    <!-- popup ends -->
	</div>
 



<script type="text/javascript">
  $(document).ready(function(){

  $('a#plus').on('click',function(){

  var lnth = $('#auto-del .auto-del').length;
  $('#auto-del').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required="" type="text" title="Delegate To" required="" name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required="" type="text" name="email[]" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');



  });

  });

  function setValues(id){
  document.getElementById("rm"+id).remove();
  }



</script>
<script type="text/javascript"> 
          function newDoc(id) {   
            var xhttp;    
            if (id == "") {
            //document.getElementById("txtHint").innerHTML = "";
            return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText); 
                    var data_json = JSON.parse(this.responseText);
                    console.log(data_json.insidequickwork);
                    document.getElementById("task_name").value = data_json.insidequickwork[0].appointment_subject;
                    document.getElementById("task_date").value = data_json.insidequickwork[0].niceDate;
                    //document.getElementById("appointment_periodic").value = data_json.insidequickwork[0].appointment_periodic;
                    document.getElementById("appointment_travel_time").value = data_json.insidequickwork[0].appointment_travel_time;
                    document.getElementById("appointment_remark").value = data_json.insidequickwork[0].appointment_remark;
                    document.getElementById("task_traget_date").value = data_json.insidequickwork[0].targetDate;
                    document.getElementById("task_status").value = data_json.insidequickwork[0].appointment_status;
                    document.getElementById("active").value = data_json.insidequickwork[0].appointment_active;
                    document.getElementById("gm1").value = data_json.insidequickwork[0].appointment_with_name;
                    document.getElementById("gm2").value = data_json.insidequickwork[0].appointment_with_email;
                    document.getElementById("gm3").value = data_json.insidequickwork[0].phone_number;
                    document.getElementById("my2Form").action = "<?php echo base_url(); ?>Appoinment/req/"+data_json.insidequickwork[0].appointment_id;
                    document.getElementById("set_submail").innerHTML = "<input type='submit' name='submail' class='btn-primary btn check_mail' value='submit & Mail'></input>";

                    for(var i=0; i<data_json.insidequickwork.length ; i++){
                        var j = i +1 ;
                        $('#auto-del').append('<div class="clear"></div><div id="rm'+i+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Appointment With</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" name="delegate_to[]" value="'+ data_json.insidequickwork[j].appointment_with_name +'" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text" name="delegate_email[]" value="'+data_json.insidequickwork[j].appointment_with_email+'"/></div></div></div></div><div class="left"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input required type="text" name="delegate_phone[]" value="'+data_json.insidequickwork[j].phone_number+'"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ i + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');

                    }
                }
            };
                xhttp.open("GET", "<?php echo base_url(); ?>Appoinment/appointment_view/"+id, true);
                xhttp.send();
                $('.popup-main').css('display','block');
				 $('.popup').css('display','block');
            }

            
        </script>
       
     <br /><br /><br />


 
   <?php $this->load->view('footer'); ?>
 
