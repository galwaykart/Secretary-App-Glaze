<?php $this->load->view('head'); ?> 
     <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Project Status</p></div>
    <div class="dailly-notes-index-panel">
    <?php 
// echo "<pre>";
// print_r($records);
// echo "</pre>"; 
?>  
       <div class="container-5">
                        <div class="col-md-12">
                        <?php if($message){
                        echo "<div style='color:#1dd670'>".$message."</div>";
                        } ?>

      <div class="col-md-12">
        <p>
          Project Name : <span id="projectname">
            <?php echo $records['delegates_data'][0]->project_delegation_project; ?>
          </span>
        </p>
      </div>
      <div class="clear"></div>
      <div class="project-panel-top">
        <div class="top-panel">
          <div class="col-md-3">
            <div class="form-group">
              <label>Start Date</label>

              <div class="input-group">
                <div class="input-addon">
                  <span class="fa fa-calendar" ></span>
                </div>
                <div class="form-control">
                  <input type="date" title="Start date" required="" value="<?php if($records['delegates_data'][0]){echo $records['delegates_data'][0]->project_delegation_date ;}?>"  />
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Target date</label>
              <div class="input-group">
                <div class="input-addon">
                  <span class=" fa fa-line-chart" ></span>
                </div>
                <div class="form-control">
                  <input type="date" title="Target Date" required="" value="<?php if($records['delegates_data'][0]){echo $records['delegates_data'][0]->project_delegation_target_date ;}?>"/>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Total days</label>

              <div class="input-group">
                <div class="input-addon">
                  <span class=" fa fa fa-cogs" ></span>
                </div>
                <div class="form-control">
                  <input type="text" class="total-day" title="Total days" readonly="" placeholder="Total Days" value=""<?php if($total_no_of_days){ echo $total_no_of_days; } ?>"/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <form method="POST" action="<?php echo base_url().'/Projectdelegation/UpdateDelegates/'.$record_id;?>">                             <!-- autometic delegates start -->
          <div>
            <div class="col-md-6">
              <div class="form-group form">
                <label>Extended date</label>
                <div class="input-group">
                  <div class="input-addon">
                    <span class="fa fa-calendar"></span>
                  </div>
                  <div class="form-control">
                    <input  type="date" id ="extend_date" name="extend_date" title="extend_date" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group form form1">
                <label>Reason</label>
                <div class="input-group">
                  <div class="input-addon">
                    <span class="fa fa-edit"></span>
                  </div>
                  <div class="form-control">
                    <input  type="text" id="reason"   name="reason" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clear"></div>
                    <div id="refresh_popups"> 
                        <div id="auto-dels"> 
                            <div class="auto-del">
                                <div class="left">
                                    <div class="form-group">
                                        <label>Delegate To</label>
                                        <div class="input-group">
                                            <div class="form-control"><input required type="text" id ="gm1" name="delegate_to[]" title="Delegate To" value="<?php if($records['delegates_data']){echo $records['delegates_data'][0]->project_delegation_delegated_name;} ?>"/></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="center">
                                    <div class="form-group">
                                        <label>Email Id</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <input required type="text" id="gm2"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]" value="<?php if($records['delegates_data']){echo $records['delegates_data'][0]->project_delegation_delegated_email;} ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div><div class="left">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <input required type="tel" pattern="[789][0-9]{9}" id="gm3"   name="delegate_phone[]" value="<?php if($records['delegates_data']){echo $records['delegates_data'][0]->phone_number;} ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right text-center">
                                    <div class="btn-group">
                                        <a href="#" class="plus" id="plus"><span class="fa fa-plus" ></span></a>
                                    </div>
                                </div>
                            </div>

                            <!-- auto generation already added delegates -->
                            <div id="one">
                                <?php 
                                for($i=1 ; $i<sizeof($records['delegates_data']) ; $i++){
                                    $j = $i - 1;
                                    //echo $records['delegates_data'][$i]->project_delegation_delegated_name;
                                ?>
                                    <div class="clear"></div>
                                    <div id="<?php   echo "rm".$j ?>" class="auto-del">
                                        <div class="auto-del">
                                            <div class="left">
                                                <div class="form-group"><label>Delegate To</label>
                                                    <div class="input-group">
                                                        <div class="form-control"><input required type="text" title="Delegate To" name="delegate_to[]" value="<?php if($records['delegates_data']){echo $records['delegates_data'][$i]->project_delegation_delegated_name;} ?>"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="center">
                                                <div class="form-group"><label>Email Id</label>
                                                    <div class="input-group">
                                                        <div class="form-control"><input required type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]" value="<?php if($records['delegates_data']){echo $records['delegates_data'][$i]->project_delegation_delegated_email;} ?>"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="left">
                                                <div class="form-group"><label>Phone Number</label>
                                                    <div class="input-group">
                                                        <div class="form-control"><input required type="text"  name="delegate_phone[]" value="<?php if($records['delegates_data']){echo $records['delegates_data'][$i]->phone_number;} ?>"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right text-center">
                                                <div class="btn-group"><a style="background: red;" href="#"  onclick="setValues(<?php echo $j; ?>)"><span class="fa fa-minus" style="color: white;"></span></a></div>
                                            </div>
                                        </div>
                                    </div>                        
                                
                                <?php 
                                }
                                ?>
                            </div>
                        </div> 
                    </div>
                    <div class="footer">
                        <div class="col-md-12">
                            <button type="submit" class="btargetDatetn-primary btn">Save</button>
                            <?php if($this->uri->segment(3)){?>
                            <input type="submit" name="submail" class="btn-primary btn" value="submit & Mail"></input>
                            <?php }?>
                        </div>
                    </div>
                    <div class="clear"></div>  
                </form>

