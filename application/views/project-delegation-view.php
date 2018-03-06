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
                        <?php if($message){
                        echo $message;
                        } ?>
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
                                                                <?php 
                              if($records){
                              $i=1;
                                          foreach($records as $r) { 
                                            echo "<tr onclick='newDoc($r->project_delegation_id)'>"; 
                                            echo "<td>".$i++."</td>"; 
                                            echo "<td>".$r->project_delegation_status_date."</td>"; 
                                            echo "<td>".$r->project_delegation_status_status."</td>"; 
                                            echo "<td>".$r->project_delegation_status_date."</td>"; 
                                            echo "<td>".$r->project_delegation_status_current_status."</td>"; 
                                            echo "<td>".$r->project_delegation_status_next_followup_date."</td>"; 

                                            
                                           
                                            
                                         //    echo "<td><a href = '".base_url()."index.php/stud/edit/"
                                         //       .$r->roll_no."'>Edit</a></td>"; 
                                         //    echo "<td><a href = '".base_url()."index.php/stud/delete/"
                                         //       .$r->roll_no."'>Delete</a></td>"; 
                                            echo "<tr>"; 
                                         } 
                                        }
                              ?>
                                       
                                    </tbody>
                                </table>
                        </div>
               </div>
                        




       </div><!-- container 5 end -->


<!-- add button to add new project delegation status -->
       <div class="clear"></div>
        <div class="col-md-12">
            <br />
                <a href="#" id="addnotes"><span class="fa fa-plus" >&nbsp;Add</span></a>
        </div>

        <!-- popup end -->

    </div><!-- dailly index panel end -->




 <!-- popup start -->
<form id="myForm" method="POST" action="<?php echo base_url()."Projectdelegation/adddelegationstatus/".$records[0]->project_delegation_id;?>">
    <div class="popup" style="display: none;">
                 <div class="header">
                    <h3>Add Status Project delegation  - <span id="work">Add</span></h3>
                    <span id="close-popup"  title="Close">&times;</span>
                </div>
           
            <div class="content"><!-- content start -->
                <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required type="date" id="task_date" name="status_date" title="Date" value=""/></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Status :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required id="task_name" type="text" name="status" title="Task" /></div>
                                        </div>
                         </div>
                    </div>
                </div>

                <div class="clear"></div>
                 <div class="col-md-12">    
                    <div class="col-md-12">
                            <div class="form-group">
                                       <label>Next Followup Date</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required type="date" id="task_traget_date" name="nxt_followup_date" title="Target Date" /></div>
                                        </div>
                          </div>
                        
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                   
                            <div class="form-group">
                                       <label>Current Status With Date</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                               <textarea id="task_remark" name="current_ctatus" class=""></textarea>
                                            </div>
                                        </div>
                           
                            </div>
                </div>
            </div><!-- container end -->
            
            <div class="footer">
                
                    <div class="col-md-12">
                    <button type="submit" class="btargetDatetn-primary btn">Save</button>
                                   <!-- <a href="#">Add</a> -->
                                   <input required class="btn-primary btn" type="reset" value="Reset">
                                   <!-- <a href="#">Reset</a> -->
                    </div>
                
            </div><!-- footer end -->

    </div>
</form>
    <!-- popup ends --> 




  
       
     <br /><br /><br />
    <div style="height:50px;"></div>
    <?php $this->load->view('footer'); ?>












</body>
</html>
