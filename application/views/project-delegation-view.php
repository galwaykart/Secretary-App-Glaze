<!doctype html>
<html>
  <?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
     <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Project Status</p></div>
    <div class="dailly-notes-index-panel">
     
       <div class="container-5">
                       
                        <div class="col-md-12">
                                    <h2>Project Status</h2>
                                    <div class="col-md-12"><p>Project Name : <span id="projectname">my project</span></p></div>
                                   
                                    <div class="clear"></div>
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
                                                <div class="form-group">
                                                        <label>Start Date</label>
                                                        
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                            <span class="fa fa-calendar" ></span>
                                                            </div>
                                                            <div class="form-control"><input type="date" title="Start date"  /></div>
                                                        </div>
                                                </div>
                                    </div>
                                    <div class="col-md-4">
                                                <div class="form-group">
                                                        <label>Target date</label>
                                                        
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                            <span class=" fa fa-line-chart" ></span>
                                                            </div>
                                                            <div class="form-control"><input type="date" title="Target Date" /></div>
                                                        </div>
                                                </div>
                                    </div>
                                    <div class="col-md-4">
                                                <div class="form-group">
                                                        <label>Total days</label>
                                                        
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                            <span class=" fa fa fa-cogs" ></span>
                                                            </div>
                                                            <div class="form-control"><input type="text" title="Total days" placeholder="Total Days" /></div>
                                                        </div>
                                                </div>
                                    </div>
                        </div><!-- col-md-12 end -->
                        <div class="clear"></div>
           <div class="delegatesheet-view">
                        <div class="table-res">
                                <table >
                                    <thead>
                                        <tr>
                                            <th>Sr No</th><th>Date</th>
                                            <th>Project status</th>
                                            <th>Days Left</th>
                                            <th>Current Status With Date</th>
                                            <th>Next FollowUp date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td>hjdgf</td><td>jgfd</td><td>hjgdzfg</td><td>ghdf</td><td>jhgdfhs</td></tr> 
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
