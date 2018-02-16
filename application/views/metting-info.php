<!doctype html>
<html>
 <?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 

   <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Users</p></div>
    <div class="col-md-12 all-mettings">
		<form method="post" action="<?php echo base_url(); ?>/Indexmeeting/insert_meeting">
<?php foreach($list as $get) {}?>
			<div class="Mettings-View-index-panel">
				<!-- info form start-->  

								<div class=" meeting-info-panel">
									<div class="container4">
									
									<div class="col-md-4">

				<div class="form-group">
					<label>Preview Metting Date</label>
					<div class="input-group">
						<div class="form-control">
							<input type="date" title="Prev Meeting Date" name="previous_date" value="<?php echo $get->date_of_meeting;  ?>"/>
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
				  
					  <!-- next second panel end --->
					<div class="col-md-12 bottompanel-one">
						<div class="container4">
									<div class="col-md-6">
										<h2>Present Participate</h2>
										
										
															<div class="form-group">
																	<div class="input-group">
																		<div class="input-addon"><span class="fa fa-building-o" ></span></div>
																		<div class="form-control"><input type="text" placeholder="Department" name="department" value="<?php echo $get->department;?>" /></div>
																	</div>	
															</div>
															<div class="form-group">
																	<div class="input-group">
																		<div class="input-addon"><span class="fa fa-user-o" ></span></div>
																		<div class="form-control"><input type="text" placeholder="Employee" name="employee" value="<?php  echo $get->employee; ?>"/></div>
																	</div>
															</div>
															<div class="form-group">
																	<div class="input-group">
																		<div class="input-addon"><span class="fa fa-edit" ></span></div>
																		<div class="form-control"><input type="text" placeholder="Name" name="name" value="<?php echo $get->name; ?>"/></div>
																	</div>
															</div>
															 <div class="form-group">
																	<div class="input-group">
																		<div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
																		<div class="form-control"><input type="text" placeholder="Email Id" name="email" value="<?php  echo $get->email; ?>" /></div>
																	</div>
															</div>
															 <div class="btn-group" style="text-align:center">
																	<button type="submit" class="btn-primary btn"  >Save</button>&nbsp;&nbsp;
																  <button type="reset" class=" btn btn-eror  "  >Reset</button>
															</div>
									 
															<!-- table persent participate start --->
																<table id="persent">
																		<thead>
																			<tr><th>Sr No</th><th>Department</th><th>Employee</th><th>Name</th><th>Email Id</th></tr>
																		</thead>
																	<tbody>
																	<?php foreach($list as $get){?>
																		<tr>
																			<td><?php echo $get->participants_id;?></td>
																			<td><?php echo $get->department;?></td>
																			
																		</tr>
																	<?php } ?>
																	</tbody>
																</table>
										

															<!-- table persent participate end --->



									</div>
									<div class="col-md-6">
										 <h2>Absent Participate</h2>

														   <div class="form-group">
																	<div class="input-group">
																		<div class="input-addon"><span class="fa fa-building-o" ></span></div>
																		<div class="form-control"><input type="text" placeholder="Department"  /></div>
																	</div>
															</div>
															<div class="form-group">
																	<div class="input-group">
																		<div class="input-addon"><span class="fa fa-user-o" ></span></div>
																		<div class="form-control"><input type="text" placeholder="Employee"  /></div>
																	</div>
															</div>
															<div class="form-group">
																	<div class="input-group">
																		<div class="input-addon"><span class="fa fa-edit" ></span></div>
																		<div class="form-control"><input type="text" placeholder="Name"  /></div>
																	</div>
															</div>
															 <div class="form-group">
																	<div class="input-group">
																		<div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
																		<div class="form-control"><input type="text" placeholder="Email Id"  /></div>
																	</div>
															</div>
															<div class="btn-group" style="text-align:center">
																<button type="submit" class="btn-primary btn"  >Save</a></button>&nbsp;&nbsp;
																  <button type="reset" class=" btn btn-eror  "  >Reset</a></button>
															</div>

															<table id="Table1">
																		<thead>
																			<tr><th>Sr No</th><th>Department</th><th>Employee</th><th>Name</th><th>Email Id</th></tr>
																		</thead>
																	<tbody>
																		<tr><td>1</td><td>It Software</td><td>xyz</td><td>xyz</td><td>xyz@email.com</td></tr>
																		   <tr><td>1</td><td>It Software</td><td>xyz</td><td>xyz</td><td>xyz@email.com</td></tr>
																		   <tr><td>1</td><td>It Software</td><td>xyz</td><td>xyz</td><td>xyz@email.com</td></tr>
																	</tbody>
																</table>



												</div>
									</div>
		 </div>
							<!-- bottom panel end -->
								<div class="col-md-12 conclution-panel"><!-- conclution panel start -->
									 <div class="container4">
								   <div class="col-md-6">
											
										<div class="conclution-body">
												<div class="canclution-inner-body">
													 <div class="body-input-tabs">
														<div class="col-md-3">  <label>Conclusion of Meeting : </label></div>
														  <div class="col-md-9">
														  <textarea class="conclu-text"  name="conclusion_textarea" ></textarea></div>
													 </div>
													<div class="body-input-tabs">
														 <div class="col-md-3"> 
														 <label>Conclusion Type : </label></div>
														  <div class="col-md-9">
														  <select  name="conclusion_type">
															  <option value="1">Minute</option>
															  <option value="2">decision</option>
															  <option value="3">reminder</option>
															  <option value="4">Appointment/Quick Work/Periodic/Project/other</option>

														   </select></div>
													 </div>
													<div class="body-input-tabs">
														<div class="col-md-3"> <label>Delegate To : </label></div>
														 <div class="col-md-3"> <input type="text"  placeholder="Department" name="delegated_dept"/></div>
					
														<div class="col-md-3"><input type="text"  placeholder="Employee" name="delegated_name"/></div>
													 </div>
													 <div class="body-input-tabs">
														 <div class="col-md-3"> <label>Target Date : </label></div>
														  <div class="col-md-9"><input type="date" name="targetdate" /></div>
													 </div>
													 <div class="body-input-tabs">
														 <div class="col-md-3"> </div>
														  <div class="col-md-9">
															  <input type="button" value="Add"  title="Add New Conclusion"/>&nbsp;&nbsp;
															  <input type="button" value="Submit" class="submit"  title="Submit"/>
														  </div>
														  
									
													 </div>
												</div>
										</div>
									
	 <div class="btn-group" style="text-align:center">
			<button type="submit" class="btn-primary btn">submit</button>
			  </div>
									   
								   </div>
										 </div>
								</div><!-- conclution panel end -->
			  



			 </div>
		</form>
     </div>
	  <div class="RegSpLeft" id="phone">
           <input type="text" value="Phone">
        </div>

    <div class="RegSpRight">
        <a href="#" class="pl">+
        </a>
        <br/>
        <a href="#" class="mi">-
        </a>
    </div>
 
    <script type="text/javascript">
		$(function() {
			$('a.pl').click(function(e) {
				e.preventDefault();
				$('#phone').append('<input type="text" value="Phone">');
			});
			$('a.mi').click(function (e) {
				e.preventDefault();
				if ($('#phone input').length > 1) {
					$('#phone').children().last().remove();
				}
			});
		});
    </script>
        
     <br /><br /><br />
    <div style="height:50px;"></div>
    <?php $this->load->view('footer'); ?>
</body>
</html>
