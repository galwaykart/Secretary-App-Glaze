
<!doctype html>
<html> 
	<style>
		.form_error{color:red; font-size:10px;}
	</style>
	<?php $this->load->view('head'); ?>
	<body class="body style-6"><!-- body tag start -->
	   <!-- globle header for comman start --> 

	   <?php $this->load->view('header'); ?>
		<!-- user View design page start -->

		<div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Meeting Info</p></div>
		<div class="col-md-12 all-mettings">

			<form method="post"  action="<?php if($fetch){echo base_url()."Indexmeeting/insert_meeting/".$fetch['data1'][0]->index_meeting_id;}else{echo base_url()."Indexmeeting/insert_meeting/";} ?>">
				<div class="Mettings-View-index-panel"> 
					<div class=" meeting-info-panel">
						<div class="container4">
							<div class="col-md-4">
								<div class="form-group">
									<label>Preview Meeting Date</label>
									<div class="input-group">
										<div class="form-control">
											<input type="date" title="Prev Meeting Date" name="previous_date" required value="<?php if($fetch){echo $fetch['data1'][0]->date_of_meeting;} ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Next Meeting Date</label>
									<div class="input-group">
										<div class="form-control"><input type="date" required title="Next Meeting Date" name="next_date"/></div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
                                <div class="form-group">
									<label>Self Seating</label>
									<div class="input-group">
										<div class="form-control">
											<select name="seating">
												<option value="1" <?php if($fetch){ if($fetch['data1'][0]->self_seating == "1"){ echo "selected"; }} ?> > Yes</option>
												<option value="0" <?php if($fetch){ if($fetch['data1'][0]->self_seating == "0"){ echo "selected"; }} ?>> No</option>
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
												<option value="1" <?php if($fetch){ if($fetch['data1'][0]->confidentiality == "1"){ echo "selected"; }} ?> >Gen</option>
												<option value="2" <?php if($fetch){ if($fetch['data1'][0]->confidentiality == "2"){ echo "selected"; }} ?>>Med</option>
												<option value="3" <?php if($fetch){ if($fetch['data1'][0]->confidentiality == "3"){ echo "selected"; }} ?>>Top</option>
											</select>
										</div>
									</div>
								</div>
							</div> <!-- end col-md-4 column -->
						</div>
					</div> <!-- next second panel start --->
					
					<div class="col-md-12 meet-second-panel">
						<div class="container4">
							<div class="col-md-4">
								<label>Agenda of Meeting :</label>
							</div>
							<div class="col-md-8">
								<input type="text" placeholder="Ajenda of Meeting" id="search" name="agenda"  required value="<?php if($fetch){ echo $fetch['data2'][0]->agenda_name;} ?>" />
							</div>
						</div> <!-- start TAB -->
						<div class="col-md-12 bottompanel-one">
							<div class="container4">
								<div class="tab">
									<a class="tablinks active " onclick="openTabs(event, 'one')">Present Participate</a>
									<a class="tablinks " onclick="openTabs(event, 'two')">Absent Participate</a>
								</div>
								<div id="one" class="tabcontent" style="display:block;" >
									<h3>Present Participate</h3>
									<div class="customclass">
										<div class="col-md-2" class="RegSpLeft" id="addmr" >
											<div class="form-group" >
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-building-o" ></span></div>
													<div class="form-control"><input type="text" placeholder="Department" required id="department" name="department[]" value="<?php if($fetch){ echo $fetch['data1'][0]->department;} ?>" /></div>
												</div>
											</div>
										</div> 
										<div class="col-md-2" class="RegSpLeft" id="addmr">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-user-o" ></span></div>
													<div class="form-control"><input type="text" placeholder="Employee"  required id="employee" name="employee[]"  value="<?php if($fetch){ echo $fetch['data1'][0]->employee;} ?>"  /></div>
												</div>
											</div>
										</div>  
										<div class="col-md-2" class="RegSpLeft" id="name">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-edit" ></span></div>
													<div class="form-control"><input type="text" placeholder="Name" id="name" name="name[]" title="Name should only contain letters. e.g. john"  required pattern="[a-zA-Z ]{1,100}" value="<?php if($fetch){ echo $fetch['data1'][0]->name;} ?>" /></div>
												</div>
											</div>
										</div>  
										<div class="col-md-2" class="RegSpLeft" id="email">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
													<div class="form-control"><input type="text" placeholder="Email Id" id ="email" name="email[]" required title ="Enter Valid Email id" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php if($fetch){ echo $fetch['data1'][0]->email;} ?>"/></div>
												</div>
											</div>
										</div> 
										<div class="col-md-2"> 
											<div class="btn-group margin-top" style="text-align:center">
												<a href="#" class="ad btn-primary btn" id="add1">Add Participate</a>
													&nbsp;&nbsp;
													<!-- <a  href="#" class=" btn btn-eror  "  >Reset</a> -->
											</div>	
										</div> 
									</div> 
							        <?php $i = 0; 
									if($fetch){
										foreach($fetch['data1'] as $record){	 
											if($i != '0'){ ?>
												<div class="clear"></div>
												<div id="rm<?php echo $i; ?>" class="customclass"> 
													<div class="col-md-2" class="RegSpLeft" id="addmr" >
														<div class="form-group" >
															<div class="input-group">
																<div class="input-addon"><span class="fa fa-building-o" ></span></div>
																<div class="form-control"><input type="text" placeholder="Department" required id="department" name="department[]" value="<?php if($record){ echo $record->department;} ?>" /></div>
															</div>
														</div>
													</div> 
													<div class="col-md-2" class="RegSpLeft" id="addmr">
														<div class="form-group">
															<div class="input-group">
																<div class="input-addon"><span class="fa fa-user-o" ></span></div>
																<div class="form-control"><input type="text" placeholder="Employee"  required id="employee" name="employee[]"  value="<?php if($record){ echo $record->employee;} ?>"  /></div>
															</div>
														</div>
													</div>  
													<div class="col-md-2" class="RegSpLeft" id="name">
														<div class="form-group">
															<div class="input-group">
																<div class="input-addon"><span class="fa fa-edit" ></span></div>
																<div class="form-control"><input type="text" placeholder="Name" id="name" name="name[]" title="Name should only contain letters. e.g. john"  required pattern="[a-zA-Z ]{1,100}" value="<?php if($record){ echo $record->name;} ?>" /></div>
															</div>
														</div>
													</div>  
													<div class="col-md-2" class="RegSpLeft" id="email">
														<div class="form-group">
															<div class="input-group">
																<div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
																<div class="form-control"><input type="text" placeholder="Email Id" id ="email" name="email[]" required title ="Enter Valid Email id" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php if($record){ echo $record->email;} ?>"/></div>
															</div>
														</div>
													</div> 
													<div class="col-md-2" class="RegSpLeft">								 
														<div class="btn-group margin-top" style="text-align:center">
															<a href="#"  onclick="setValues(<?php echo $i; ?>)"  class="ad btn-eror btn">Delete</a>
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
																			
					<div id="two" class="tabcontent-1"> <!-- tabs end -->
					   
						<div class="col-md-12 conclution-panel"><!-- conclution panel start -->
							<div class="container4">
								<div class="col-md-12">
									<div class="conclution-body" id="conclusion">
										<div  class="customclass1">
											<div class="canclution-inner-body  col-md-6">
												<div class="body-input-tabs">
													<div class="col-md-3">  <label>Conclusion of Meeting : </label></div>
													<div class="col-md-9">
														<textarea class="conclu-text" required  name="conclusion_textarea[]">
															<?php if($fetch){ echo htmlspecialchars($fetch['data3'][0]->conclusion_textarea); } ?>
														</textarea>
													</div>
												</div>
												<div class="body-input-tabs">
													<div class="col-md-3"><label>Conclusion Type : </label></div>
													<div class="col-md-9">
														<select  name="conclusion_type[]">
															<option value="1" <?php if($fetch){ if($fetch['data3'][0]->conclusion_type == "1"){ echo "selected"; }} ?>>Minute</option>
															<option value="2" <?php if($fetch){ if($fetch['data3'][0]->conclusion_type == "2"){ echo "selected"; }} ?>>decision</option>
															<option value="3" <?php if($fetch){ if($fetch['data3'][0]->conclusion_type == "3"){ echo "selected"; }} ?>>reminder</option>
															<option value="4" <?php if($fetch){ if($fetch['data3'][0]->conclusion_type == "4"){ echo "selected"; }} ?>>Appointment/Quick Work/Periodic/Project/other</option>
														</select>
													</div>
												</div>
												<div class="body-input-tabs">
													<div class="col-md-3"> <label>Delegate To : </label></div>
													<div class="col-md-3"> <input type="text"  placeholder="Department" required name="delegated_dept[]" value="<?php if($fetch){ echo $fetch['data3'][0]->delegated_dept;} ?>"/></div>
													<div class="col-md-3"><input type="text"  placeholder="Employee" required name="delegated_name[]" value="<?php if($fetch){ echo $fetch['data3'][0]->delegated_name;} ?>"/></div>
												</div>
												<div class="body-input-tabs">
													<div class="col-md-3"> <label>Target Date : </label></div>
													<div class="col-md-9"><input type="date" required name="targetdate[]" value="<?php if($fetch){ echo $fetch['data3'][0]->targetdate;} ?>"/></div>
												</div>
											</div>
											<div class="body-input-tabs col-md-6"> 
												<div class="col-md-9">
													<a href="#" class="btn btn-primary" id="add">Add Conclusion</a> &nbsp;&nbsp;
												</div>
											</div>
										</div>				  
								
							 <?php $j = 0; 
								if($fetch){
									foreach($fetch['data3'] as $record1){	 
										if($j != '0'){  ?>
											<div class="clear"></div>
											<div id="rm1<?php echo $j; ?>" style="margin: 27px 0;" class="col-md-12 customclass1"> 
												<div class="canclution-inner-body  col-md-6">
													<div class="body-input-tabs">
														<div class="col-md-3">  <label>Conclusion of Meeting : </label></div>
														<div class="col-md-9">
															<textarea class="conclu-text"  required  name="conclusion_textarea[]" >
																<?php if($record1){ echo $record1->conclusion_textarea; } ?>
															</textarea>
														</div>
													</div>
													<div class="body-input-tabs">
														<div class="col-md-3"><label>Conclusion Type : </label></div>
														<div class="col-md-9">
															<select  name="conclusion_type[]">
																<option value="1" <?php if($record1){ if($record1->conclusion_type == "1"){ echo "selected"; }} ?>>Minute</option>
																<option value="2" <?php if($record1){ if($record1->conclusion_type == "2"){ echo "selected"; }} ?>>decision</option>
																<option value="3" <?php if($record1){ if($record1->conclusion_type == "3"){ echo "selected"; }} ?>>reminder</option>
																<option value="4" <?php if($record1){ if($record1->conclusion_type == "4"){ echo "selected"; }} ?>>Appointment/Quick Work/Periodic/Project/other</option>
															</select>
														</div>
													</div>
													<div class="body-input-tabs">
														<div class="col-md-3"> <label>Delegate To : </label></div>
														<div class="col-md-3"> <input type="text"  placeholder="Department" required name="delegated_dept[]" value="<?php if($record1){ echo $record1->delegated_dept;} ?>"/></div>
														<div class="col-md-3"><input type="text"  placeholder="Employee" required name="delegated_name[]" value="<?php if($record1){ echo $record1->delegated_name;} ?>"/></div>
													</div>
													<div class="body-input-tabs">
														<div class="col-md-3"> <label>Target Date : </label></div>
														<div class="col-md-9"><input type="date" required name="targetdate[]" value="<?php if($record1){ echo $record1->targetdate;} ?>" /></div>
													</div>
												</div>                 
												<div class="col-md-2" class="RegSpLeft">								 
													<div class="btn-group margin-top" style="text-align:center">
														<a href="#"  onclick="setValues1(<?php echo $j; ?>)"  class=" btn-eror btn" >Delete</a>
													</div>
												</div>	
											</div>													 
								  <?php } 
							  $j++; } 
								} ?> <!-- conclution panel end -->
									</div>				  
								</div>
							</div>
						</div>
				    </div>
					<div class="btn-group col-md-12" style="text-align:center;height:  74px;">
						<button type="submit" class="btn-primary btn">submit</button>
					</div>
					<div style="height:80px;"></div>
				</div>	
			</form>
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
					// var lnth = 0;  
				   $('#one').append('<div class="clear"></div><div id="rm'+lnth+'" class="customclass"><div class="col-md-2" id="addmr"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-building-o"></span></div><div class="form-control"><input type="text" placeholder="Department" required id="department" name="department[]"></div></div></div></div><div class="col-md-2" id="addmr"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-user-o"></span></div><div class="form-control"><input type="text" placeholder="Employee" required id="employee"  name="employee[]"></div></div></div></div><div class="col-md-2" id="name"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-edit"></span></div><div class="form-control"><input type="text" placeholder="Name" required pattern="[a-zA-Z ]{1,100}" title="Name should only contain letters. e.g. john"   id="name"  name="name[]"></div></div></div></div><div class="col-md-2" id="email"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-envelope-o"></span></div><div class="form-control"><input type="text" placeholder="Email Id" id="email" title ="Please enter valid email id" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email[]"></div></div></div></div><div class="col-md-2"><div class="btn-group margin-top" style="text-align:center"><a href="#"  onclick="setValues('+ lnth + ')"  class="ad btn-eror btn">Delete</a></div></div></div>');
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
				 $('#conclusion').append('<div id="rm1'+lnth1+'"  style="margin: 27px 0;"  class="col-md-12 customclass1"><div class="col-md-12"><div class="container4"><div class="col-md-12"><div class="conclution-body"><div class="canclution-inner-body col-md-6"><div class="body-input-tabs"><div class="col-md-3">  <label>Conclusion of Meeting : </label></div><div class="col-md-9"><textarea class="conclu-text" required name="conclusion_textarea[]" ></textarea></div></div><div class="body-input-tabs"><div class="col-md-3"> <label>Conclusion Type : </label></div><div class="col-md-9"><select  name="conclusion_type[]"><option value="1">Minute</option><option value="2">decision</option><option value="3">reminder</option><option value="4">Appointment/Quick Work/Periodic/Project/other</option></select></div></div><div class="body-input-tabs"><div class="col-md-3"> <label>Delegate To : </label></div><div class="col-md-3"> <input type="text"  placeholder="Department" required name="delegated_dept[]"/></div><div class="col-md-3"><input type="text"  placeholder="Employee" required name="delegated_name[]"/></div></div><div class="body-input-tabs"><div class="col-md-3"> <label>Target Date : </label></div><div class="col-md-9"><input type="date" required name="targetdate[]" /></div></div></div><div class="body-input-tabs col-md-6"><div class="col-md-9"><a href="#"  onclick="setValues1('+ lnth1 + ')"  class="ad btn-eror btn inputclass">Delete</a></div></div></div></div></div></div></div>');
				  
				});
			});
			function setValues1(id){     
				document.getElementById("rm1"+id).remove();
			}
		</script>
 
		 <br /><br /><br />
		<div style="height:50px;"></div>
		<?php $this->load->view('footer'); ?>
	</body>

</html>
