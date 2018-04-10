<!doctype html>
<html>
  <?php $this->load->view('head'); ?>
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
	
        <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Periodic task - Add</p></div>
               <form  method="POST" action="<?php echo base_url()."DailyPeriodic/add_daily_periodic/" ?>">                
							<div class="dailly-task-add-page">
                                            
                                              <div class="container-task-add">
                                                        <div class="headline"><h3>Add New Task</h3></div>
                                                        <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa fa-calendar-check-o" ></span></div>
                                                                            <div class="form-control">
                                                                                <select name="day">
                                                                                    <option value="1">Monday</option>
                                                                                    <option value="2">Tuesday</option>
                                                                                    <option value="3">Wednesday</option>
                                                                                    <option value="4">Thursday</option>
                                                                                    <option value="5">Friday</option>
                                                                                    <option value="6">Saturday</option>
                                                                                    <option value="7">Sunday</option>
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa  fa-calendar" ></span></div>
                                                                            <div class="form-control"><input type="date" title="Select Start Date" required name="start_date"/></div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                        <div class="clear"></div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa  fa-history" ></span></div>
                                                                            <div class="form-control"><input type="time" title="Select Time" required name="time"/></div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                         <!--<div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa fa-calendar" ></span></div>
                                                                            <div class="form-control"><input type="date" title="Select End Date" name="end_date"/></div>
                                                                        </div>
                                                                </div>
                                                         </div>-->
                                                        
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa  fa-check-square-o" ></span></div>
                                                                            <div class="form-control"><input type="text" placeholder="Enter Task" required name="task"/></div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                         <!--<div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa  fa-share" ></span></div>
                                                                            <div class="form-control"><input type="text" placeholder="Deligate to" name=""/></div>
                                                                        </div>
                                                                </div>
                                                         </div>-->
                                                        <div class="clear"></div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa fa-external-link-square" ></span></div>
                                                                            <div class="form-control"><input type="text" placeholder="Supervise by" required name="supervise_by" /></div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa fa-edit" ></span></div>
                                                                            <div class="form-control"><input type="text" placeholder="Remark" required name="remark" /></div>
                                                                        </div>
                                                                </div>
                                                         </div>
													 
													<div class="col-md-12" id="delete">
												            <div  class="auto-del">
																<div class="col-md-3">
																	<div class="form-group">
																		<div class="input-group">
																			<div class="input-addon"><span class="fa fa-external-link-square" ></span></div>
																				<div class="form-control"><input type="text" placeholder="Delegate To" required id="delegate_name" title="Delegate To" name="delegate_to[]"/></div>
																		</div>
																	</div>
																</div>
														<div  class="col-md-3">
															<div class="form-group">
																<div class="input-group">
																	<div class="form-control">
																		<div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
																		<input type="text" name="email[]" placeholder="Email" required id="delegate_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<div class="input-group">
																	<div class="form-control">
																		<div class="input-addon"><span class="fa fa-phone" ></span></div>
																		<input type="text" placeholder="Phone Number" id="phone" name="phone[]" required />
																	</div>
																</div>
															</div>
														</div>
														
														<div class="right  col-md-3">
															<div class="btn-group">
																<a href="#" class="" id="add"><span class="fa fa-plus" ></span></a>
															</div>
														</div>
															</div>
													</div>

                                                      <div class="clear"></div>
                                                      <div class="col-md-12">
                                                          <p><input type="radio" name="status" value=1 />&nbsp;Active&nbsp;
														  <input type="radio" name="status" value=0 />Inactive</p>
                                                      </div>
                                                  <div class="clear"></div>
                                                  <div class="text-center">
												      <button type="submit" class="primary btn">Save</button>
                                                      <input type="button" value="Reset" />
                                                  </div>
                                                  <div class="clear"></div>

                                              </div><!-- container-task-add end -->

                                </div>
			    </form>					
                                
       </div><!-- right deshbrad end -->
                                
            
    </div><!-- Main Dashbrad end -->
   

  

    <!-- don-t change -->
    <div style="height:50px;"></div>
    <footer id="footer">
        <p>&copy; Copyright By Glaze India Pvt. Ltd.</p>
    </footer>

         
  


     <!-- globle header for comman end --> 
    
  
</body>
</html>

    </div><!-- Main Dashbrad end --> 
 
 <div style="height:50px;"></div>
      <?php $this->load->view('footer'); ?>
	    
		
		<script> 
				$(function() {
					$('a#add').click(function(e) {
						e.preventDefault();
						var lnth = $('#delete .auto-del').length;
					 $('#delete').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><div class="input-group"><div class="form-control"><div class="input-addon"><span class="fa fa-external-link-square" ></span></div><input required type="text" placeholder="Delegate To" title="Delegate To" required name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><div class="input-group"><div class="form-control"><div class="input-addon"><span class="fa fa-envelope-o" ></span></div><input required type="text" placeholder="Email" name="email[]" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></div></div></div></div><div class="center" class="col-md-3"><div class="form-group"><div class="input-group"><div class="form-control"><div class="input-addon"><span class="fa fa-phone" ></span></div><input type="text" placeholder="Phone Number" name="phone[]" required /></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
					  
					});
				});
					function setValues(id){     
							document.getElementById("rm"+id).remove();
					}
		</script>