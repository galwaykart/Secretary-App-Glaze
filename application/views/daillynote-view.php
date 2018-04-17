  <?php $this->load->view('head'); ?>
    <?php $this->load->view('header'); ?>
    <style>
    .form_error{color:red; font-size:10px;}
    </style>

    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Notes</p></div>
    
    <h2 class="headingDaiilyNotes">Dailly View Notes</h2>
    <div class="dailly-notes-index-panel">
	  <div class="daiilyNotesviewMargin">
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
	
	// echo "<pre>";
	// print_r($records);
	// echo "</pre>";
	
?>
        <form method="POST" action="<?php if($records){echo base_url()."Daillynote/req/".$records[0]->daily_notes_id;}else{echo base_url()."Daillynote/req/";} ?>">
            <div class="notes-view-first-panel ">
                   <div class="">
                       <div class="col-md-3">
                                <div class="form-group">
                                         <label>Task</label>
                                          <div class="input-group">
                                             
                                            <div class="form-control"><input type="text" title="Only Alphabets allowed" required  pattern="[A-Z a-z ]{1,30}"  name="task" value="<?php if($records){ echo $records[0]->task_name; } ?>" /></div>
                                            <?php echo form_error('task', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                                                           
                       </div>
                       <div class="col-md-3">
                                <div class="form-group">
                                         <label>Date</label>
                                          <div class="input-group">
                                             
                                            <div class="form-control"><input type="date" title="Date"  required   name="date" value="<?php if($records){  echo $records[0]->startDate ; } ?>"/></div>
                                            <?php echo form_error('date', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                       </div>
					    <div class="col-md-3"> <div class="form-group">
                                         <label>Task Type</label>
                                          <div class="input-group">
                                             
                                            <div class="form-control"><select name="task_type" required>
                                                                        <option value="1" <?php if($records){ if($records[0]->task_type == "1"){ echo "selected"; }} ?> >a</option>
                                                                        <option value="2" <?php if($records){ if($records[0]->task_type == "2"){ echo "selected"; }}?> >b</option>
                                                                        <option value="3"  <?php if($records){ if($records[0]->task_type == "3"){ echo "selected"; }} ?> >c</option>
                                                                      </select></div>
                                                                      <?php echo form_error('task_type', '<span class="form_error">', '</span>'); ?>                          
                                            </div>
                                </div>

                        </div>
                      
                   </div>
                

            </div>
        <div class="clear"></div>
        <!-- first panel ends -->

        <div class="notes-view-second-panel notesviewForm">
                    <div class="row">
                       
                        <div class="col-md-3">
                             <div class="form-group">
                                         <label>Department</label>
                                          <div class="input-group">
                                              
                                            <div class="form-control"><input type="text" placeholder="Department"  title="Only Alphabets allowed" required  pattern="[A-Z a-z ]{1,30}" name="Department" value="<?php if($records){ echo $records[0]->department; } ?>"/></div>
                                            <?php echo form_error('Department', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                        <!-- <div class="col-md-3">
                             <div class="form-group">
                                         <label>Time</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-clock-o" ></span>

                                              </div>
                                            <div class="form-control"><input type="time" title="Time" required name="start-time" value="<?php if($records){  echo date("H:i", strtotime($records[0]->task_start_date)) ; } ?>"/></div>
                                            <?php //echo form_error('start-time', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                         <label>To</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-clock-o" ></span>

                                              </div>
                                            <div class="form-control"><input type="time" title="To" name="end-time" required value="<?php if($records){  echo date("H:i", strtotime($records[0]->task_target_date)) ; } ?>"/></div>
                                            <?php //echo form_error('end-time', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div> -->
                        <div class="col-md-3">
                             <div class="form-group">
                                         <label>Target Date</label>
                                          <div class="input-group">
                                             
                                            <div class="form-control"><input type="date" title="Target Date" name="target_date" required value="<?php if($records){ echo $records[0]->endDate; } ?>"/></div>
                                            <?php echo form_error('target_date', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                        <div class="col-md-3"> <div class="form-group">
                                         <label>Delegate To</label>
                                          <div class="input-group">
                                             
                                            <div class="form-control"><input type="text" placeholder="Delegate To"  title="Only Alphabets allowed" required  pattern="[A-Z a-z ]{1,30}" name="delegate" value="<?php if($records){ echo $records[0]->delegated; } ?>"/></div>
                                            <?php echo form_error('delegate', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>

                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                         <label>Email</label>
                                          <div class="input-group">
                                            <div class="form-control"><input type="email" placeholder="Email" name="email_to" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please provide valid Email address" value="<?php if($records){ echo $records[0]->email; } ?>"/></div>
                                            <?php echo form_error('email_to', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                         <label>Seretary Name</label>
                                          <div class="input-group">
                                            <div class="form-control"><input type="text" title="Seretary Name" name="secretary_name"  title="Only Alphabets allowed" required  pattern="[A-Za-z ]{1,30}" value="<?php if($records){ echo $records[0]->seretary_name; } ?>"/></div>
                                            <?php echo form_error('secretary_name', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                         <label>Confidentiality</label>
                                          <div class="input-group">
                                            <div class="form-control">
                                                                    <select name="confidential" >
                                                                        <option value="0" <?php if($records){ if($records[0]->confidentiality == "0"){ echo "selected"; }} ?>>High</option><option value="1" <?php if($records){ if($records[0]->confidentiality == "1"){ echo "selected"; }} ?>>Medium</option><option value="2" <?php if($records){ if($records[0]->confidentiality == "2"){ echo "selected"; }} ?>>Low</option>
                                                                    </select>
                                            </div>
                                            <?php echo form_error('confidential', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                       <div class="col-md-4"> <div class="form-group">
                                         <label>My Seating</label>
                                          <div class="input-group">
                                            <div class="form-control"><select name="mysitting" >
                                                                        <option value="1" >Yes</option><option value="2">No</option>
                                                                      </select></div>
                                                                      <?php echo form_error('mysitting', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>

                        </div>
                        <!-- col-md-2 ends -->
                        <div class="col-md-4">
                                         <div class="form-group">
                                         <label>Priority</label>
                                          <div class="input-group">
                                            <div class="form-control">
                                                                        <select name="priority" >
                                                                        <option value="0" <?php if($records){ if($records[0]->priority == "0"){ echo "selected"; }} ?>>High</option><option value="1" <?php if($records){ if($records[0]->priority == "1"){ echo "selected"; }} ?>>Medium</option><option value="2" <?php if($records){ if($records[0]->priority == "2"){ echo "selected"; }} ?>>Low</option>
                                                                      </select>
                                            </div>
                                            <?php echo form_error('priority', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                         <div class="col-md-4">
                                         <div class="form-group">
                                         <label>Venue</label>
                                          <div class="input-group">
                                            <div class="form-control"><input type="text" title="Venue" name="venue"  title="Only Alphabets allowed" required   value="<?php if($records){ echo $records[0]->venue; } ?>"/></div>
                                            <?php echo form_error('venue', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                         <div class="col-md-4">
                                         <div class="form-group">
                                         <label>Communication Medium</label>
                                          <div class="input-group">
                                            <div class="form-control"><input type="text" title="Communication Medium"  title="Only Alphabets allowed" required  pattern="[A-Z a-z ]{1,30}" name="comm_medium" value="<?php if($records){ echo $records[0]->communication_medium; } ?>"/></div>
                                            <?php echo form_error('comm_medium', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                        <div class="clear"></div>
                        <!--col-md-3 end -->
                        
                        <hr  class="spalsh" />
                        <div  class="toggle notesview-lastPanel" >
                          <div class="col-md-12 padding-btn "  style="position:relative;">
                            <!-- <input type="button" value="Add" /> -->
                            <a href="#" class="ad btn-primary btn participater8" title="Add New Participate">
                              <span class="fa fa-plus"></span>
                            </a>
                          </div>
                          <div clas="clear"></div>
                            <div class="col-md-222">
                            <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-addon"><span class="fa fa-building-o" ></span></div>
                                                                        <div class="form-control"><input type="text" required placeholder="Department" title="Only Alphabets allowed"   pattern="[A-Z a-z ]{1,30}" name="part_dept[]" value="<?php if($records){ echo $records[0]->p_department; } ?>"/></div>
                                                                        <?php echo form_error('part_dept[]', '<span class="form_error">', '</span>'); ?>
                                                </div>
                            </div>
                            </div>
                            <div class="col-md-222">
                            <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-addon"><span class="fa fa-user-o" ></span></div>
                                                                        <div class="form-control"><select name="Employee[]" > <option value="1" <?php if($records){ if($records[0]->employee == "1"){ echo "selected"; }} ?> >Yes</option><option value="0" <?php if($records){ if($records[0]->employee == "0"){ echo "selected"; }} ?>>No</option> </select></div>
                                                                        <?php echo form_error('Employee[]', '<span class="form_error">', '</span>'); ?>
                                                                        
                                            </div>
                            </div>
                                </div>
                            <div class="col-md-222">
                            <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-addon"><span class="fa fa-edit" ></span></div>
                                                                        <div class="form-control"><input type="text" required placeholder="Name" title="Only Alphabets allowed"   pattern="[A-Za-z ]{1,30}" name="parti_name[]" value="<?php if($records){ echo $records[0]->name; } ?>" /></div>
                                                                        <?php echo form_error('parti_name[]', '<span class="form_error">', '</span>'); ?>
                                            </div>
                            </div>
                                </div>
                            <div class="col-md-222">
                                <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
                                                                            <div class="form-control"><input type="text" required placeholder="Email id"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please provide valid Email address" name="parti_email[]" value="<?php if($records){ echo $records[0]->p_email; } ?>" /></div>
                                                                            <?php echo form_error('parti_email[]', '<span class="form_error">', '</span>'); ?>
                                             </div>
                                </div>
                            </div>
                            <div class="col-md-222">
                                <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
                                                                            <div class="form-control"><input type="text" required placeholder="phone number"  title="Please provide valid Email address" name="parti_phone[]" value="<?php if($records){ echo $records[0]->phone_number; } ?>" /></div>
                                                                            <?php echo form_error('parti_phone[]', '<span class="form_error">', '</span>'); ?>
                                             </div>
                                </div>
                            </div>
                         

<div id ="one">
                                <?php
         for($i=1; $i<sizeof($records) ; $i++){
            $j = $i - 1;
         ?>
        
         <div class="clear"></div>
         
    <div id="<?php   echo "rm".$j ?>"  class="customclass">
        <div class="col-md-2" id="addmr">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-addon"><span class="fa fa-building-o"></span></div>
                    <div class="form-control"><input type="text" placeholder="Department" value="<?php if($records){ echo $records[$i]->p_department; } ?>" title="Only Alphabets allowed" required  pattern="[A-Z a-z ]{1,30}" id="department" name="part_dept[]"></div>
                </div>
            </div>
        </div>

        <div class="col-md-2" id="addmr"><div class="form-group">
            <div class="input-group">
                <div class="input-addon"><span class="fa fa-user-o"></span></div>
                <div class="form-control">
                    <select name="Employee[]" > <option value="1" <?php if($records){ if($records[0]->employee == "1"){ echo "selected"; }} ?> >Yes</option><option value="0" <?php if($records){ if($records[0]->employee == "0"){ echo "selected"; }} ?>>No</option> </select>
                </div>
            </div>
        </div>



    </div>
            <div class="col-md-2" id="name">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-addon"><span class="fa fa-edit"></span>
                        </div>
                        <div class="form-control"><input type="text" placeholder="Name" value="<?php if($records){ echo $records[$i]->name; } ?>" title="Only Alphabets allowed" required  pattern="[A-Z a-z ]{1,30}" id="name" name="parti_name[]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2" id="email">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-addon"><span class="fa fa-envelope-o"></span>
                        </div>
                    <div class="form-control"><input type="text" placeholder="Email Id" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please provide valid Email address" value="<?php if($records){ echo $records[$i]->p_email; } ?>" name="parti_email[]">
                    </div>
                </div>
            </div>

        <div class="col-md-2" id="phone">
            <div class="form-group">
                    <div class="input-group">
                        <div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
                                                    <div class="form-control"><input type="text" required placeholder="phone number"  title="Please provide valid Email address" name="parti_phone[]" value="<?php if($records){ echo $records[$i]->phone_number; } ?>" /></div>
                                                    <?php echo form_error('parti_phone[]', '<span class="form_error">', '</span>'); ?>
                        </div>
            </div>
        </div>

        </div>
        <div class="col-md-2">
            <div class="btn-group margin-top" style=""><a href="#"  onclick="setValues(<?php echo $j; ?>)"  class="btn-eror  removebtn1">&times;</a>
            </div>
        </div>
    <!-- </div> -->
       
         <?php }?>  
</div>
                        </div>

                            <!-- div participate end -->


                        <!-- table start -->
                        <!-- <div class="clear"></div> -->
                        <!-- <div class="table-res">
                             <div class="table-view">
                                        <table class="table-emp-part"> 
                                            <thead>
                                                <tr>
                                                    <th>Department</th><th>Employee</th><th>Name</th><th>Email Id</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>It software</td><td>xyz</td><td>xyz</td><td>xyz@gmail.com</td></tr>
                                                 <tr><td>It software</td><td>xyz</td><td>xyz</td><td>xyz@gmail.com</td></tr>
                                                 <tr><td>It software</td><td>xyz</td><td>xyz</td><td>xyz@gmail.com</td></tr>
                                            </tbody>
                                        </table>
                             </div>
                        </div> -->
                        <div class="clear"></div>
                         <hr class="spalsh" />
                        <h3>Arrangements</h3>
                          <div class="col-md-3">
                                         <div class="form-group">
                                         <label>Seat Count</label>
                                          <div class="input-group">
                                             
                                            <div class="form-control"><input type="number" title=""  name="seat_cont" required  value="<?php if($records){ echo $records[0]->seat_count; } ?>"/></div>
                                            <?php echo form_error('seat_cont', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                         <div class="col-md-3">
                                         <div class="form-group">
                                         <label>Driver Count</label>
                                          <div class="input-group">
                                              
                                            <div class="form-control"><input type="number" title="" name="deiver_cont" required   value="<?php if($records){ echo $records[0]->driver_count; } ?>"/></div>
                                            <?php echo form_error('deiver_cont', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                         <div class="col-md-3">
                                         <div class="form-group">
                                         <label>Car Count</label>
                                          <div class="input-group">
                                             
                                            <div class="form-control"><input type="number" title=" " name="car_cont" required    value="<?php if($records){ echo $records[0]->car_ount; } ?>"/></div>
                                            <?php echo form_error('car_cont', '<span class="form_error">', '</span>'); ?>
                                            </div>
                                </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-12">
                            <textarea class="notes" id="cktextarea" placeholder="Notes" required    title="Notes" name="notes"  >
                            <?php if($records){ echo htmlspecialchars($records[0]->notes); } ?>

                            </textarea>
                            <?php echo form_error('notes', '<span class="form_error">', '</span>'); ?>

                        </div>
                        <div class="clear"></div>
                        <!-- <div class="button-group">
                            <input type="button" value="Save Data" />
                        </div> -->
						<br>
                        <div class="btn-group" style="text-align:center">
                            <button type="submit" class="btn-primary btn">submit</button>
                            <?php if($this->uri->segment(3)){?>
                            <input type="submit" name="submail" class="btn-primary btn" value="submit & Mail"></input>
                            <?php }?>
                        </div>

                    </div>
        </div>
       <div class="clear"></div>


        
</form>
    </div>

<?php $i = 0; ?>

    <script> 
    
  
    $(function() {  
            $('a.ad').click(function(e) {
            e.preventDefault();
            var lnth = $('#one .customclass').length; 
         $('#one').append('<div class="clear"></div><div id="rm'+lnth+'" class="customclass" style="position:relative;"><div class="col-md-222" id="addmr"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-building-o"></span></div><div class="form-control"><input type="text" placeholder="Department" title="Only Alphabets allowed" required  pattern="[A-Z a-z ]{1,30}" id="department" name="part_dept[]"></div></div></div></div><div class="col-md-222" id="addmr"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-user-o"></span></div><div class="form-control"><select name="Employee[]" > <option value="1" >Yes</option><option value="0" >No</option> </select></div></div></div></div><div class="col-md-222" id="name"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-edit"></span></div><div class="form-control"><input type="text" placeholder="Name" title="Only Alphabets allowed" required  pattern="[A-Z a-z ]{1,30}" id="name" name="parti_name[]"></div></div></div></div><div class="col-md-222" id="email"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-envelope-o"></span></div><div class="form-control"><input type="text" placeholder="Email Id" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please provide valid Email address" name="parti_email[]"></div></div></div></div><div class="col-md-222" id="phone"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-edit"></span></div><div class="form-control"><input type="text" placeholder="phone number"  required  id="phone" name="parti_phone[]"></div></div></div></div><div class=""><div class="btn-group  padding-btn" style="text-align:right;float:left;"><a href="#"  onclick="setValues('+ lnth +')"  class="ad btn-eror removebtn8 ">&times;</a></div></div></div>');

        });
        


    });
        function setValues(id){    
            console.log("Gaurav= ",id); 
                document.getElementById("rm"+id).remove();
        }
</script>

<script>
//console.log("editor enabled");
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'cktextarea' );
</script>
    
    <!-- dailly index panel end --> 
    <?php $this->load->view('footer'); ?>

