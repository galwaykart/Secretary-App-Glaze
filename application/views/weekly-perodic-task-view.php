    <?php $this->load->view('head'); ?>
	<?php $this->load->view('header'); ?>
    <div class="clear"></div>
    <!--  changes-->
    <form method="POST" action="<?php echo base_url().'WeeklyPeriodic/add_data/'.$list['data1'][0]->weekly_periodic_id?>" >
                     
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Weeklly Periodic View</p></div>
	 <div class="clear"></div>
	 <h2 class="headingDaiilyNotes" style="padding-top:0;"> Perodic Task View</h2>
	 <div class="clear"></div>
     <div class="dailly-notes-index-panel"> 
       <div class="container-5">                     
                        <div class="col-md-12 project-del-view-main-panel">
<<<<<<< HEAD
 
                                    <h2>Perodic Task View</h2>
                                    <div class="col-md-12"><p>Task Name : <span id="projectname"><?php echo $list['data1'][0]->weekly_periodic_work?></span></p></div>
 
=======
                        <?php
                        // echo "<pre>";
                        // print_r($list);  
                        // echo "</pre>";                      ?>
                                    <h2>Perodic Task View</h2>
                                    <div class="col-md-12"><p>Task Name : <span id="projectname"><?php echo $list['data1'][0]->weekly_periodic_work?></span></p></div>
                                   
>>>>>>> b0cec028f3171ce64aa79500a4aa5eb377b5ce17
                                    <div class="clear"></div>
                                    <div class="col-md-6">
                                         <div class="form-group form">
                                                        <label>End Date</label>
                                                        
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                            <span class="fa fa-calendar" ></span>
                                                            </div>
                                                            <div class="form-control"><input type="date" title="End date" value = "<?php echo $list['data1'][0]->weekly_periodic_end_date?>" /></div>
                                                        </div>
                                                </div>
                                               
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form">
                                            <label>Supervised by:</label>
                                            <div class="input-group">
                                                <div class="input-addon">
                                                <span class="fa fa-american-sign-language-interpreting" ></span>
                                                </div>
                                                <div class="form-control"><input type="text" title="Supervised by:" placeholder="Supervised by" value = "<?php echo $list['data1'][0]->weekly_periodic_supervision?>"/></div>
                                            </div>
                                        </div>
                                    </div>
                              <div class="clear"></div>

 
                                            
                            <div class="col-md-12">
        
                                <!-- autometic delegates start -->
        
                                <div id="auto-del">
                                    <div class="auto-del">
                                        <div class="col-md-4">
                                            <div class="form-group form">
                                                <label>Delegate To</label>
                                                <div class="input-group">
												                            <div class="input-addon">
                                                <span class="fa fa-share" ></span>
                                                </div>
                                                    <div class="form-control"><input required type="text" id ="gm1" name="delegate_to[]" title="Delegate To" value="<?php echo $list['data2'][0]->weekly_periodic_delegates_name?>"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form">
                                                <label>Email Id</label>
                                                <div class="input-group form">
												                            <div class="input-addon">
                                                <span class="fa fa-envelope-o" ></span>
                                                </div>
                                                    <div class="form-control">
                                                        <input required type="text" id="gm2"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]" value="<?php echo $list['data2'][0]->weekly_periodic_delegates_email ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form">
                                                <label>Phone Number</label>
                                                <div class="input-group form">
												                            <div class="input-addon">
                                                <span class="fa fa-envelope-o" ></span>
                                                </div>
                                                    <div class="form-control">
                                                        <input required type="text" id="gm3"   name="delegate_phone[]" value="<?php echo $list['data2'][0]->phone_number ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-del-btn" style="float:right;">
                                            <div class="btn-group">
                                                <a href="#" class="plus delgate-plus3" id="plus"><span class="fa fa-plus" ></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
        
                                    for($i=1 ; $i<sizeof($list['data2']) ; $i++){
                                        $j = $i - 1;
                                    ?>
                                    <div id="<?php   echo "rm".$j ?>" class="auto-del">
                                            <div class="col-md-6">
                                                <div class="form-group form">
                                                    <label>Delegate To</label>
                                                    <div class="input-group form">
                                                      
                                                        <div class="input-addon">
                                                          <span class="fa fa-share" ></span>
                                                        </div>
                                                        <div class="form-control"><input required type="text"  name="delegate_to[]" title="Delegate To" value="<?php echo $list['data2'][$i]->weekly_periodic_delegates_name?>"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form">
                                                    <label>Email Id</label>
                                                    <div class="input-group">
                                                        <div class="input-addon">
                                                        <span class="fa fa-envelope-o" ></span>
                                                      </div>
                                                        <div class="form-control">
                                                            <input required type="text"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]" value="<?php echo $list['data2'][$i]->weekly_periodic_delegates_email?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form">
                                                    <label>Phone number</label>
                                                    <div class="input-group">
                                                        <div class="input-addon">
                                                        <span class="fa fa-envelope-o" ></span>
                                                      </div>
                                                        <div class="form-control">
                                                            <input required type="text"  name="delegate_phone[]" value="<?php echo $list['data2'][$i]->phone_number?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-del-btn" style="float:left;">
                                                <div class="btn-group"><a class="delgate-minus3 " style="background-color:red;border:0;"  href="#"  onclick="setValues(<?php echo $j; ?>)"><span class="fa fa-minus" style="color: white;"></span></a>
                                                </div>
                                            </div>                                    
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                                    
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
                                                    <!-- <th>ID</th> -->
                                                    <th>End Date</th>
                                                    <th>Status</th>
                                                    <th>Remark</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                    if($list['data1']){
                                                    $i=1;
        
                                                    echo "<tr>"; 
                                                    // echo "<td>".$i."</td>"; 
                                                    echo "<td>".$list['data1'][0]->weekly_periodic_end_date."</td>"; 
                                                    if($list['data1'][0]->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; }
                                                    echo "<td>".$list['data1'][0]->weekly_periodic_remark."</td>"; 
                                                    echo "</tr>"; 
        
                                                }
                                    ?>
                                            </tbody>
                                        </table>
                                </div>
                    </div>
                                
                           <div class="clear"></div>
                            <div class="col-md-12">
        
                           
        
        <div id="auto-del1">
            <div class="auto-del autodel-container">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Date</label>
                        <div class="input-group">
                          <div class="input-addon">
                            <span class="fa fa-calendar"></span>
                          </div>
                            <div class="form-control"><input required type="date"  name="status_date[]" title="Delegate To" value="<?php if($list['data3']){ echo $list['data3'][0]->weekly_periodic_status_date ;}?>"/></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Note</label>
                        <div class="input-group">
                          <div class="input-addon">
                            <span class="fa fa-edit"></span>
                          </div>
                            <div class="form-control">
                            <textarea required class="noteViewTextArea" type="text"  name="status_note[]"><?php if($list['data3']){ echo $list['data3'][0]->weekly_periodic_status_note; }?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" text-center" style="float:left;">
                    <div class="btn-group">
                        <a href="#" class="plus delgate-plus3" id="plus1"><span class="fa fa-plus" ></span></a>
                    </div>
                </div>
            </div>
             <div class="clear"></div>


            <?php 
        
            for($k=1 ; $k<sizeof($list['data3']) ; $k++){
                $j = $k - 1;
            ?>
            <div id="<?php   echo "dm".$j ?>" class="auto-del autodel-container">
              <div class="col-md-6">
                        <div class="form-group">
                            <label>Date</label>
                            <div class="input-group">
                                <div class="input-addon">
                                  <span class="fa fa-calendar"></span>
                                </div>
                                <div class="form-control"><input required type="date"  name="status_date[]" title="Date" value="<?php echo $list['data3'][$k]->weekly_periodic_status_date?>"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Note</label>
                            <div class="input-group">
                                  <div class="input-addon">
                                    <span class="fa fa-edit"></span>
                                  </div>
                                <div class="form-control">
                                    <textarea required type="text"  name="status_note[]"><?php echo $list['data3'][$k]->weekly_periodic_status_note?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right text-center" style="float:left">
                        <div class="btn-group"><a style="background: #d4554d;" href="#"  onclick="dsetValues(<?php echo $j; ?>)"><span class="fa fa-minus" style="color: white;"></span></a>
                        </div>
                    </div>                                    
            </div>
            <?php
            }
            ?>
        </div>

            <div class="col-md-12">
                <button type="submit" class="btargetDatetn-primary btn">Save</button>
                <?php if($this->uri->segment(3)){?>
                <input type="submit" name="submail" class="btn-primary btn" value="Save & Mail"></input>
                <?php }?>
                <!-- <a href="#">Add</a> -->
            </div>  
   
    
                         
