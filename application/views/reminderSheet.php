 <?php $this->load->view('head'); ?>
<?php $this->load->view('header'); ?>
				<style>
				.auto-del .left{width:27%;}
				.auto-del .right{}
				.auto-del .center{width:30%;}
.form_error{color:red; font-size:12px;}

				</style>

    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Reminder Sheet</p></div>
    <div class="clear"></div>
	 <h2  class="headingDaiilyNotes" style="  padding-top: 0%;padding-left:22px;"> Reminder Sheet </h2>
	  <div class="clear"></div>
    <div class="monthly-periodic-task-sheet reminder-sheet"><!-- Reminder  panel start -->
             
           
                
<?php if($this->session->flashdata('msg')): ?>
 <p style="color:red;"><?php echo $this->session->flashdata('msg'); ?></p>
<?php endif; ?>
	<?php 
		if(form_error('start_date') || form_error('end_date') || form_error('start_time') ||form_error('end_time') || form_error('frequency') || form_error('subject')){
			echo '<span class="form_error">Please provide valid input', '</span>'	;
		}
	?>	
                <!--search button end-->
                <div class="table-res style-4">
                            <table class="" >
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Alert Frequency</th>
                                        <th>Subject</th>
                                        <th>Active/Inactive</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
								if(isset($fetch)){
								$i=1;
								foreach($fetch as $record){
								?>
								<tr onclick='reminder(<?php echo $record->reminder_sheet_id; ?>)'>
								  <td><?php echo $i++;?></td>	
								  <td><?php echo $record->reminder_sheet_start_date ?></td>
								  <td><?php echo $record->reminder_sheet_end_date ?></td>
								  <td><?php echo $record->reminder_sheet_start_time ?></td>
								  <td><?php echo $record->reminder_sheet_end_time ?></td>
								  <td><?php if($record->reminder_sheet_frequency==1){echo "Hourly";}if($record->reminder_sheet_frequency==2){echo "Every Day";}if($record->reminder_sheet_frequency==3){echo "Every Week";}if($record->reminder_sheet_frequency==4){echo "Every Month";}if($record->reminder_sheet_frequency==5){echo "Every Year";} ?></td>
								  <td><?php echo $record->reminder_sheet_subject ?></td>
								  <td><?php if($record->reminder_sheet_status==1){echo "Yes";}else{echo "No";} ?></td>
								</tr>
								<?php } } ?>
                                </tbody>
                            </table>
							<div class="clear"></div>
                </div>
				<div class="clear"></div>
				<div class="col-md-12">
			           <a href="#" id="open-popup" class="rembtn btn" id="addnotes" title="Add New"><span class="fa fa-plus" ></span>&nbsp;Add</a>
				</div>
			    <div class="reminder-emptydiv"></div>
				<div class="pagination">
                      <?php echo $links; ?>
                </div>					  
                <div class="clear"></div>
                          
   </div><!-- reminder panel  end -->
            <br /><br /><br /><br />
			<div class="popup-main">
      <!-- popup start -->
       <form method="post" id="reminder_form" action="<?php echo base_url()."Reminder/insert_sheet/"?>">          
		  <div class="popup">
            <div class="header">
                <h3>Reminder Sheet- <span id="work"> Add</span></h3>
                <span id="close-popup"  title="Close">&times;</span>
            </div>
            <div class="content"><!-- content start -->
                <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Start Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" required  id="start_date" title="Start Date" name="start_date" />
											</div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>End Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" required id="end_date" title="End Date" name="end_date"/></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Start Time :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="Time" required title="Start Time" id="start_time" name="start_time"/></div>
                                        </div>
                           </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>End Time :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="Time" required title="End Time" id="end_time" name="end_time" /></div>
                                        </div>
                            </div>
                    </div>
                </div>
                <div class="clear"></div>
                  <div class="col-md-12">
                   
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Alert Frequency</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select id="frequency" name="frequency">
                                                    <option value="1">Hourly </option>
                                                    <option value="2">Every Day</option>
                                                    <option value="3">Every Week</option>
                                                    <option value="4">Every Month</option>
                                                    <option value="5">Every Year</option>
                                                </select>
                                            </div>
                                        </div>
                          </div>
                    </div>
                      <div class="col-md-6">
                           <div class="form-group">
                                       <label>Subject</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" required placeholder="Subject" id="subject" title="Subject" name="subject"/></div>
                                        </div>
                          </div>
                    </div>
                </div>
                <div class="clear"></div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Active/Inactive :</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select id="status" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>

                                            </div>
                                        </div>
                            </div>
                    </div>
                 </div>

               <div class="clear"></div>
			 <div id="refresh_popup_js">  
               	<div id="delete">
                    <div  class="auto-del">
                                 <div class="left">
                                     <div class="form-group">
                                       <label>Delegate To</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" required id="delegate_name" title="Delegate To" name="delegate_to[]"/></div>
                                        </div>
                                     </div>
                                 </div>
                                 <div class="center" class="col-md-3">
                                         <div class="form-group">
                                               <label>Email Id</label>
                                                <div class="input-group">
                                                    <div class="form-control">
                                                        <input type="text" name="email[]" required id="delegate_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
                                                    </div>
                                                </div>
                                         </div>
                                 </div>
								   <div class="center" class="col-md-3">
                                         <div class="form-group">
                                               <label>Phone Number</label>
                                                <div class="input-group">
                                                    <div class="form-control">
                                                        <input type="text" id="phone" name="phone[]" required />
                                                    </div>
                                                </div>
                                        </div>
                                   </div>
                                 <div class="right text-center">
                                            <div class="btn-group">
                                                    <a href="#" class="" id="add"><span class="fa fa-plus" ></span></a>
                                            </div>
                                 </div>
                    </div>
				</div>
			</div>						
				<div class="clear"></div>
            </div>
                <div class="footer">
                   	<button type="submit" class="btn-primary btn">Save</button>
                        <a href="#">Reset</a>
                        <span id="set_submail"></span>
                </div>
              </div>
   
	</form>
