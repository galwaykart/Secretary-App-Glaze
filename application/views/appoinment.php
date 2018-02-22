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
                              <tr>
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
                              </tr>
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
                <h3>Quick Work - <span id="work">Add</span></h3>
                <span id="close-popup"  title="Close">&times;</span>
            </div>
            <div class="content"><!-- content start -->
                <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" title="Date" /></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Task :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" title="Task" /></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                   
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Target Date</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" title="Target Date" /></div>
                                        </div>
                          </div>
                        
                    </div>
                      <div class="col-md-6">
                           <div class="form-group">
                                       <label>Priority</label>
                                        <div class="input-group">
                                            <div class="form-control"><select>
                                                    <option>Select Priority</option>
                                                </select></div>
                                        </div>
                          </div>
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                   
                            <div class="form-group">
                                       <label>Remark</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                               <textarea id="" class=""></textarea>
                                            </div>
                                        </div>
                           
                    </div>
                </div>
                     
                <div class="clear"></div>
                 <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Status</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" title="Status" /></div>
                                        </div>
                           </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Active/Inactive</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select><option value='Yes'>Yes</option><option value='No'>No</option></select>
                                            </div>
                                        </div>
                           </div>
                    </div>

                     <!-- autometic delegates start -->
                     <div class="auto-del">
                                 <div class="left">
                                     <div class="form-group">
                                       <label>Delegate To</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" title="Delegate To" /></div>
                                        </div>
                                  </div>

                                 </div>
                                 <div class="center">
                                         <div class="form-group">
                                               <label>Email Id</label>
                                                <div class="input-group">
                                                    <div class="form-control">
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                        </div>
                                 </div>
                                 <div class="right text-center">
                                            <div class="btn-group">
                                                    <a href="#" class="" id="A1"><span class="fa fa-plus" ></span></a>
                                            </div>
                                 </div>

                             </div>
                     <!-- autometic delegates end -->

                </div>
                <div class="clear"></div>
                        
                                                           

            </div><!-- container end -->
            <div class="footer">
                
                    <div class="col-md-12">
                                   <a href="#">Add</a>
                                   <a href="#">Reset</a>
                    </div>
                
            </div><!-- footer end -->

    </div>
    <!-- popup ends -->

       
     <br /><br /><br />
    <div style="height:50px;"></div>
   <?php $this->load->view('footer'); ?>
</body>
</html>
