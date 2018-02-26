<!doctype html>
<html>
 <?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Project Delegation Sheet</p></div>
    <div class="dailly-notes-index-panel">
            <div class="table-res">
                    <div class="table-view">
                        <table>
                            <thead>
                              <tr>
                                  <th>Project No</th>
                                  <th>Date</th>
                                  <th>Department</th>
                                  <th>Outsoursing</th>
                                  <th>Delegate To</th>
                                  <th>Followup form</th>
                                  <th>Target Date</th>
                                  <th>Extended Date</th>
                                  <th>Old Status Date</th>
                                  <th>New Floowup date</th>
                                  <th>Remarks</th>
                              </tr>
                            </thead>
                            <tbody>
							 <tr>
                                  <td>1</td>
                                  <td>20/02/2018</td>
                                  <td>IT Software</td>
                                  <td>Outsoursing</td>
                                  <td>Delegate To</td>
                                  <td>Followup form</td>
                                  <td>Target Date</td>
                                  <td>Extended Date</td>
                                  <td>Old Status Date</td>
                                  <td>New Floowup date</td>
                                  <td>Remarks</td>
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

      <!-- popup start -->

          <div class="popup">
            <div class="header">
                <h3>Project Delegation Sheet - <span id="work">Create New</span></h3>
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
                                       <label>Project</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" title="Project" /></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                  <div class="col-md-12">
                   
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Department</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" title="Department" /></div>
                                        </div>
                          </div>
                        
                    </div>
                      <div class="col-md-6">
                           <div class="form-group">
                                       <label>OutSourcing</label>
                                        <div class="input-group">
                                            <div class="form-control"><select>
                                                    <option>Select OutSourcing</option>
                                                    <option value="1">Inhouse</option>
                                                    <option value="0">OutSource</option>
                                                </select></div>
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
                                       <label>Followup Date</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" title="Followup date" /></div>
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
                </div>
				<div class="footer">
                
                    <div class="col-md-12">
						<button type="submit" class="btargetDatetn-primary btn">Save</button>
                        <!-- <a href="#">Add</a> -->
                        <input type="reset" class="btn-primary btn" value="Reset">
                        <!-- <a href="#">Reset</a> -->
                    </div>
                
            </div>
                </div>
                <div class="clear"></div>


    <!-- popup end --->
       
     <br /><br /><br />
    <div style="height:50px;"></div>
      <?php $this->load->view('footer'); ?>

     <!-- globle header for comman end --> 
   
    
</body>
</html>
