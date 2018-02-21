<!doctype html>
<html>
  <?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
     <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Notes</p></div>
    <div class="dailly-notes-index-panel">
            <div class="notes-view-first-panel">
                   <div class="">
                       <div class="col-md-6">
                                <div class="form-group">
                                         <label>Task</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-edit" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" title="Task" /></div>
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
                                            <div class="form-control"><input type="date" title="Date" /></div>
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
                                            <div class="form-control"><input type="day" title="Day" /></div>
                                            </div>
                                </div>
                       </div>
                   </div>
                

            </div>
        <div class="clear"></div>
        <!-- first panel ends --->
        <div class="notes-view-second-panel">
                    <div class="row">
                        <div class="col-md-2"> <div class="form-group">
                                         <label>Task Type</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-calendar-check-o" ></span>

                                              </div>
                                            <div class="form-control"><select>
                                                                        <option value="">Select Task Type</option>
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
                                            <div class="form-control"><input type="text" placeholder="Department" /></div>
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
                                            <div class="form-control"><input type="time" title="Time" /></div>
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
                                            <div class="form-control"><input type="time" title="To" /></div>
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
                                            <div class="form-control"><input type="date" title="Target Date" /></div>
                                            </div>
                                </div>
                        </div>
                        <div class="col-md-2"> <div class="form-group">
                                         <label>Delegate To</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-share" ></span>

                                              </div>
                                            <div class="form-control"><input type="text" placeholder="Delegate To" /></div>
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
                                            <div class="form-control"><input type="email" placeholder="Email" /></div>
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
                                            <div class="form-control"><input type="text" title="Seretary Name" /></div>
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
                                            <div class="form-control"><input type="text" title="Confidentialit" /></div>
                                            </div>
                                </div>
                        </div>
                       <div class="col-md-2"> <div class="form-group">
                                         <label>My Seating</label>
                                          <div class="input-group">
                                              <div class="input-addon">
                                                  <span class="fa fa-calendar-check-o" ></span>

                                              </div>
                                            <div class="form-control"><select>
                                                                        <option value="">Yes</option><option value="">No</option>
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
                                            <div class="form-control"><input type="text" title="Priority" /></div>
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
                                            <div class="form-control"><input type="text" title="Venue" /></div>
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
                                            <div class="form-control"><input type="text" title="Communication Medium" /></div>
                                            </div>
                                </div>
                        </div>
                        <div class="clear"></div>
                        <!--col-md-3 end -->
                        
                        <hr " class="spalsh" />
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
                                                                    <div class="form-control"><input type="text" placeholder="Email id"  /></div>
                                            </div>
                         </div>
                             </div>
                         <div class="col-md-2">
                                            <input type="button" value="Add" />
                             </div>
                        <!-- div participate end --> 
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
                                            <div class="form-control"><input type="text" title="" /></div>
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
                                            <div class="form-control"><input type="text" title="" /></div>
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
                                            <div class="form-control"><input type="text" title=" " /></div>
                                            </div>
                                </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-12">
                            <textarea class="notes" placeholder="Notes"   title="Notes">

                            </textarea>

                        </div>
                        <div class="clear"></div>
                        <div class="button-group">
                            <input type="button" value="Save Data" />

                        </div>






                    </div>
        </div>

    </div><!-- dailly index panel end --> 
     <br /><br /><br />
    <div style="height:50px;"></div>
    <?php $this->load->view('footer'); ?>
</body>
</html>