<br><br><br>
<!-- Extended dates data table start -->
<div class="clear"></div>
<div class="delegatesheet-view">
    <div class="table-res">
        <table >
            <thead>
                <tr>
                <th>Sr No</th>
                <th>Extended Date</th>
                <th>Reason</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($records['delegates_date_data']){
                $j=1;
                foreach($records['delegates_date_data'] as $r) { 
                echo "<tr>"; 
                echo "<td>".$j++."</td>"; 
                echo "<td>".$r->project_delegation_dates_extend_date."</td>"; 
                echo "<td>".$r->project_delegation_dates_remark."</td>"; 
                echo "</tr>"; 
                } 
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Extended dates data table End -->
<br><br><br>

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
                                                                <?php 
                              if($records['status_data']){
                              $i=1;
                                          foreach($records['status_data'] as $r) { 
                                            echo "<tr onclick='newDoc($r->project_delegation_id)'>"; 
                                            echo "<td>".$i++."</td>"; 
                                            echo "<td>".$r->project_delegation_status_date."</td>"; 
                                            echo "<td>".$r->project_delegation_status_status."</td>"; 
                                            if($size_of_extend_date >0){
                                                $d1 = $r->project_delegation_status_date;
                                                $d2 = $records['delegates_date_data'][$size_of_extend_date-1]->project_delegation_dates_extend_date;
                                                $diff=date_diff(date_create($d1) ,date_create($d2) );
                                                
                                                $dayLeft = $diff->format("%a days");
                                                echo "<td>".$dayLeft."</td>"; 
                                            }else{
                                                echo "<td>"."Not Available"."</td>"; 
                                            }
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
<form id="myForm" method="POST" action="<?php echo base_url()."Projectdelegation/adddelegationstatus/".$record_id; ?>">
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


    <script type="text/javascript"> 
				$(function() {
					$('a#plus').click(function(e) {
						e.preventDefault();
						var lnth = $('#auto-dels').length; 
					 $('#auto-dels').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text" name="delegate_email[]"/></div></div></div></div><div class="left"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input required type="text" name="delegate_phone[]"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
					  
					});
				});
					function setValues(id){     
							document.getElementById("rm"+id).remove();
					}
		</script>
  
       
     <br /><br /><br /> 
    <?php $this->load->view('footer'); ?>
 
