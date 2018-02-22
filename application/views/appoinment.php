<!doctype html>
<html>
  <?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 

     <?php $this->load->view('header'); ?>

    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Quick Work</p></div>
    <div class="dailly-notes-index-panel">
            <div class="table-res">
                    <div class="table-view">
                        <table>
                            <thead>
                                <tr><th>Sr No</th><th>Start Time</th><th>End Time</th><th>Appoinment With</th><th>Subject</th><th>Periodic</th><th>Travel Time</th><th>Remerk</th><th>Status</th><th>Active/Inactive</th></tr>
                            </thead>
                            <tbody>

                            <?php 
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
                                            echo "<td>".$r->appointment_active."</td>"; 

                                            
                                         //    echo "<td><a href = '".base_url()."index.php/stud/edit/"
                                         //       .$r->roll_no."'>Edit</a></td>"; 
                                         //    echo "<td><a href = '".base_url()."index.php/stud/delete/"
                                         //       .$r->roll_no."'>Delete</a></td>"; 
                                            echo "<tr>"; 
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
    <div class="popup" style="display: none;">
            <div class="header">
                <h3>Appoinment - <span id="work">Add</span></h3>
                <span id="close-popup"  title="Close">&times;</span>
            </div>
            <div class="content"><!-- content start -->
                <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Start Time :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="time" title="Start Time" /></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>End Time :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="time" title="End Time" /></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Apponiment With</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" title="Apponiment With" /></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Subject Details :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" title="Subject Details & prepation" /></div>
                                        </div>
                          </div>
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                    <div class="col-md-6">
                           <div class="form-group">
                                       <label>Periodic</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" placeholder="Periodic" /></div>
                                        </div>
                          </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Travel Time</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <input type="Time" placeholder="Travel Time" />
                                            </div>
                                        </div>
                           </div>
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Remark</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" title="Remark" /></div>
                                        </div>
                           </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Status</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select><option value='Done'>Done</option><option value='Postpne'>Postpne</option><option value="Cancelled">Cancelled</option></select>
                                            </div>
                                        </div>
                           </div>
                    </div>
                     <div class="col-md-12">
                             <div class="form-group">
                                       <label>Active/Inactive</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select><option value='Yes'>Yes</option><option value='No'>No</option></select>
                                            </div>
                                        </div>
                            </div>
                     </div>
                </div>
                <div class="clear"></div>
                        
                                                           

            </div><!-- container end -->
            <div class="footer">
                
                    <div class="col-md-12">
                                   <a href="#">Add</a>
                                   <a href="#">Reset</a>
                    </div>
                
            </div><!-- footer end -->
    <script type="text/javascript"> 
        $(function() {
            $('a#plus').click(function(e) {
                e.preventDefault();
                var lnth = $('#auto-del').length; 
                $('#auto-del').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input type="text" title="Delegate To" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input type="text" /></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');

            });
        });
        function setValues(id){     
            document.getElementById("rm"+id).remove();
        }
    </script>                                     
    </div>
    <!-- popup ends -->

    <script>
		  
		function newDoc(id) {
			//console.log("id ====" ,id);
			var url = "<?php echo base_url(); ?>Quickwork/daillynote_view/"+id;
			window.location.assign(url);
		}
	</script> 
       
     <br /><br /><br />
    <div style="height:50px;"></div>
   <?php $this->load->view('footer'); ?>
</body>
</html>
