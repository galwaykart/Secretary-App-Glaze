<?php
/*
@the data are showing from 4 different tables using join query.
@auto-search for agenda of meeting.
@add multiple participants
@add multiple conclusion for the meeting.
@show multiple participants and conclusion of meeting.	 
@update and delete the participants and conclusion.
@Self-seating- If the self-seating is Yes, the user will be the secretary of the application.
If the self-seating is No, there should be a choosing option to select the secretary of the meeting. 
@Participant’s Name – it will be automatically fed with similarity to Index meeting in progress.
The sheet needs to be shared by the limited number of participants.
The status should be there to mark the attendance of the participants.
@Conclusion Communication by – This need to be filled by the user how the communication has been made.
*/
?>
	   <?php $this->load->view('head'); ?> 
	   <?php $this->load->view('header'); ?>
		<!-- user View design page start -->
<style>
#tabs{
	background-color:#d87514;
	color:white;
	float:left;
}
.form_error{color:red; font-size:12px;}

</style>
		<div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Meeting Info</p></div>
		<div class="col-md-12 all-mettings">

			<form method="post"  action="<?php if(isset($fetch['data1'])){echo base_url()."Indexmeeting/insert_meeting/".$fetch['data1'][0]->index_meeting_id;}else{echo base_url()."Indexmeeting/insert_meeting/";} ?>">
				<div class="Mettings-View-index-panel"> 
					<div class=" meeting-info-panel">
						<div class="container4">
							<div class="col-md-4">
								<div class="form-group">
									<label>Preview Meeting Date</label>
									<div class="input-group">
										<div class="form-control">
											<input type="date" title="Prev Meeting Date" name="previous_date"  value="<?php if(isset($fetch['data1'])){echo $fetch['data1'][0]->date_of_meeting;} //else{echo set_value('previous_date'); }  ?>" />
											<?php //echo form_error('previous_date', '<span class="form_error">', '</span>'); ?></span>
										</div>
									</div>
								</div>
							</div>	
							<div class="col-md-4">
								<div class="form-group">
									<label>Next Meeting Date</label>
									<div class="input-group">
										<div class="form-control"><input type="date"  title="Next Meeting Date" required name="index_meeting_next_date" value="<?php if(isset($fetch['data1'])){echo $fetch['data1'][0]->index_meeting_next_date;} else{echo set_value('index_meeting_next_date'); }  ?>"/></div>
										<?php echo form_error('index_meeting_next_date', '<span class="form_error">', '</span>'); ?></span>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Start Time</label>
									<div class="input-group">
										<div class="form-control"><input type="time"  title="Start Time" required name="index_meeting_start_time" value="<?php if(isset($fetch['data1'])){echo $fetch['data1'][0]->index_meeting_start_time;} else{echo set_value('index_meeting_start_time'); } ?>"/></div>
										<?php echo form_error('index_meeting_start_time', '<span class="form_error">', '</span>'); ?></span>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>End Time</label>
									<div class="input-group">
										<div class="form-control"><input type="time"  title="End Time" required name="index_meeting_end_time" value="<?php if(isset($fetch['data1'])){echo $fetch['data1'][0]->index_meeting_end_time;} else{echo set_value('index_meeting_end_time'); } ?>"/></div>
										<?php echo form_error('index_meeting_end_time', '<span class="form_error">', '</span>'); ?></span>
									</div>
								</div>
							</div>
							<div class="col-md-4">
                                <div class="form-group">
									<label>Self Seating</label>
									<div class="input-group">
										<div class="form-control">
											<select name="seating">
												<option value="1" <?php if(isset($fetch['data1'])){ if($fetch['data1'][0]->self_seating == "1"){ echo "selected"; }} ?> > Yes</option>
												<option value="0" <?php if(isset($fetch['data1'])){ if($fetch['data1'][0]->self_seating == "0"){ echo "selected"; }} ?>> No</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label>Confidentiality</label>
									<div class="input-group">
										<div class="form-control">
											<select name="confidentiality">
												<option value="1" <?php if(isset($fetch['data1'])){ if($fetch['data1'][0]->confidentiality == "1"){ echo "selected"; }} ?> >Gen</option>
												<option value="2" <?php if(isset($fetch['data1'])){ if($fetch['data1'][0]->confidentiality == "2"){ echo "selected"; }} ?>>Med</option>
												<option value="3" <?php if(isset($fetch['data1'])){ if($fetch['data1'][0]->confidentiality == "3"){ echo "selected"; }} ?>>Top</option>
											</select>
										</div>
									</div>
								</div>
							</div> <!-- end col-md-4 column -->
							  <div class="col-md-4">
								<div class="form-group">
								  <label>Agenda of Meeting :</label>
								  <div class="input-group second-panel-input-group">
									<div class="form-control">
									  <input type="text" placeholder="Ajenda of Meeting" required="" id="search" name="agenda"  value="<?php if(isset($fetch['data2'])){ echo $fetch['data2'][0]->agenda_name;} else{ echo set_value('agenda'); } ?>" />

									</div>
 
                    <div class="metting-search"><?php echo form_error('agenda', '<span class="form_error">', '</span>'); ?>
