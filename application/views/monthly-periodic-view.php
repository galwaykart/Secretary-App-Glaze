<!doctype html>
<html>
<head>
  <?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
     <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Monthly Periodic View</p></div>
    <div class="dailly-notes-index-panel">
     
       <div class="container-5">
                       
                        <div class="col-md-12">
                                    <h2>Perodic Task View</h2>
                                    <div class="col-md-12"><p>Task Name : <span id="projectname">my task</span></p></div>
                                   
                                    <div class="clear"></div>
                                    <div class="col-md-4">
                                         <div class="form-group">
                                                        <label>End Date</label>
                                                        
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                            <span class="fa fa-calendar" ></span>
                                                            </div>
                                                            <div class="form-control"><input type="date" title="End date"  /></div>
                                                        </div>
                                                </div>
                                               
                                    </div>
                                    <div class="col-md-4">
                                          <div class="form-group">
                                                        <label>Delegate To</label>
                                                        
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                                <span class="fa fa-share" ></span>
                                                            </div>
                                                            <div class="form-control"><input type="text" title="Delegate To" placeholder="Delegate To" /></div>
                                                        </div>
                                                </div>
                                               
                                    </div>
                                    <div class="col-md-4">
                                                
                                    </div>
                                    <div class="col-md-4">
                                                
                                    </div>
                        </div><!-- col-md-12 end -->
                        <div class="clear"></div>
           <div class="delegatesheet-view">
                        <div class="">
                                <table >
                                    <thead>
                                        <tr>
                                            <th>End Date</th><th>Status</th>
                                            <th>Remark</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr><td>12/04/2019</td><td>Active</td><td>no remarks</td></tr>
                                         <tr><td>12/04/2019</td><td>Active</td><td>no remarks</td></tr>
                                         <tr><td>12/04/2019</td><td>Active</td><td>no remarks</td></tr>
                                         <tr><td>12/04/2019</td><td>Active</td><td>no remarks</td></tr>
                                         <tr><td>12/04/2019</td><td>Active</td><td>no remarks</td></tr>
                                    </tbody>
                                </table>
                        </div>
               </div>
                        




       </div><!-- container 5 end -->

      
        <!-- popup end -->

    </div><!-- dailly index panel end -->
  
       
     <br /><br /><br />
    <div style="height:50px;"></div>
    <?php $this->load->view('footer'); ?>

</body>
</html>