</div>	
      <!--  pop up end -->
    </div><!-- right Dashboard end -->
    </div><!-- Main Dashboard end --> 
  
	    <script> 
				$(function() {
					$('a#add').click(function(e) {
						e.preventDefault();
						var lnth = $('#delete .auto-del').length;
					 $('#delete').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" required name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text" name="email[]" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></div></div></div></div><div class="center" class="col-md-3"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input type="text" name="phone[]" required /></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
					  
					});
				});
					function setValues(id){     
							document.getElementById("rm"+id).remove();
					}
		</script>
		
		<script type="text/javascript"> 
          function reminder(id) {   
            var xhttp;    
            if (id == "") {
            return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText); 
                    var data_json = JSON.parse(this.responseText);
                    document.getElementById("start_date").value = data_json.insidereminder[0].reminder_sheet_start_date;
                    document.getElementById("end_date").value = data_json.insidereminder[0].reminder_sheet_end_date;
                    document.getElementById("start_time").value = data_json.insidereminder[0].reminder_sheet_start_time;
                    document.getElementById("end_time").value = data_json.insidereminder[0].reminder_sheet_end_time;
                    document.getElementById("frequency").value = data_json.insidereminder[0].reminder_sheet_frequency;
                    document.getElementById("subject").value = data_json.insidereminder[0].reminder_sheet_subject;
                    document.getElementById("status").value = data_json.insidereminder[0].reminder_sheet_status;
                    document.getElementById("delegate_name").value = data_json.insidereminder[0].reminder_sheet_delegates_name;
                    document.getElementById("delegate_email").value = data_json.insidereminder[0].reminder_sheet_delegates_email;
                    document.getElementById("phone").value = data_json.insidereminder[0].reminder_sheet_delegates_phone;
    				document.getElementById("reminder_form").action = "<?php echo base_url(); ?>Reminder/insert_sheet/"+data_json.insidereminder[0].reminder_sheet_id;
                    document.getElementById("set_submail").innerHTML = "<input type='submit' name='submail' class='btn-primary btn check_mail' value='submit & Mail'></input>";

                    for(var i=0; i<data_json.insidereminder.length ; i++){
                        var j = i +1 ;
                        $('#delete').append('<div class="clear"></div><div id="rm'+i+'" class="auto-del" ><div id="refresh_popup_js"><div id="auto-del"><div  class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input type="text" required id="delegate_name" title="Delegate To" name="delegate_to[]" value="'+ data_json.insidereminder[j].reminder_sheet_delegates_name +'" /></div></div></div></div><div class="center" class="col-md-3"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input type="text" name="email[]" required id="delegate_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="'+ data_json.insidereminder[j].reminder_sheet_delegates_email +'" /></div></div></div></div><div class="center" class="col-md-3"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input type="text" id="phone" name="phone[]" required value="'+ data_json.insidereminder[j].reminder_sheet_delegates_phone +'" /></div></div></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ i + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div></div>');
                    }
                }
            };
                xhttp.open("GET", "<?php echo base_url(); ?>Reminder/reminder_view/"+id, true);
                xhttp.send();
                $('.popup').show(); 
				 $('.popup-main').css('display','block');
				 $('.popup').css('display','block');
            }

            
        </script>
	 
    <script>
        $(document).ready(function () {
            var count = 0;
            var count2 = 0;

            $('#sec-header #toggle-btn-box span#bar').click(function () {
                if ($(window).width() >= 769) {
                    if (count % 2 == 0) { $('#aside').css('display', 'none'); $('.main-area-dashboard #left').css('width', '0%'); $('.main-area-dashboard #right').css('width', '100%'); }
                    else { $('#aside').css('display', 'block'); $('.main-area-dashboard #left').css('width', '15%'); $('.main-area-dashboard #right').css('width', '85%'); }
                    count++;
                }
                else {

                    if (count2 % 2 == 0) { $('.mobile-menu-bar').css('display', 'block'); }
                    else { $('.mobile-menu-bar').css('display', 'none'); }
                    count2++;
                }

            });

            $('.log-popup').on('click', function () {
                $('.log-up-body').toggle('slow');

            });

            // window resize option
            $(window).bind('resize', function () {
                if ($(window).width() > 768) {
                    $('#aside').css('display', 'block'); $('.mobile-menu-bar').css('display', 'none');
                    $('.main-area-dashboard #right').css('width', '85%');
                    $('.main-area-dashboard #left').css('width', '15%');
                }
                else {
                    $('#aside').css('display', 'none');
                    $('.main-area-dashboard #right').css('width', '100%'); $('.mobile-menu-bar').css('display', 'none');
                }
            });
        });


        $('#open-popup').on('click', function () { $('.popup , .popup-main').css('display', 'block'); });
        $('#close-popup').on('click', function () { $('.popup , .popup-main').css('display', 'none'); })
    </script>
 <?php $this->load->view('footer'); ?>
</div>