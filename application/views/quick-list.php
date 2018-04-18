	<?php $this->load->view('head'); ?>
	<?php $this->load->view('header'); ?>

<style>
.form_error{color:red; font-size:10px;}
</style>    
		<!-- user View design page start -->
	<div class="clear"></div>
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Quick Work</p></div>
     <div class="container">
	           
                <h2 class="headingDaiilyNotes"> Quick Works</h2>
    </div>
    <div class="dailly-notes-index-panel">
    <?php
          if($message){echo $message;} 
         ?>

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
				  <?php 
                 //echo form_error('username', '<span class="form_error">', '</span>'); 
                 
                 if(form_error('task') || form_error('date') || form_error('target_date') || form_error('remark') || form_error('priority') || form_error('status') || form_error('active')){
                     echo "<h2>Please provide valid input!</h2>";
                 } 
				  
				  ?>
            <div class="table-res">
                    <div class="table-view">
                        <table>
                            <thead>
                                <tr><th>Sr No</th><th>Date </th><th>Task</th><th>Target Date</th><th>Priority</th><th>Remarks</th><th>Status</th><th>Active</th></tr>
                            </thead>
                            <tbody>
                            <?php 
                            if($records){
                              $i=1;
                                          foreach($records as $r) { 
                                            echo "<tr id='updatenote$r->quick_work_id' onclick='newDoc($r->quick_work_id)'>"; 
                                            echo "<td>".$i++."</td>"; 
                                            echo "<td>".$r->date."</td>"; 
                                            echo "<td>".$r->task."</td>"; 
                                            echo "<td>".$r->target_date."</td>"; 
                                            echo "<td>".$r->priority."</td>"; 
                                            echo "<td>".$r->remark."</td>"; 
                                            if($r->status == 0){ echo "<td>Pending</td>";}else{echo "<td>Completed</td>";}
                                            
                                            if($r->active == 0){ echo "<td>"."Yes"."</td>"; }else{ echo "<td>"."No"."</td>"; }

                                             
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
			    
				<a href="#" class="addmeeingsbtn btn" id="addnotes"><span class="fa fa-plus" >&nbsp;Add</span></a>

				<div class="clear"></div>
				 <div id="container" class="pagination">
			       <p><?php echo $links; ?></p>

				</div> 
      </div><!-- dailly index panel end -->
	  
    </div><!-- dailly index panel end -->
    <div class="clear"></div>
    <!-- popup start -->
	<div class="popup-main">
    <form id="myForm" method="POST" action="<?php echo base_url()."Quickwork/req/" ?>">
    <div class="popup" style="display: none;">
                        <div class="header">
                <h3>Quick Work - <span id="work">Add</span></h3>
                <span id="close-popup"  title="Close">&times;</span>
            </div>
           <div class="clear"></div>
            <div class="content"><!-- content start -->
                <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required type="date" id="task_date" name="date" title="Date" value=""/></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Task :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required id="task_name" type="text" name="task" title="Task" /></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                   
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Target Date</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required type="date" id="task_traget_date" name="target_date" title="Target Date" /></div>
                                        </div>
                          </div>
                        
                    </div>
                      <div class="col-md-6">
                           <div class="form-group">
                                       <label>Priority</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select id="task_priority" name="priority">
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
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
                                               <textarea id="task_remark" name="remark" class=""></textarea>
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
                           <select name="status" id="task_status">
                             <option value='0'>Pending</option>
                             <option value='1'>Completed</option>
                           </select>
                           <!-- <input required type="text" id="task_status" name="status" title="Status" /></div> -->
                         </div>
                       </div>
                     </div>
                   </div> 
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Active/Inactive</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select name="active" id="active"><option value='0'>Yes</option><option value='1'>No</option></select>
                                            </div>
                                        </div>
                           </div>
                    </div>
                </div>
                   <div class='clear'></div>

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

                                <div class="left">
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
                                    <div class="form-group"><label>Phone Number</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required type="text" name="delegate_phone[]" id="gm3"/>
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
                            <div class="backbone"></div>
                        </div>

                        <div class="clear"></div>

                     </div>
                   
                     <!-- autometic delegates end -->

                </div>
            </div><!-- container end -->
            <div class="clear"></div>
            <div class="footer">
                
                    <div  class="col-md-12">
                    <button type="submit" class="btargetDatetn-primary btn">Save</button>
                                   <!-- <a href="#">Add</a> -->
                    <input required class="btn-primary btn" type="reset" value="Reset">
                    
                                   <!-- <a href="#">Reset</a> -->
                                   <span id="set_submail"></span>
                    </div>
                
            </div><!-- footer end -->
			<div class="clear"></div>

    </div>
    </form>
	</div>
    <!-- popup ends --> 
      
	
	    <script type="text/javascript">


        $(document).ready(function(){
       
        $('a#plus').on('click',function(){

<<<<<<< HEAD
        var lnth = $('#auto-del').length;
        console.log(lnth);
        $('#auto-del').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required="" type="text" title="Delegate To" name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required="" type="text" name="delegate_email[]"/></div></div></div></div><div class="left"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input required="" type="text" name="delegate_phone[]" id="gm3"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');});
=======
        var lnth = $('#auto-del .auto-del').length;
        alert(lnth);
        $('#auto-del').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required="" type="text" title="Delegate To" name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required="" type="text" name="delegate_email[]"/></div></div></div></div><div class="left"> <div class="form-group"><label>Phone Number</label> <div class="input-group"> <div class="form-control"><input required type="text" name="delegate_phone[]" id="gm3"/> </div> </div> </div> </div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');});
>>>>>>> 44c379a214139c9c7477b8bc6c4cdb4d3a8b00c8
        });

        function setValues(id){
        document.getElementById("rm"+id).remove();
        }

      </script>

        <script type="text/javascript"> 
          function newDoc(id) {
            //console.log(id);   
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
                    document.getElementById("task_name").value = data_json.insidequickwork[0].task;
                    document.getElementById("task_date").value = data_json.insidequickwork[0].niceDate;
                    document.getElementById("task_traget_date").value = data_json.insidequickwork[0].targetDate;
                    document.getElementById("task_priority").value = data_json.insidequickwork[0].priority;
                    document.getElementById("task_remark").value = data_json.insidequickwork[0].remark;
                    document.getElementById("task_status").value = data_json.insidequickwork[0].status;
                    document.getElementById("active").value = data_json.insidequickwork[0].active;
                    document.getElementById("gm1").value = data_json.insidequickwork[0].delegates_name;
                    document.getElementById("gm2").value = data_json.insidequickwork[0].delegates_email;
                    document.getElementById("gm3").value = data_json.insidequickwork[0].phone_number;
                    
                    document.getElementById("myForm").action = "<?php echo base_url(); ?>Quickwork/req/"+data_json.insidequickwork[0].quick_work_id;
                    document.getElementById("set_submail").innerHTML = "<input type='submit' name='submail' class='btn-primary btn check_mail' value='submit & Mail'></input>";
                    //$('#set_submail').append('<input type="submit" name="submail" class="btn-primary btn" value="submit & Mail"></input>');
                    for(var i=0; i<data_json.insidequickwork.length ; i++){
                        var j = i +1 ;
                        $('#auto-del').append('<div class="clear"></div><div id="rm'+i+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" name="delegate_to[]" value="'+ data_json.insidequickwork[j].delegates_name +'" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]" value="'+data_json.insidequickwork[j].delegates_email+'"/></div></div></div></div><div class="center"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input required type="text" name="delegate_phone[]" id="gm3"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ i + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');

                    }
                    
                    
                }
            };
                xhttp.open("GET", "<?php echo base_url(); ?>Quickwork/quickwork_view/"+id, true);
                xhttp.send();
		         		$('.popup').css('display','block'); 
                $('.popup-main').css('display','block'); 
            }

            
        </script>
 
	
<?php $this->load->view('footer'); ?>
 
