<!doctype html>
<html>
 <?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 

   <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Users</p></div>
    <div class="col-md-12 all-mettings">
		<form method="post" action="<?php echo base_url(); ?>Indexmeeting/insert_meeting">
 
			<div class="Mettings-View-index-panel"> 
				<div class=" meeting-info-panel">
					<div class="container4">
						<div class="col-md-4">
							<div class="form-group">
								<label>Preview Metting Date</label>
								<div class="input-group">
									<div class="form-control">
										<input type="date" title="Prev Meeting Date" name="previous_date"/>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
											 <div class="form-group">
																 <label>Next Metting Date</label>
																	<div class="input-group">
																		<div class="form-control"><input type="date" title="Next Meeting Date" name="next_date"/></div>
																	</div>
											 </div>
									</div>
									<div class="col-md-4">

										  <div class="form-group">
																 <label>Self Seating</label>
																	<div class="input-group">
																		<div class="form-control">
																		<select name="seating">
																			<option value="Yes"> Yes</option>
																			<option value="No"> No</option>
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
																					<option>Select Confidentiality</option>
																					<option value="Gen">Gen</option>
																					<option value="Med">Med</option>
																					<option value="Top">Top</option>
																				</select>
																				</div>
																			</div>
																</div>
													
									  </div>
										<!-- end col-md-4 column -->

									</div>
								</div>
							<!-- next second panel start --->
							<div class="col-md-12 meet-second-panel">
								<div class="container4">
											<div class="col-md-4">
												<label>Agenda of metting :</label>

											</div>
											 <div class="col-md-8">
												 <input type="text" placeholder="Ajenda of metting" name="agenda" />
											</div>
									</div>
						   </div>
						   
						   <!-- start TAB -->
						   
						    <div class="col-md-12 bottompanel-one">
                            <div class="container4">
                                                 <div class="tab">
                                                         <a class="tablinks active " onclick="openTabs(event, 'one')">Present Participate</a>
                                                         <a class="tablinks " onclick="openTabs(event, 'two')">Absent Participate</a>
                                                 </div>
                                                 <div id="one" class="tabcontent" style="display:block;" >
                                                     <h3>Present Participate</h3>
                                                     <div class="col-md-2" class="RegSpLeft" id="addmr" >
                                                             <div class="form-group" >
                                                                <div class="input-group">
                                                                    <div class="input-addon"><span class="fa fa-building-o" ></span></div>
                                                                    <div class="form-control"><input type="text" placeholder="Department" id="department" name="department[]" /></div>
                                                                </div>
                                                        </div>
                                                     </div> 
                                                     <div class="col-md-2" class="RegSpLeft" id="addmr">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-addon"><span class="fa fa-user-o" ></span></div>
                                                                    <div class="form-control"><input type="text" placeholder="Employee" id="employee" name="employee[]"  /></div>
                                                                </div>
                                                        </div>
                                                     </div>  
                                                     <div class="col-md-2" class="RegSpLeft" id="name">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-addon"><span class="fa fa-edit" ></span></div>
                                                                    <div class="form-control"><input type="text" placeholder="Name" id="name" name="name[]"  /></div>
                                                                </div>
                                                        </div>
                                                     </div>  
                                                     <div class="col-md-2" class="RegSpLeft" id="email">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
                                                                    <div class="form-control"><input type="text" placeholder="Email Id" id ="email" name="email[]" /></div>
                                                                </div>
                                                        </div>
                                                     </div>  
                                                     <div class="col-md-2">
                                                            <div class="btn-group margin-top" style="text-align:center">
															  <a href="#" class="ad btn-primary btn">Add Participate</a>
																	
																	&nbsp;&nbsp;
                                                                   <!-- <a  href="#" class=" btn btn-eror  "  >Reset</a> -->
                                                            </div>
                                                     </div> 
									</div>													 
                                         
                                                 <div id="two" class="tabcontent">
                                                      <h3>Absent Participate</h3>
                                                        <div class="col-md-2">
                                                             <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-addon"><span class="fa fa-building-o" ></span></div>
                                                                    <div class="form-control"><input type="text" placeholder="Department"  /></div>
                                                                </div>
                                                        </div>
                                                     </div> 
                                                     <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-addon"><span class="fa fa-user-o" ></span></div>
                                                                    <div class="form-control"><input type="text" placeholder="Employee"  /></div>
                                                                </div>
                                                        </div>
                                                     </div>  
                                                     <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-addon"><span class="fa fa-edit" ></span></div>
                                                                    <div class="form-control"><input type="text" placeholder="Name"  /></div>
                                                                </div>
                                                        </div>
                                                     </div>  
                                                     <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
                                                                    <div class="form-control"><input type="text" placeholder="Email Id"  /></div>
                                                                </div>
                                                        </div>
                                                     </div>  
                                                     <div class="col-md-2">
                                                            <div class="btn-group margin-top" style="text-align:center">
                                                                    <a  href="#" class="btn-primary btn"  >Save</a>&nbsp;&nbsp;
                                                                    <a  href="#" class=" btn btn-eror  "  >Reset</a>
                                                            </div>
                                                     </div>    
                                                 </div>
                                        </div>
                              
                            </div>
							
                        <!-- tabs end -->
				   
								<div class="col-md-12 conclution-panel" id="conclusion"><!-- conclution panel start -->
									 <div class="container4">
								   <div class="col-md-12">
											
										<div class="conclution-body">
												<div class="canclution-inner-body  col-md-6">
													 <div class="body-input-tabs">
														<div class="col-md-3">  <label>Conclusion of Meeting : </label></div>
														  <div class="col-md-9">
														  <textarea class="conclu-text"  name="conclusion_textarea[]" ></textarea></div>
													 </div>
													<div class="body-input-tabs">
														 <div class="col-md-3"> 
														 <label>Conclusion Type : </label></div>
														  <div class="col-md-9">
														  <select  name="conclusion_type[]">
															  <option value="1">Minute</option>
															  <option value="2">decision</option>
															  <option value="3">reminder</option>
															  <option value="4">Appointment/Quick Work/Periodic/Project/other</option>

														   </select></div>
													 </div>
													<div class="body-input-tabs">
														<div class="col-md-3"> <label>Delegate To : </label></div>
														 <div class="col-md-3"> <input type="text"  placeholder="Department" name="delegated_dept[]"/></div>
					
														<div class="col-md-3"><input type="text"  placeholder="Employee" name="delegated_name[]"/></div>
													 </div>
													 <div class="body-input-tabs">
														 <div class="col-md-3"> <label>Target Date : </label></div>
														  <div class="col-md-9"><input type="date" name="targetdate[]" /></div>
													 </div>
													 
												</div>
												
												<div class="body-input-tabs col-md-6"> 
														  <div class="col-md-9">
															  <a href="#" class="btn btn-primary" id="add">Add Conclusion</a>
															  &nbsp;&nbsp; 
														  </div>
														  
									
									</div>
							</div>
						
						</div>
					</div>
				</div><!-- conclution panel end -->
					<div class="btn-group" style="text-align:center">
						<button type="submit" class="btn-primary btn">submit</button>
					</div>
			</div>
			 	
		</form>
     </div>
    <script type="text/javascript"> 
		$(function() {
			$('a.ad').click(function(e) {
				e.preventDefault();
				var lnth = $('#one .customclass').length; 
			 $('#one').append('<div class="clear"></div><div id="rm'+lnth+'" class="customclass"><div class="col-md-2" id="addmr"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-building-o"></span></div><div class="form-control"><input type="text" placeholder="Department" id="department" name="department[]"></div></div></div></div><div class="col-md-2" id="addmr"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-user-o"></span></div><div class="form-control"><input type="text" placeholder="Employee" id="employee" name="employee[]"></div></div></div></div><div class="col-md-2" id="name"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-edit"></span></div><div class="form-control"><input type="text" placeholder="Name" id="name" name="name[]"></div></div></div></div><div class="col-md-2" id="email"><div class="form-group"><div class="input-group"><div class="input-addon"><span class="fa fa-envelope-o"></span></div><div class="form-control"><input type="text" placeholder="Email Id" id="email" name="email[]"></div></div></div></div><div class="col-md-2"><div class="btn-group margin-top" style="text-align:center"><a href="#"  onclick="setValues('+ lnth + ')"  class="ad btn-eror btn">Delete</a></div></div></div>');
			  
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
			 $('#conclusion').append('<div id="rm1'+lnth1+'"  style="margin: 27px 0;"  class="col-md-12 customclass1"><div class="col-md-12"><div class="container4"><div class="col-md-12"><div class="conclution-body"><div class="canclution-inner-body col-md-6"><div class="body-input-tabs"><div class="col-md-3">  <label>Conclusion of Meeting : </label></div><div class="col-md-9"><textarea class="conclu-text"  name="conclusion_textarea[]" ></textarea></div></div><div class="body-input-tabs"><div class="col-md-3"> <label>Conclusion Type : </label></div><div class="col-md-9"><select  name="conclusion_type[]"><option value="1">Minute</option><option value="2">decision</option><option value="3">reminder</option><option value="4">Appointment/Quick Work/Periodic/Project/other</option></select></div></div><div class="body-input-tabs"><div class="col-md-3"> <label>Delegate To : </label></div><div class="col-md-3"> <input type="text"  placeholder="Department" name="delegated_dept[]"/></div><div class="col-md-3"><input type="text"  placeholder="Employee" name="delegated_name[]"/></div></div><div class="body-input-tabs"><div class="col-md-3"> <label>Target Date : </label></div><div class="col-md-9"><input type="date" name="targetdate[]" /></div></div></div><div class="body-input-tabs col-md-6"><div class="col-md-9"><a href="#"  onclick="setValues1('+ lnth1 + ')"  class="ad btn-eror btn inputclass">Delete</a></div></div></div></div></div></div></div>');
			  
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
