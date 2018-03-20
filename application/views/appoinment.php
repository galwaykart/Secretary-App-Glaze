 
  <?php $this->load->view('head'); ?> 
   <?php $this->load->view('header'); ?> 
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Appointment</p></div>
    <div class="dailly-notes-index-panel">
    <?php if($message){echo $message;} ?> 
            <div class="table-res">
                    <div class="table-view">
                        <table>
                            <thead>
                                <tr><th>Sr No</th><th>Start Time</th><th>End Time</th><th>Appoinment With</th><th>Subject</th><th>Periodic</th><th>Travel Time</th><th>Remerk</th><th>Status</th><th>Active/Inactive</th></tr>
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
                                            echo "<td>".$r->appointment_subject."</td>"; 
                                            echo "<td>".$r->appointment_periodic."</td>"; 
                                            echo "<td>".$r->appointment_travel_time."</td>"; 
                                            echo "<td>".$r->appointment_remark."</td>"; 
                                            echo "<td>".$r->appointment_status."</td>";
                                            if($r->appointment_active == 0){echo "<td>NO</td>";}else{echo "<td>Yes</td>";} 
                                             

                                            
                                         //    echo "<td><a href = '".base_url()."index.php/stud/edit/"
                                         //       .$r->roll_no."'>Edit</a></td>"; 
                                         //    echo "<td><a href = '".base_url()."index.php/stud/delete/"
                                         //       .$r->roll_no."'>Delete</a></td>"; 
                                            echo "<tr>"; 
                                         }
                                        } 
                              ?>
                              <!-- <tr>
                                 <td>1</td><td>11:00AM</td><td>12:30PM</td><td>xyz</td><td>No subject</td><td>no</td><td>15 Min</td><td>Remark no</td><td>pending</td><td>active</td>
                              </tr>
                                <tr>
                                 <td>1</td><td>11:00AM</td><td>12:30PM</td><td>xyz</td><td>No subject</td><td>no</td><td>15 Min</td><td>Remark no</td><td>pending</td><td>active</td>
                              </tr>
                                <tr>
                                 <td>1</td><td>11:00AM</td><td>12:30PM</td><td>xyz</td><td>No subject</td><td>no</td><td>15 Min</td><td>Remark no</td><td>pending</td><td>active</td>
                              </tr>
                                <tr>
                                 <td>1</td><td>11:00AM</td><td>12:30PM</td><td>xyz</td><td>No subject</td><td>no</td><td>15 Min</td><td>Remark no</td><td>pending</td><td>active</td>
                              </tr> -->
                            </tbody>
                        </table>
                    </div>

            </div>
        <div class="clear"></div>
        <div class="col-md-12">
            <br />
                <a href="#" id="addnotes"><span class="fa fa-plus" >&nbsp;Add</span></a>
        </div>
    </div><!-- dailly index panel end -->
  
    <!-- popup start -->
    <form id="myForm" method="POST" action="<?php echo base_url();?>Appoinment/req" >
    <div class="popup" style="display: none;">
            <div class="header">
                <h3>Quick Work - <span id="work">Add</span></h3>
                <span id="close-popup"  title="Close">&times;</span>
            </div>
            <div class="content"><!-- content start -->
                <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required type="date" id="task_date" name="date" title="Date" /></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Subject :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required type="text" id="task_name" name="task" title="Task" /></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Peroidic :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required type="text" id="appointment_periodic" name="peroidic" title="Date" /></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Travel Time :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required type="text" id="appointment_travel_time" name="travel_time" title="Task" /></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>

                 <div class="col-md-12">
                   
                    <div class="col-md-12">
                            <div class="form-group">
                                       <label>Target Date</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required type="date" id="task_traget_date" name="target_date" title="Target Date" /></div>
                                        </div>
                          </div>
                        
                    </div>
                      <!-- <div class="col-md-6">
                           <div class="form-group">
                                       <label>Priority</label>
                                        <div class="input-group">
                                            <div class="form-control"><select name="priority">
                                                    <option>Select Priority</option>
                                                </select></div>
                                        </div>
                          </div>
                    </div> -->
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
                                            <div class="form-control"><input required type="text" id="task_status" name="status" title="Status" /></div>
                                        </div>
                           </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Active/Inactive</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select name="active" id="active"><option value='1' >Yes</option><option value='0'>No</option></select>
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
                                                <label>Delegate To</label>
                                                 <div class="input-group">
                                                     <div class="form-control"><input required type="text" id ="gm1" name="delegate_to[]" title="Delegate To" /></div>
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
                                      <div class="right text-center">
                                                 <div class="btn-group">
                                                         <a href="#" class="plus" id="plus"><span class="fa fa-plus" ></span></a>
                                                 </div>
                                      </div>

                          </div>
                      </div>
                  </div>

                  <div id="one">
                  </div>
                  <!-- autometic delegates end -->

                </div>
                <div class="clear"></div>
                        
                                                           

            </div><!-- container end -->
            <div class="footer">
                
                    <div class="col-md-12">
                    <button type="submit" class="btn-primary btn">Save</button>
                    <input required class="btn-primary btn" type="reset" value="Reset">
                                   <!-- <a href="#">Reset</a> -->
                    </div>
                
            </div><!-- footer end -->
<script type="text/javascript"> 
    $(function() {
        $('a#plus').click(function(e) {
            e.preventDefault();
            var lnth = $('#auto-del .auto-del').length; 
            $('#auto-del').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
            
        });
    });
        function setValues(id){     
                document.getElementById("rm"+id).remove();
        }
</script>                                    
    </div>
    </form>
    <!-- popup ends -->

 


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
                    console.log(data_json.insidequickwork.length);
                    document.getElementById("task_name").value = data_json.insidequickwork[0].appointment_subject;
                    document.getElementById("task_date").value = data_json.insidequickwork[0].niceDate;
                    document.getElementById("appointment_periodic").value = data_json.insidequickwork[0].appointment_periodic;
                    document.getElementById("appointment_travel_time").value = data_json.insidequickwork[0].appointment_travel_time;
                    document.getElementById("appointment_remark").value = data_json.insidequickwork[0].appointment_remark;
                    document.getElementById("task_traget_date").value = data_json.insidequickwork[0].targetDate;
                    document.getElementById("task_status").value = data_json.insidequickwork[0].appointment_status;
                    document.getElementById("active").value = data_json.insidequickwork[0].appointment_active;
                    document.getElementById("gm1").value = data_json.insidequickwork[0].appointment_with_name;
                    document.getElementById("gm2").value = data_json.insidequickwork[0].appointment_with_email;
                    document.getElementById("myForm").action = "<?php echo base_url(); ?>Appoinment/req/"+data_json.insidequickwork[0].appointment_id;
                    
                    for(var i=0; i<data_json.insidequickwork.length ; i++){
                        var j = i +1 ;
                        $('#auto-del').append('<div class="clear"></div><div id="rm'+i+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" name="delegate_to[]" value="'+ data_json.insidequickwork[j].appointment_with_name +'" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text" name="delegate_email[]" value="'+data_json.insidequickwork[j].appointment_with_email+'"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ i + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');

                    }
                }
            };
                xhttp.open("GET", "<?php echo base_url(); ?>Appoinment/appointment_view/"+id, true);
                xhttp.send();
                $('.popup').show(); 
            }

            
        </script>
       
     <br /><br /><br />

<div id="container">
   <div id="body">
      <p><?php echo $links; ?></p>
   </div>
</div>
 
   <?php $this->load->view('footer'); ?>
 