</div>
<div class="clear"></div>


       </div><!-- container 5 end -->


        </div><!-- right deshbrad end -->

            

    </div><!-- Main Dashbrad end -->
   
    </form>  
 

   

    <script type="text/javascript"> 
        $(function() {
            $('a#plus').click(function(e) {
                e.preventDefault();
                var lnth = $('#auto-del .auto-del').length; 
                $('#auto-del').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="col-md-4"><div class="form-group form"><label>Delegate To</label><div class="input-group"><div class="input-addon"><span class="fa fa-share" ></span></div><div class="form-control"><input required type="text" title="Delegate To" name="delegate_to[]" /></div></div></div></div><div class="col-md-4"><div class="form-group form"><label>Email Id</label><div class="input-group form"><div class="input-addon"><span class="fa fa-envelope-o" ></span></div><div class="form-control"><input required type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]"/></div></div></div></div><div class="col-md-4"><div class="form-group form"><label>Phone Number</label><div class="input-group form"><div class="input-addon"><span class="fa fa-envelope-o" ></span></div><div class="form-control"><input required type="text" name="delegate_phone[]" id="gm3"/></div></div></div></div><div class="pro-del-btn" style="float:right;"><div class="btn-group"><a style="background: #d4554d;" href="#" class="delgate-minus3"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
                
            });
        });
            function setValues(id){     
                    document.getElementById("rm"+id).remove();
            }


        $(function() {
            $('a#plus1').click(function(e) {
                e.preventDefault();
                var lnth = $('#auto-del1 .auto-del').length; 
                $('#auto-del1').append('<div class="clear"></div><div id="dm'+lnth+'" class="auto-del"><div class="auto-del autodel-container"><div class="col-md-6"><div class="form-group form"><label>Date</label><div class="input-group"><div class="input-addon"><span class="fa fa-calendar"></span></div><div class="form-control"><input required type="date" value="" name="status_date[]" title="Date" /></div></div></div></div><div class="col-md-6"><div class="form-group form"><label>Note</label><div class="input-group"><div class="input-addon"><span class="fa fa-edit"></span></div><div class="form-control"><textarea class="noteViewTextArea" required type="text"  name="status_note[]" value=""></textarea></div></div></div></div><div class="pro-del-btn" style="float:left;"><div class="btn-group"><a style="background: #d4554d;" href="#"  class="delgate-minus3" onclick="dsetValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');

            });
        });
            function dsetValues(id){     
                    document.getElementById("dm"+id).remove();
            }
    </script>

  