</div>
									 
								  </div>
								</div>
							  </div> 
								<div class="col-md-4" >
									<div class="form-group">
									    <label>Meeting Called By</label>
										<div class="input-group">
											<div class="form-control"><input type="text" placeholder="Meeting Called By" required  name="meeting_called_by" value="<?php if(isset($fetch['data1'])){ echo $fetch['data1'][0]->meeting_called_by;} else{echo set_value('meeting_called_by[]');} ?>" /></div>
											<?php echo form_error('meeting_called_by', '<span class="form_error">', '</span>'); ?></span>
										</div>
									</div>
								</div>  
						</div>
					</div> <!-- next second panel start -->
					<div class="clear"></div>
					<div class="col-md-12 meet-second-panel">
						
						<div class="col-md-12 bottompanel-one">
							<div class="container4">
								<div class="tab">
									<a href="#" onclick="openTabs(event, 'one')" id="tabs" class="tablinks active" ></a>
								</div>
								<div id="one" class="tabcontent" style="display:block;" >
									<h3 class="tabconh3">Present Participate</h3>
									<div class="padding-btn-rigth">
									      <a href="#" class="ad btn-primary btn participater" id="add1" title="Add New Participate">
                          <span class="fa fa-plus"></span>
                        </a>
									</div>
									<div class="clear"></div>
									<div class="customclass">
										<div class="col-md-66" class="RegSpLeft" id="addmr" >
										    <label>Department</label>
											<div class="form-group" >
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-building-o" ></span></div>
													<div class="form-control"><input type="text" required placeholder="Department" id="department" name="department[]" value="<?php if(isset($fetch['data1'])){ echo $fetch['data1'][0]->department;} else{echo set_value('department[]');} ?>" /></div>
													<?php echo form_error('department[]', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
										</div> 
										<div class="col-md-66" class="RegSpLeft" id="addmr">
										 <label>Is Employee</label>
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-user-o" ></span></div>
													<div class="form-control">
													<select name="employee[]" >
														<option value="1" <?php if(isset($fetch['data1'])){ if($fetch['data1'][0]->employee == "1"){ echo "selected"; }} ?>>Yes</option>
														<option value="0" <?php if(isset($fetch['data1'])){ if($fetch['data1'][0]->employee == "0"){ echo "selected"; }} ?>>No</option>
													</select>
													</div>
												</div>
											</div>
										</div>  
										<div class="col-md-66" class="RegSpLeft" id="name">
										 <label>Name</label>
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-edit" ></span></div>
													<div class="form-control"><input type="text" placeholder="Name" required id="name" name="name[]" value="<?php if(isset($fetch['data1'])){ echo $fetch['data1'][0]->name;} else{echo set_value('name[]');} ?>" /></div>
													<?php echo form_error('name[]', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
										</div>  
										<div class="col-md-66" class="RegSpLeft" id="email">
										 <label>Email Id</label>
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
													<div class="form-control"><input type="text" placeholder="Email Id" required id ="email" name="email[]" value="<?php if(isset($fetch['data1'])){ echo $fetch['data1'][0]->email;} else{echo set_value('email[]');} ?>"/></div>
													<?php echo form_error('email', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
										</div> 
										<div class="col-md-66" class="RegSpLeft" id="number">
										 <label>Phone Number</label>
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-phone" ></span></div>
													<div class="form-control"><input type="text" placeholder="Phone Number" required  name="phone_number[]" value="<?php if(isset($fetch['data1'])){ echo $fetch['data1'][0]->phone_number;} else{echo set_value('phone_number[]');} ?>"/></div>
													<?php echo form_error('phone_number', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
										</div> 
										<div class="col-md-66" class="RegSpLeft" id="addmr">
										 <label>Present/Absent</label>
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-user-o" ></span></div>
													<div class="form-control">
													<select name="is_employee[]" >
														<option value="1" <?php if(isset($fetch['data1'])){ if($fetch['data1'][0]->is_employee == "1"){ echo "selected"; }} ?>>Present</option>
														<option value="0" <?php if(isset($fetch['data1'])){ if($fetch['data1'][0]->is_employee == "0"){ echo "selected"; }} ?>>Absent</option>
													</select>
													</div>
												</div>
											</div>
										</div>  

									</div> 
									
							        <?php
									if(isset($fetch['data1'])){ $i = 0; 
										foreach($fetch['data1'] as $record){	 
											if($i != '0'){ ?>
												<div class="clear"></div>
												<div id="rm<?php echo $i; ?>" class="customclass"> 
													<div class="col-md-2" class="RegSpLeft" id="addmr" >
														<div class="form-group" >
															<div class="input-group">
																<div class="input-addon"><span class="fa fa-building-o" ></span></div>
																<div class="form-control"><input type="text" placeholder="Department"  id="department" name="department[]" required value="<?php if(isset($record)){ echo $record->department;} else{echo set_value('department[]');}?>" />
																<?php echo form_error('department[]', '<span class="form_error">', '</span>'); ?></span>
																</div>
																
															</div>
														</div>
													</div> 
													<div class="col-md-2" class="RegSpLeft" id="addmr">
														<div class="form-group">
															<div class="input-group">
																<div class="input-addon"><span class="fa fa-user-o" ></span></div>
																<div class="form-control">
													<select name="employee[]" >
														<option value="1" <?php if(isset($record)){ if($record->employee == "1"){ echo "selected"; }} ?>>Yes</option>
														<option value="0" <?php if(isset($record)){ if($record->employee == "0"){ echo "selected"; }} ?>>No</option>
													</select>
																</div>
															</div>
														</div>
													</div>  
													<div class="col-md-2" class="RegSpLeft" id="name">
														<div class="form-group">
															<div class="input-group">
																<div class="input-addon"><span class="fa fa-edit" ></span></div>
																<div class="form-control"><input type="text" placeholder="Name" required id="name" name="name[]" value="<?php if(isset($record)){ echo $record->name;} else{echo set_value('name[]');} ?>" />
																<?php echo form_error('name[]', '<span class="form_error">', '</span>'); ?></span>
																</div>
															</div>
														</div>
													</div>  
													<div class="col-md-2" class="RegSpLeft" id="email">
														<div class="form-group">
															<div class="input-group">
																<div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
																<div class="form-control"><input type="text" placeholder="Email Id" required id ="email" name="email[]" value="<?php if($record){ echo $record->email;} else{echo set_value('email[]');}?>"/>
																<?php echo form_error('email[]', '<span class="form_error">', '</span>'); ?></span>
																</div>
															</div>
														</div>
													</div> 
										<div class="col-md-2" class="RegSpLeft" id="number">
										
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-phone" ></span></div>
													<div class="form-control"><input type="text" placeholder="Phone Number" required  name="phone_number[]" value="<?php if($record){ echo $record->phone_number;} else{echo set_value('phone_number[]');} ?>"/></div>
													<?php echo form_error('phone_number', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
										</div> 
										<div class="col-md-2" class="RegSpLeft" id="addmr">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-user-o" ></span></div>
													<div class="form-control">
													<select name="is_employee[]" >
														<option value="1" <?php if(isset($record)){ if($record->is_employee == "1"){ echo "selected"; }} ?>>Present</option>
														<option value="0" <?php if(isset($record)){ if($record->is_employee == "0"){ echo "selected"; }} ?>>Absent</option>
													</select>
													</div>
												</div>
											</div>
										</div>   
										<div class="" class="">								 
											<div class="margin-top" style="text-align:center">
												<a href="#"  onclick="setValues(<?php echo $i; ?>)" class="ad btn-eror btn removebtn">&times;</a>
												<div class="col-md-2" class="RegSpLeft">								 
													<div class="btn-group margin-top" style="text-align:center">
														<a href="#"  onclick="setValues(<?php echo $i; ?>)" class="btn-eror btn">Delete</a>
													</div>
												</div>
											</div>
											  <?php } 
										  $i++; } 
											}?>
										</div> 
									
							</div>	
						</div>	
					</div>	
					<div class="clear"></div>
					
						<div class="col-md-12 conclution-panel"><!-- conclution panel start -->
							<div class="container4">
								<div class="col-md-12">
									<div class="conclution-body" id="conclusion">
                    <div class="col-md-12 text-right" >
                      <a href="#" class="btn btn-primary participater" id="add" title="Add New Conclusion">
                        <span class="fa fa-plus"></span>
                      </a>
                    </div>
                    <br></br>
                    <div class="clear"></div>
											<div class="canclution-inner-body  col-md-12">
												<div class="body-input-tabs">
													<div class="col-md-3">  <label>Conclusion of Meeting : </label></div>
													<div class="col-md-9">
														<textarea class="conclu-text" required  name="conclusion_textarea[]">
															<?php if(isset($fetch['data3'])){ echo htmlspecialchars($fetch['data3'][0]->conclusion_textarea); } else{echo set_value('conclusion_textarea[]');} ?>
														</textarea>
														<?php echo form_error('conclusion_textarea[]', '<span class="form_error">', '</span>'); ?>

													</div>
												</div>
												<div class="body-input-tabs">
													<div class="col-md-3"><label>Conclusion Type : </label></div>
													<div class="col-md-9">
														<select  name="conclusion_type[]">
															<option value="1" <?php if(isset($fetch['data3'])){ if($fetch['data3'][0]->conclusion_type == "1"){ echo "selected"; }} ?>>Minute</option>
															<option value="2" <?php if(isset($fetch['data3'])){ if($fetch['data3'][0]->conclusion_type == "2"){ echo "selected"; }} ?>>decision</option>
															<option value="3" <?php if(isset($fetch['data3'])){ if($fetch['data3'][0]->conclusion_type == "3"){ echo "selected"; }} ?>>reminder</option>
															<option value="4" <?php if(isset($fetch['data3'])){ if($fetch['data3'][0]->conclusion_type == "4"){ echo "selected"; }} ?>>Appointment/Quick Work/Periodic/Project/other</option>
														</select>
													</div>
												</div>
												<div class="body-input-tabs">
													<div class="col-md-3"> <label>Delegate To : </label></div>
													<div class="col-md-3"> <input type="text" required placeholder="Department"  name="delegated_dept[]" value="<?php if(isset($fetch['data3'])){ echo $fetch['data3'][0]->delegated_dept;} else{echo set_value('delegated_dept[]');}?>"/>
													<?php echo form_error('delegated_dept[]', '<span class="form_error">', '</span>'); ?>
													</div>
													<div class="col-md-3">
													<select name="delegated_name[]" >
													<option value="1" <?php if(isset($fetch['data3'])){ if($fetch['data3'][0]->delegated_name == "1"){ echo "selected"; }} ?>>Yes</option>
													<option value="0" <?php if(isset($fetch['data3'])){ if($fetch['data3'][0]->delegated_name == "0"){ echo "selected"; }} ?>>No</option>
													</select>
													</div>
												</div>
												<div class="body-input-tabs">
													<div class="col-md-3"> <label>Target Date : </label></div>
													<div class="col-md-9"><input type="date" required name="targetdate[]" value="<?php if(isset($fetch['data3'])){ echo $fetch['data3'][0]->targetdate;} else{echo set_value('targetdate[]');} ?>"/>
													<?php echo form_error('targetdate[]', '<span class="form_error">', '</span>'); ?>
													</div>
												</div>
											</div>
											<div class="body-input-tabs "> 
												
											</div>
										 <div class="clear"></div>
                    
							 <?php  $j = 0;
								if(isset($fetch['data3'])){									
									foreach($fetch['data3'] as $record1){	 
										if($j != '0'){  ?>
											
											<div id="rm1<?php echo $j; ?>" style="margin: 27px 0;" class="col-md-12 customclass1"> 
												<div class="canclution-inner-body  ">
													<div class="body-input-tabs">
														<div class="col-md-3">  <label>Conclusion of Meeting : </label></div>
														<div class="col-md-9">
															<textarea class="conclu-text"  required  name="conclusion_textarea[]" >
																<?php if(isset($record1)){ echo $record1->conclusion_textarea; } else{echo set_value('conclusion_textarea[]');} ?>
															</textarea>
															<?php echo form_error('conclusion_textarea[]', '<span class="form_error">', '</span>'); ?>
														</div>
													</div>
													<div class="body-input-tabs">
														<div class="col-md-3"><label>Conclusion Type : </label></div>
														<div class="col-md-9">
															<select  name="conclusion_type[]">
																<option value="1" <?php if(isset($record1)){ if($record1->conclusion_type == "1"){ echo "selected"; }} ?>>Minute</option>
																<option value="2" <?php if(isset($record1)){ if($record1->conclusion_type == "2"){ echo "selected"; }} ?>>decision</option>
																<option value="3" <?php if(isset($record1)){ if($record1->conclusion_type == "3"){ echo "selected"; }} ?>>reminder</option>
																<option value="4" <?php if(isset($record1)){ if($record1->conclusion_type == "4"){ echo "selected"; }} ?>>Appointment/Quick Work/Periodic/Project/other</option>
															</select>
														</div>
													</div>
													<div class="body-input-tabs">
														<div class="col-md-3"> <label>Delegate To : </label></div>
														<div class="col-md-3"> <input type="text" required placeholder="Department"  name="delegated_dept[]" value="<?php if($record1){ echo $record1->delegated_dept;} else{echo set_value('delegated_dept[]');} ?>"/>
														<?php echo form_error('delegated_dept[]', '<span class="form_error">', '</span>'); ?>
														</div>
														<div class="col-md-3">
															<select name="delegated_name[]" >
																<option value="1" <?php if(isset($record1)){ if($record1->delegated_name == "1"){ echo "selected"; }} ?>>Yes</option>
																<option value="0" <?php if(isset($record1)){ if($record1->delegated_name == "0"){ echo "selected"; }} ?>>No</option>
															</select>
														</div>
													</div>
												
													<div class="body-input-tabs c">
														<div class="col-md-3"> <label>Target Date : </label></div>
														<div class="col-md-9"><input type="date" name="targetdate[]" required value="<?php if(isset($record1)){ echo $record1->targetdate;} else {echo set_value('targetdate');} ?>" />
														<?php echo form_error('targetdate[]', '<span class="form_error">', '</span>'); ?>
														</div>
													</div>
												</div>                 
												<div class="col-md-2" class="RegSpLeft">								 
													<div class="btn-group margin-top" style="text-align:center">
														<a href="#"  onclick="setValues1(<?php echo $j; ?>)"  class="btn-eror btn" >Delete</a>
													</div>
												</div>	
											</div>													 
								  <?php } 
							  $j++; } 
								} ?>
								<!-- conclution panel end -->
									</div>				  
								</div>
							</div>
						</div>
				  
					<div class="btn-group col-md-12 metting-ingo-submit-btn text-center" style="height:  74px;">
						<button type="submit" class="btn-primary btn">submit</button>
						<?php if($this->uri->segment(3)){?>
                            <input type="submit" name="submail" class="btn-primary btn" value="submit & Mail"></input>
                            <?php }?>
					</div>
					<div style="height:80px;"></div>
					<div class="clear"></div>
				</div>	
			</form>
			<div class="clear"></div>
		</div>	
			<div class="clear"></div>
		<script type = 'text/javascript'>
		   $("#search").autocomplete({
				minLength: 1,
				source: function(req, add){  
					$.ajax({
						url: '<?php echo base_url(); ?>/indexmeeting/get_agenda', //Controller where search is performed
						dataType: 'json',
						type: 'POST',
						data: 'agenda='+$("#search").val(),
						
						success: function(data){
							if(data.response =='true'){
								add(data.message);
							    //add(data.message); 
							 
								console.log(data.message);
							}
							else {add(data.message).text("No found");}
						}
					});
					}	
					
			});                 
	    </script>
		 
		<script type="text/javascript"> 
		
			$(function(){
				$('a.ad').click(function(e) {
					e.preventDefault();
					  var lnth = $('#one .customclass').length; 
					console.log(lnth);
				   $('#one').append('<div class="clear"></div><div id="rm'+lnth+'" class="customclass"><div class="col-md-66" id="addmr"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-building-o"></span></div><div class="form-control"><input type="text" placeholder="Department" required id="department" name="department[]"></div></div></div></div><div class="col-md-66" id="addmr"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-user-o"></span></div><div class="form-control"><select name="employee[]" ><option value="1" >Yes</option><option value="0" >No</option></select></div></div></div></div><div class="col-md-66" id="name"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-edit"></span></div><div class="form-control"><input type="text" placeholder="Name" required pattern="[a-zA-Z ]{1,100}" title="Name should only contain letters. e.g. john"   id="name"  name="name[]"></div></div></div></div><div class="col-md-66" id="email"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-envelope-o"></span></div><div class="form-control"><input type="text" placeholder="Email Id" id="email" title ="Please enter valid email id" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email[]"></div></div></div></div><div class="col-md-66" id="number"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-phone"></span></div><div class="form-control"><input type="text" placeholder="Phone Number" required="" name="phone_number[]" value=""></div></div></div></div><div class="col-md-66" class="RegSpLeft" id="addmr"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-user-o" ></span></div><div class="form-control"><select name="is_employee[]" ><option value="1" >Present</option><option value="0" >Absent</option></select></div></div></div><a href="#"  onclick="setValues('+ lnth + ')"  class="ad btn-eror btn removebtn">&times;</a></div></div>');
				});
			});
			function setValues(id){
				document.getElementById("rm"+id).remove(); 
			}
		</script>
			
		<script type="text/javascript"> 
		
			$(function() {
				$('a#add').click(function(e) {
					e.preventDefault();
					var lnth1 = $('#conclusion .customclass1').length; 
				 $('#conclusion').append('<div id="rm1'+lnth1+'"  style="margin: 27px 0;"  class="col-md-12 customclass1"><div class="col-md-12"><div class="container4"><div class="col-md-12"><div class="conclution-body"><div class="canclution-inner-body col-md-12"><div class="body-input-tabs"><div class="col-md-3">  <label>Conclusion of Meeting : </label></div><div class="col-md-9"><textarea class="conclu-text" required name="conclusion_textarea[]" ></textarea></div></div><div class="body-input-tabs"><div class="col-md-3"> <label>Conclusion Type : </label></div><div class="col-md-9"><select  name="conclusion_type[]"><option value="1">Minute</option><option value="2">decision</option><option value="3">reminder</option><option value="4">Appointment/Quick Work/Periodic/Project/other</option></select></div></div><div class="body-input-tabs"><div class="col-md-3"> <label>Delegate To : </label></div><div class="col-md-3"> <input type="text"  placeholder="Department" required name="delegated_dept[]"/></div><div class="col-md-3"><select name="delegated_name[]" ><option value="1" >Yes</option><option value="0" >No</option></select></div></div><div class="body-input-tabs"><div class="col-md-3"> <label>Target Date : </label></div><div class="col-md-9"><input type="date" required name="targetdate[]" /></div></div></div><div class="body-input-tabs col-md-12"><div class="col-md-12 text-rigth"><a href="#"  onclick="setValues1('+ lnth1 + ')"  class="ad btn-eror btn inputclass">&times;</a></div></div></div></div></div></div></div><div class="clear"></div>');
				  
				});
			});
			function setValues1(id){  
				document.getElementById("rm1"+id).remove();
			}
		</script>
 
		 <br/><br/><br/> 
		<?php $this->load->view('footer'); ?>
 
