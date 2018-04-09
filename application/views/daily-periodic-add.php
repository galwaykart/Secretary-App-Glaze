  <?php $this->load->view('head'); ?>
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
	
                                <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Periodic task - Add</p></div>
                                <div class="dailly-task-add-page">
                                            
                                              <div class="container-task-add">
                                                        <div class="headline"><h3>Add New Task</h3></div>
                                                        <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa fa-calendar-check-o" ></span></div>
                                                                            <div class="form-control">
                                                                                <select>
                                                                                    <option value="monday">Monday</option>
                                                                                    <option>Tuesday</option>
                                                                                    <option>Wenesday</option>
                                                                                    <option>Thuresday</option>
                                                                                    <option>Friday</option>
                                                                                    <option>Saterday</option>
                                                                                    <option>Sunday</option>
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa  fa-calendar" ></span></div>
                                                                            <div class="form-control"><input type="date" title="Select Start Date" /></div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                        <div class="clear"></div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa  fa-history" ></span></div>
                                                                            <div class="form-control"><input type="time" title="Select Time" /></div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa fa-calendar" ></span></div>
                                                                            <div class="form-control"><input type="date" title="Select End Date" /></div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                        <div class="clear"></div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa  fa-check-square-o" ></span></div>
                                                                            <div class="form-control"><input type="text" placeholder="Enter Task" /></div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa  fa-share" ></span></div>
                                                                            <div class="form-control"><input type="text" placeholder="Deligate to" /></div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                        <div class="clear"></div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa fa-external-link-square" ></span></div>
                                                                            <div class="form-control"><input type="text" placeholder="Supervise by " /></div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-addon"><span class="fa fa-edit" ></span></div>
                                                                            <div class="form-control"><input type="text" placeholder="Remark" /></div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                      <div class="clear"></div>
                                                      <div class="col-md-12">
                                                          <p><input type="radio" name="inac" />&nbsp;Active&nbsp;<input type="radio" name="inac" />Inactive</p>
                                                      </div>
                                                  <div class="clear"></div>
                                                  <div class="text-center">
                                                      <input type="button" value="Save" /><input type="button" value="Reset" />
                                                  </div>
                                                  <div class="clear"></div>

                                              </div><!-- container-task-add end -->

                                </div>
                                
       </div><!-- right deshbrad end -->
                                
            

    </div><!-- Main Dashbrad end --> 
 
 <div style="height:50px;"></div>
      <?php $this->load->view('footer'); ?>
