<!doctype html>
<html>
<head>

 <?php $this->load->view('head'); ?>
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
	<div class="clear"></div>
	<div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Perodic Task View</p></div>
    <div class="dailly-notes-index-panel">

	<form method="POST" action = "<?php if($fetch){echo base_url()."Dailyperiodic/add_daily_periodic/".$fetch['data1'][0]->daily_periodic_id;}else{echo base_url()."Dailyperiodic/add_daily_periodic/";} ?>" > 
       <div class="container-5">  
                        <div class="col-md-12">
                                    <h2>Perodic Task </h2>
                                    <div class="col-md-12"><p>Task Name : <span id="projectname"><?php if($fetch['data1']){echo $fetch['data1'][0]->daily_periodic_task;} ?></span></p></div>
                                    <div class="clear"></div>
                                    <div class="col-md-4">
                                         <div class="form-group">
                                                        <label>End Date</label>
                                                        
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                            <span class="fa fa-calendar" ></span>
                                                            </div>
                                                            <div class="form-control"><input type="date" title="End date" value="<?php if($fetch['data1']){ if($fetch['data1'][0]->daily_periodic_status==0){ echo $fetch['data1'][0]->daily_periodic_end_date; } }  ?>"  /></div>
                                                        </div>
                                                </div>
                                               
                                    </div>
                                     <div class="col-md-4">
                                                 <div class="form-group">
                                                                <label>Supervised By</label>
                                                        
                                                                <div class="input-group">
                                                                    <div class="input-addon">
                                                                    <span class="fa fa-user" ></span>
                                                                    </div>
                                                                    <div class="form-control"><input type="text" required title="Supervised by" value="<?php if($fetch['data1']){ echo $fetch['data1'][0]->daliy_periodic_supervise; }  ?>" /></div>
                                                                </div>
                                                        </div>
                                               
                                            </div>
                                    <div class="col-md-4">
                                          <div class="form-group">
                                                        <label>Status</label>
                                                        <div class="input-group">
                                                            <div class="form-control">
															  <select name="status" <?php if($fetch['data1']) { if($fetch['data1'][0]->daily_periodic_status=='0'){ echo "disabled"; } } ?> >
																<option value="1" <?php if($fetch['data1']) { if($fetch['data1'][0]->daily_periodic_status == "1"){ echo "selected"; } } ?>>Active</option>
																<option value="0" <?php if($fetch['data1']) { if($fetch['data1'][0]->daily_periodic_status == "0"){ echo "selected"; } } ?>>Inactive</option>
															  </select>
															</div>
                                                        </div>
                                                </div>
                                               
                                    </div>

                        </div><!-- col-md-12 end -->
                        <div class="clear"></div>
			<div class="col-md-12" id="delete">
			   <div  class="auto-del">
						    <div class="col-md-4">
                                <div class="form-group">
                                    <label>Delegate To</label>
                                        <div class="input-group">
											<div class="input-addon"><span class="fa  fa-share" ></span></div>
                                            <div class="form-control"><input type="text" placeholder="Delegate Name" required id="delegate_name" title="Delegate To" name="delegate_to[]" value="<?php if($fetch['data2']){ echo $fetch['data2'][0]->daily_periodic_delegates_name; } ?>" /></div>
                                        </div>
                                </div>           
                            </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email Id</label>
                                    <div class="input-group">
											 <div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
                                             <div class="form-control"><input type="text" placeholder="Delegate Email" name="email[]" required id="delegate_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php if($fetch['data2']){ echo $fetch['data2'][0]->daily_periodic_delegates_email; } ?>" /></div>
                                    </div>
                            </div>                 
                        </div>
					<div class="col-md-4">
                        <div class="form-group">
						    <label>Phone Number</label>
							 <div class="input-group">
								<div class="input-addon"><span class="fa fa-phone" ></span></div>
									<div class="form-control"><input type="text" placeholder="Phone Number" id="phone" name="phone[]" required value="<?php if($fetch['data2']){ echo $fetch['data2'][0]->daily_periodic_delegates_phone_number; } ?>" /></div>						
							 </div>
						</div>                    
                    </div>
				<div class="col-md-4 ">
                    <div class="btn-group margin-top">
                        <a href="#" class="ad btn-primary btn participater right-btn" id="add"><span class="fa fa-plus" ></span></a>	 	
                    </div>                       
                </div>					
			 </div>	
	        

 <div class="clear"></div>
 
 				 <?php  $j = 0;
					if($fetch){									
						foreach($fetch['data2'] as $record){	 
									//print_r($list['data2']);
						 if($j != '0'){  ?>
			<div class="col-md-12 " id="rm<?php echo $j; ?>" >
			   <div  class="auto-del">
						    <div class="col-md-4">
                                <div class="form-group">
                                    <label>Delegate To</label>
                                        <div class="input-group">
											<div class="input-addon"><span class="fa  fa-share" ></span></div>
                                            <div class="form-control"><input type="text" placeholder="Delegate Name" required id="delegate_name" title="Delegate To" name="delegate_to[]" value="<?php if($record){ echo $record->daily_periodic_delegates_name; } ?>" /></div>
                                        </div>
                                </div>           
                            </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email Id</label>
                                    <div class="input-group">
											 <div class="input-addon"><span class="fa fa-envelope-o" ></span></div>
                                             <div class="form-control"><input type="text" placeholder="Delegate Email" name="email[]" required id="delegate_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php if($record){ echo $record->daily_periodic_delegates_email; } ?>" /></div>
                                    </div>
                            </div>                 
                        </div>
					<div class="col-md-4">
                        <div class="form-group">
						    <label>Phone Number</label>
							 <div class="input-group">
								<div class="input-addon"><span class="fa fa-phone" ></span></div>
									<div class="form-control"><input type="text" placeholder="Phone Number" id="phone" name="phone[]" required value="<?php if($record){ echo $record->daily_periodic_delegates_phone_number; } ?>" /></div>						
							 </div>
						</div>                    
                    </div>
				<div class="col-md-4 ">
                    <div class="btn-group margin-top">
                        <a class="right-btn-minus" href="#" onclick="setValues(<?php echo $j; ?>)" ><span class="fa fa-minus " ></span></a>
                    </div>                       
                </div>					
			 </div>	
			  <?php } $j++;  } }  ?>
				</div>	
			</div>	
                    <div class="delegatesheet-view">
                        <div class="table-res">
                                <table >
                                    <thead>
                                        <tr>
                                            <th>End Date</th><th>Status</th>
                                            <th>Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $i=0;
									if($fetch['data1']){
										foreach($fetch['data1'] as $arr){	
									?>
                                       <tr>
									     <td><?php if($arr->daily_periodic_status==0){ echo $arr->daily_periodic_end_date; }?></td>
									     <td><?php if($arr->daily_periodic_status==1){echo "Active";}else{echo "Inactive";} ?></td>
									     <td><?php echo $arr->daily_periodic_remark; ?></td>
									   </tr>
									<?php } } ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
            <div class="col-md-12 btn-group" style="text-align:center">

				<button type="submit" class="btn-primary btn">Submit</button>
			</div>	
       </div><!-- container 5 end -->
	</form>  
	   
        </div><!-- right deshbrad end -->
    </div><!-- Main Dashbrad end -->
   
 <div style="height:50px;"></div>
      <?php $this->load->view('footer'); ?>


    <!-- don-t change -->
    <div style="height:50px;"></div>
    <footer id="footer">
        <p>&copy; Copyright By Glaze India Pvt. Ltd.</p>
    </footer>
     <!-- notepad start -->
        <div class="notepad-tag" title="Open Notepad">
            <span class="fa fa-edit"></span>
            </div>
            <div class="note-pad-box">
                <div>
                    <div class="header">
            
                         <p>Notepad:-</p>
                     </div>

                 </div>
                <div class="body"><textarea></textarea></div>
                <div class="footer"></div>
            </div>

 
     <!-- globle header for comman end --> 
	 
		 	<script type="text/javascript"> 
				$(function() {
					$('a#add').click(function(e) {
						e.preventDefault();
						var lnth1 = $('#delete .auto-del').length; 
					 $('#delete').append('<div class="clear"><div class="auto-del"></div></div><div id="rm'+lnth1+'" class="auto-del1"><div class="col-md-4"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="input-addon"><span class="fa fa-share" ></span></div><div class="form-control"><input type="text" title="Delegate To" placeholder="Delegate To" name="delegate_to[]" required/></div></div></div></div><div class="col-md-4" ><div class="form-group"><label>Email</label><div class="input-group"><div class="input-addon"><span class="fa fa-envelope-o" ></span></div><div class="form-control"><input type="text" title="Delegate Email" placeholder="Delegate Email" name="email[]" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></div></div></div></div><div class="col-md-4"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="input-addon"><span class="fa fa-phone" ></span></div><div class="form-control"><input type="text" placeholder="Phone Number" id="phone" name="phone[]" required /></div></div></div></div><div class="col-md-4 " style="float:left;position:relative"><div class="" ><a class="right-btn-minus" href="#"  onclick="setValues('+ lnth1 + ')"><span class="fa fa-minus " ></span></a></div></div></div>');
					  
					});
				});
					function setValues(id){     
						document.getElementById("rm"+id).remove();
					}
		    </script>
	 
	 
	 
    <script>
        $(document).ready(function () {
            var count = 0;
            var count2 = 0;


            $('#sec-header #toggle-btn-box span#bar').click(function () {
                if ($(window).width() >= 769) {
                    if (count % 2 == 0) { $('#aside').css('display', 'none'); $('.main-area-dashboard #left').css('width', '0%'); $('.main-area-dashboard #right').css('width', '100%'); }
                    else { $('#aside').css('display', 'block'); $('.main-area-dashboard #left').css('width', '15%'); $('.main-area-dashboard #right').css('width', '85%'); }
                    count++;
                }
                else {

                    if (count2 % 2 == 0) { $('.mobile-menu-bar').css('display', 'block'); }
                    else { $('.mobile-menu-bar').css('display', 'none'); }
                    count2++;
                }

            });

            $('.log-popup').on('click', function () {
                $('.log-up-body').toggle('slow');

            });




            // window resize option
            $(window).bind('resize', function () {
                if ($(window).width() > 768) {
                    $('#aside').css('display', 'block'); $('.mobile-menu-bar').css('display', 'none');
                    $('.main-area-dashboard #right').css('width', '85%');
                    $('.main-area-dashboard #left').css('width', '15%');
                }
                else {
                    $('#aside').css('display', 'none');
                    $('.main-area-dashboard #right').css('width', '100%'); $('.mobile-menu-bar').css('display', 'none');
                }
            });
        });

    </script>
    

</body>
</html>
