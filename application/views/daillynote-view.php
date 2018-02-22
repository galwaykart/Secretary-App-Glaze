<!doctype html>
<html>
  <?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
     <?php $this->load->view('header'); ?>



    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Notes</p></div>
    
    <div>
        <?php
        //if($records){print_r($records);} 
         ?>
        </div>

    <div class="dailly-notes-index-panel">
        <form method="POST" action="<?php if($records){echo base_url()."Daillynote/req/".$records[0]->daily_notes_id;}else{echo base_url()."Daillynote/req/";} ?>">
            <div class="notes-view-first-panel">
                   <div class="">
                       <div class="col-md-6">
                                <div class="form-group">
                                         <label>Task</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-edit" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" title="Only Alphabets allowed" required  pattern="[A-Za-z ]{1,30}"  name="task" value="<?php if($records){ echo $records[0]->task_name; } ?>" /></div>
                                            </div>
                                </div>
                                                           
                       </div>
                       <div class="col-md-4">
                                <div class="form-group">
                                         <label>Date</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-calendar" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" title="Date"  required   name="date" value="<?php if($records){  echo date("d/m/Y", strtotime($records[0]->task_start_date)) ; } ?>"/></div>
                                            </div>
                                </div>
                       </div>
                       <div class="col-md-4">

                           <div class="form-group">
                                         <label>Day</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa f fa-check-circle-o" ></span>

                                              </div>
                                            <div class="form-control"><input type="day" required title="Day" name="day" /></div>
                                            </div>
                                </div>
                       </div>
                   </div>
                

            </div>
        <div class="clear"></div>
        <!-- first panel ends -->

        <div class="notes-view-second-panel">
                    <div class="row">
                        <div class="col-md-2"> <div class="form-group">
                                         <label>Task Type</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-calendar-check-o" ></span>

                                              </div>
                                            <div class="form-control"><select name="task_type" required>
                                                                        <option value="1" <?php if($records){ if($records[0]->task_type == "1"){ echo "selected"; }} ?> >a</option>
                                                                        <option value="2" <?php if($records){ if($records[0]->task_type == "2"){ echo "selected"; }}?> >b</option>
                                                                        <option value="3"  <?php if($records){ if($records[0]->task_type == "3"){ echo "selected"; }} ?> >c</option>
                                                                      </select></div>
                                            </div>
                                </div>

                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                         <label>Department</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-building-o" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" placeholder="Department"  title="Only Alphabets allowed" required  pattern="[A-Za-z]{1,30}" name="Department" value="<?php if($records){ echo $records[0]->department; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                         <label>Time</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-clock-o" ></span>

                                              </div>
                                            <div class="form-control"><input type="time" title="Time" required name="start-time" value="<?php if($records){  echo date("H:i", strtotime($records[0]->task_start_date)) ; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                         <label>To</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-clock-o" ></span>

                                              </div>
                                            <div class="form-control"><input type="time" title="To" name="end-time" required value="<?php if($records){  echo date("H:i", strtotime($records[0]->task_target_date)) ; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                         <label>Target Date</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-calendar" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" title="Target Date" name="target_date" required value="<?php if($records){ echo $records[0]->task_target_date; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                        <div class="col-md-2"> <div class="form-group">
                                         <label>Delegate To</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-share" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" placeholder="Delegate To"  title="Only Alphabets allowed" required  pattern="[A-Za-z]{1,30}" name="delegate" value="<?php if($records){ echo $records[0]->delegated; } ?>"/></div>
                                            </div>
                                </div>

                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                         <label>Email</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-envelope-o" ></span>

                                              </div>
                                            <div class="form-control"><input type="email" placeholder="Email" name="email_to" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please provide valid Email address" value="<?php if($records){ echo $records[0]->email; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                         <label>Seretary Name</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-id-badge" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" title="Seretary Name" name="secretary_name"  title="Only Alphabets allowed" required  pattern="[A-Za-z ]{1,30}" value="<?php if($records){ echo $records[0]->seretary_name; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                         <label>Confidentiality</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa  fa-retweet" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" title="Confidentialit" name="confidential"  title="Only Alphabets allowed" required  pattern="[A-Za-z]{1,4}"value="<?php if($records){ echo $records[0]->confidentiality; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                       <div class="col-md-2"> <div class="form-group">
                                         <label>My Seating</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-calendar-check-o" ></span>

                                              </div>
                                            <div class="form-control"><select name="mysitting" >
                                                                        <option value="1" >Yes</option><option value="2">No</option>
                                                                      </select></div>
                                            </div>
                                </div>

                        </div>
                        <!-- col-md-2 ends -->
                        <div class="col-md-3">
                                         <div class="form-group">
                                         <label>Priority</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa  fa-line-chart" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" title="Priority" name="priority"  title="Only Alphabets allowed" required  pattern="[A-Za-z]{1,30}" value="<?php if($records){ echo $records[0]->priority; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                         <div class="col-md-3">
                                         <div class="form-group">
                                         <label>Venue</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-map-marker" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" title="Venue" name="venue"  title="Only Alphabets allowed" required  pattern="[A-Za-z]{1,30}" value="<?php if($records){ echo $records[0]->venue; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                         <div class="col-md-3">
                                         <div class="form-group">
                                         <label>Communication Medium</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="	fa fa-exchange" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" title="Communication Medium"  title="Only Alphabets allowed" required  pattern="[A-Za-z]{1,30}" name="comm_medium" value="<?php if($records){ echo $records[0]->communication_medium; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                        <div class="clear"></div>
                        <!--col-md-3 end -->
                        
                        <hr " class="spalsh" />
                        <div id="one" class="toggle">
                            <div class="col-md-2">
                            <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-addon"><span class="fa fa-building-o" ></span></div>
                                                                        <div class="form-control"><input type="text" required placeholder="Department" title="Only Alphabets allowed"   pattern="[A-Za-z]{1,30}" name="part_dept[]" value="<?php if($records){ echo $records[0]->p_department; } ?>"/></div>
                                                </div>
                            </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-addon"><span class="fa fa-user-o" ></span></div>
                                                                        <div class="form-control"><input type="text" required placeholder="Employee"    name="Employee[]" value="<?php if($records){ echo $records[0]->employee; } ?>"/></div>
                                            </div>
                            </div>
                                </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-addon"><span class="fa fa-edit" ></span></div>
                                                                        <div class="form-control"><input type="text" required placeholder="Name" title="Only Alphabets allowed"   pattern="[A-Za-z ]{1,30}" name="parti_name[]" value="<?php if($records){ echo $records[0]->name; } ?>" /></div>
                                            </div>
                            </div>
                                </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
                                                                        <div class="form-control"><input type="text" required placeholder="Email id"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please provide valid Email address" name="parti_email[]" value="<?php if($records){ echo $records[0]->p_email; } ?>" /></div>
                                                </div>
                            </div>
                                </div>
                            <div class="col-md-2">
                                                <!-- <input type="button" value="Add" /> -->
                                                <a href="#" class="ad btn-primary btn">Add Participate</a>
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
                                              <div class="input-addon">
                                                  <span class="fa   fa-coffee" ></span>
                                              </div>
                                            <div class="form-control"><input type="number" title=""  name="seat_cont" required  value="<?php if($records){ echo $records[0]->seat_count; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                         <div class="col-md-3">
                                         <div class="form-group">
                                         <label>Driver Count</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-group" ></span>
                                              </div>
                                            <div class="form-control"><input type="number" title="" name="deiver_cont" required   value="<?php if($records){ echo $records[0]->driver_count; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                         <div class="col-md-3">
                                         <div class="form-group">
                                         <label>Car Count</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="	fa fa-car" ></span>
                                              </div>
                                            <div class="form-control"><input type="number" title=" " name="car_cont" required    value="<?php if($records){ echo $records[0]->car_ount; } ?>"/></div>
                                            </div>
                                </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-12">
                            <textarea class="notes" placeholder="Notes" required    title="Notes" name="notes"  >
                            <?php if($records){ echo htmlspecialchars($records[0]->notes); } ?>

                            </textarea>

                        </div>
                        <div class="clear"></div>
                        <!-- <div class="button-group">
                            <input type="button" value="Save Data" />
                        </div> -->

                        <div class="btn-group" style="text-align:center">
                            <button type="submit" class="btn-primary btn">submit</button>
                        </div>






                    </div>
        </div>



        
</form>
    </div>


    <script type="text/javascript"> 
    $(function() {
        $('a.ad').click(function(e) {
            e.preventDefault();
            var lnth = $('#one .customclass').length; 
         $('#one').append('<div class="clear"></div><div id="rm'+lnth+'" class="customclass"><div class="col-md-2" id="addmr"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-building-o"></span></div><div class="form-control"><input type="text" placeholder="Department" title="Only Alphabets allowed" required  pattern="[A-Za-z]{1,30}" id="department" name="part_dept[]"></div></div></div></div><div class="col-md-2" id="addmr"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-user-o"></span></div><div class="form-control"><input type="text" placeholder="Employee"  required  id="employee" name="Employee[]"></div></div></div></div><div class="col-md-2" id="name"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-edit"></span></div><div class="form-control"><input type="text" placeholder="Name" title="Only Alphabets allowed" required  pattern="[A-Za-z]{1,30}" id="name" name="parti_name[]"></div></div></div></div><div class="col-md-2" id="email"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-envelope-o"></span></div><div class="form-control"><input type="text" placeholder="Email Id" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please provide valid Email address" name="parti_email[]"></div></div></div></div><div class="col-md-2"><div class="btn-group margin-top" style="text-align:center"><a href="#"  onclick="setValues('+ lnth + ')"  class="ad btn-eror btn">Delete</a></div></div></div>');
          
        });
    });
        function setValues(id){     
                document.getElementById("rm"+id).remove();
        }
</script>


    
    <!-- dailly index panel end --> 
     <br /><br /><br />
    <div style="height:50px;"></div>
    <?php $this->load->view('footer'); ?>

    
</body>
</html>
