 <?php $this->load->view('head'); ?>
 
   <style>
	.mon_class {
		color:#fff;
	}
	.form_error{color:red; font-size:18px;}

   </style>
   <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Yearly Periodic</p></div>
    <div class="clear"></div>
    <div class="monthly-periodic-task-sheet"><!-- monthly periodic panel start -->
              <h2 id="paddin-left">Yearly Periodic </h2>
              <a href="#" id="" class="perdoci-task-add-btn"><span class="fa fa-plus" ></span>&nbsp;New</a>
                <!--search button start-->
                        <div class="search-btn-perodic">
                            <input type="text" value="" placeholder="Search Task"/><button><span class="fa fa-search"></span></button>

                        </div>
                <!--search button end-->
				
<?php if($this->session->flashdata('msg')): ?>
 <p style="color:red;"><?php echo $this->session->flashdata('msg'); ?></p>
<?php endif; ?>	
	<?php 
		//if(form_error('start_date') || form_error('task') || form_error('remark')){
			//echo '<span class="form_error">Please provide valid input', '</span>'	;
		//}
	?>
              <div class="tabordion ">
                          <section id="section1">
                                        <input type="radio" name="sections" id="option1" <?php if($year == '2018') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('Yearlyperiodic/index/2018') ?>'">
                                        <label for="option1">
											<a href="<?php echo site_url('Yearlyperiodic/index/2018') ?>" class="mon_class">2018</a>
										</label>
                                        <article>
                                                     <h2>Year 2018 Task</h2>
                                                     <div class="table-res style-6">
                                                              <table class="monthly-task">
                                                                     <thead>
                                                                         <tr>
																		     <th>Sno</th>
                                                                             <th>Month</th>
                                                                             <th>Start Date</th>
                                                                            <!-- <th>End Date of Task</th>-->	
                                                                             <th>Task Name</th>
                                                                             <th>Remark</th>
                                                                             <th>Active / Inactive</th>
                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
																  <?php 
																  if($fetch){
																	  $i=1;
																	  foreach($fetch as $list){
														
																  ?>
																  <tr >
																     <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $i++; ?></td>
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php if($list->yearly_periodic_month==1){echo "Jan";}if($list->yearly_periodic_month==2){echo "Feb";} if($list->yearly_periodic_month==3){echo "Mar";} if($list->yearly_periodic_month==4){echo "Apr";} if($list->yearly_periodic_month==5){echo "May";} if($list->yearly_periodic_month==6){echo "June";} if($list->yearly_periodic_month==7){echo "July";} if($list->yearly_periodic_month==8){echo "Aug";} if($list->yearly_periodic_month==9){echo "Sept";} if($list->yearly_periodic_month==10){echo "Oct";} if($list->yearly_periodic_month==11){echo "Nov";} if($list->yearly_periodic_month==12){echo "Dec";}?></td>
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $list->yearly_periodic_start_date;?></td>
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $list->yearly_periodic_task_name;?></td>
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $list->yearly_periodic_remark;?></td>
																	 <td><?php if($list->yearly_periodic_status==1){echo "Active";}else{echo "Inactive";} ?>
																	   <label class="switch1" title="Active / Inactive">
																		 <input type='checkbox' class='checkbox1' id='<?php echo $list->yearly_periodic_id; ?>' onChange='toggle(<?php echo $list->yearly_periodic_id; ?>)'$var1 <?php  if($list->yearly_periodic_status==0){echo "checked";} ?>>
																		 <span class="slider1 round1"> </span>
																	   </label>
                                   </td>
																  </tr>  
																	

																	  <?php }  }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                          <div class="clear"></div>
                                          <div class="tabsPagination">
                                            <div class="pagination">
                                              <?php echo $links; ?>
                                            </div>
                                          </div>
                             
                                        </article>
                          </section>
                          <section id="section2">
                                        <input type="radio" name="sections" id="option2" <?php if($year == '2019') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('Yearlyperiodic/index/2019') ?>'">
                                        <label for="option2">
											<a href="<?php echo site_url('yearlyperiodic/index/2019') ?>" class="mon_class">2019</a>
										</label>
                                        <article>
                                                  <h2>Year 2019 Task</h2>
                                                  <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
																			 <th>Sno</th>	
                                                                             <th>Month</th>
                                                                             <th>Start Date</th>
                                                                             <!--<th>End Date of Task</th>-->
                                                                             <th>Task Name</th>
                                                                             <th>Remark</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                             	  <?php 
																  if($fetch){
																	  $i=1;
																	  foreach($fetch as $list){
																
				
																  ?>
																  <tr >
																     <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $i++; ?></td>
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php if($list->yearly_periodic_month==1){echo "Jan";}if($list->yearly_periodic_month==2){echo "Feb";} if($list->yearly_periodic_month==3){echo "Mar";} if($list->yearly_periodic_month==4){echo "Apr";} if($list->yearly_periodic_month==5){echo "May";} if($list->yearly_periodic_month==6){echo "June";} if($list->yearly_periodic_month==7){echo "July";} if($list->yearly_periodic_month==8){echo "Aug";} if($list->yearly_periodic_month==9){echo "Sept";} if($list->yearly_periodic_month==10){echo "Oct";} if($list->yearly_periodic_month==11){echo "Nov";} if($list->yearly_periodic_month==12){echo "Dec";}?></td>
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $list->yearly_periodic_start_date;?></td>
																	 <!--<td><?php //echo $list->yearly_periodic_end_date;?></td>-->
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $list->yearly_periodic_task_name;?></td>
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $list->yearly_periodic_remark;?></td>
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php if($list->yearly_periodic_status==1){echo "Active";}else{echo "Inactive";} ?>
																		<label class="switch1" title="Active / Inactive">
																		 <input type='checkbox' class='checkbox1' id='<?php echo $list->yearly_periodic_id; ?>' onChange='toggle(<?php echo $list->yearly_periodic_id; ?>)'$var1 <?php  if($list->yearly_periodic_status==0){echo "checked";} ?>>
																		 <span class="slider1 round1"> </span>
																	   </label>
																	 </td>
																	 </tr>  
																
																	  <?php }  }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                          <div class="clear"></div>
                                          <div class="tabsPagination">
                                            <div class="pagination">
                                              <?php echo $links; ?>
                                            </div>
                                          </div>
                              
                                        </article>
                          </section>
                          <section id="section3">
                                        <input type="radio" name="sections" id="option3" <?php if($year == '2020') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('Yearlyperiodic/index/2020') ?>'">
                                        <label for="option3">
											<a href="<?php echo site_url('yearlyperiodic/index/2020') ?>" class="mon_class">2020</a>
										</label>
                                        <article>
                                                        <h2>Year 2020 Task</h2>
                                                        <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
																			<th>Sno</th>	
                                                                             <th>Month</th>
                                                                             <th>Start Date </th>
                                                                             <!-- <th>End Date of Task</th> -->
                                                                             <th>Task Name</th>
                                                                             <th>Remark</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
																  <?php 
																  if($fetch){
																	  $i=1;
																	  foreach($fetch as $list){

		
																  ?>
																  <tr >
																     <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $i++; ?></td>
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php if($list->yearly_periodic_month==1){echo "Jan";}if($list->yearly_periodic_month==2){echo "Feb";} if($list->yearly_periodic_month==3){echo "Mar";} if($list->yearly_periodic_month==4){echo "Apr";} if($list->yearly_periodic_month==5){echo "May";} if($list->yearly_periodic_month==6){echo "June";} if($list->yearly_periodic_month==7){echo "July";} if($list->yearly_periodic_month==8){echo "Aug";} if($list->yearly_periodic_month==9){echo "Sept";} if($list->yearly_periodic_month==10){echo "Oct";} if($list->yearly_periodic_month==11){echo "Nov";} if($list->yearly_periodic_month==12){echo "Dec";}?></td>
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $list->yearly_periodic_start_date;?></td>
																	 <!-- <td><?php // echo $list->yearly_periodic_end_date;?></td> -->
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $list->yearly_periodic_task_name;?></td>
																	 <td onclick='status(<?php echo $list->yearly_periodic_id; ?>)'><?php echo $list->yearly_periodic_remark;?></td>
																	 <td ><?php if($list->yearly_periodic_status==1){echo "Active";}else{echo "Inactive";} ?>
																	   <label class="switch1" title="Active / Inactive">
																		 <input type='checkbox' class='checkbox1' id='<?php echo $list->yearly_periodic_id; ?>' onChange='toggle(<?php echo $list->yearly_periodic_id; ?>)'$var1 <?php  if($list->yearly_periodic_status==0){echo "checked";} ?>>
																		 <span class="slider1 round1"> </span>
																	   </label>
																	 </td>
																  </tr>  
																
																	  <?php }  }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                          <div class="clear"></div>
                                          <div class="tabsPagination">
                                            <div class="pagination">
                                              <?php echo $links; ?>
                                            </div>
                                          </div>
                                        </article>
                          </section>
                          <div class="clear"></div>
                    </div><!-- verticle tabs end -->
                    <div class="clear"></div>
					
        



    </div><!-- monthly periodic panel end -->
  
    
      <!-- popup start -->
	  <div class="popup-main">
   <form  method="POST" action="<?php echo base_url()."yearlyperiodic/add_data/" ?>">
          <div class="popup">
            <div class="header">
                <h3>Yearly Periodic Task- <span id="work">Add</span></h3>
                <span id="close-popup"  title="Close">&times;</span>
            </div>
            <div class="content"><!-- content start -->
                                                        <div class="col-md-6">
                                                                <div class="form-group">
																<label>Select Month</label>
                                                                        <div class="input-group">
                                                                            
                                                                            <div class="form-control">
                                                                                <select title="select month" name="month">
                                                                                    <option value="1">Jan</option>
                                                                                    <option value="2">Feb</option>
                                                                                    <option value="3">March</option>
                                                                                    <option value="4">April</option>
                                                                                    <option value="5">May</option>
                                                                                    <option value="6">June</option>
                                                                                    <option value="7">July</option>
                                                                                    <option value="8">August</option>
                                                                                    <option value="9">Sept</option>
                                                                                    <option value="10">Oct</option>
                                                                                    <option value="11">Nov</option>
                                                                                    <option value="12">Dec</option>
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                </div>
                                                         </div>
												         <div class="col-md-6">
														
                                                                <div class="form-group">
																 <label>Task Name</label>
                                                                        <div class="input-group">
                                                                           
                                                                            <div class="form-control"><input type="text" placeholder="Enter Task" name="task" required /></div>
                                                                        </div>
                                                                </div>
                                                         </div>			 
                                                                  <div class="clear"></div>
													<div class="col-md-12">
                                                        <div class="clear"></div>
                                                         <div class="col-md-6">
                                                                <div class="form-group">
																 <label>Start Date</label>
                                                                        <div class="input-group">
                                                                           
                                                                            <div class="form-control"><input type="date" title="Select Start Date"  required name="start_date" value="" />																			
																			</div>
                                                                        </div>
                                                                </div>
                                                         </div>
                                                          <!--<div class="col-md-6">
                                                                <div class="form-group">
																 <label>End Date</label>
                                                                        <div class="input-group">
                                                                            
                                                                            <div class="form-control"><input type="date" title="Select End Date" required name="end_date" value="<?php //echo set_value('end_date');?>" />
																			<?php //echo form_error('end_date', '<span class="form_error">', '</span>'); ?></span>
																			</div>
                                                                        </div>
                                                                </div>
                                                         </div>-->
                                                        
                                                       
                      <div class="col-md-6">
                           <div class="form-group">
                                       <label>Active/Inactive</label>
                                        <div class="input-group">
                                            <div class="form-control">
											   <select name="status" required>
                                                    <option disabled value="" selected hidden>Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
											</div>
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
                                               <textarea id="Textarea1"  required class="" name="remark" value="<?php //echo set_value('remark'); ?>"></textarea>
											   <?php //echo form_error('remark', '<span class="form_error">', '</span>'); ?></span>
                                            </div>
                                        </div>
                           
                    </div>
                </div>
                     <!-- autometic delegates start -->
				            <div id="delete"> 
                     <div class="auto-del">
                                 <div class="left">
                                           <div class="form-group">
                                             <label>Delegate To</label>
                                              <div class="input-group">
                                                  <div class="form-control"><input type="text" required  title="Delegate To" name="delegate_to[]" value="<?php //echo set_value('delegate_to[]'); ?>"/>
											                             <?php //echo form_error('delegate_to[]', '<span class="form_error">', '</span>'); ?></span>
											                            </div>
                                              </div>
                                           </div>

                                 </div>
                                 <div class="center">
                                         <div class="form-group">
                                               <label>Email Id</label>
                                                <div class="input-group">
                                                    <div class="form-control">
                                                        <input type="text" name="email[]" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php //echo set_value('email'); ?>"/>
														                            <?php //echo form_error('email[]', '<span class="form_error">', '</span>'); ?></span>
                                                    </div>
                                                </div>
                                         </div>
                                 </div>
				<div class="center">		  
						<div class="form-group">
						    <label>Phone Number</label>
							 <div class="input-group">
									<div class="form-control"><input type="text" placeholder="Phone Number" id="phone" name="phone_number[]" required  /></div>						
							 </div>
						</div> 
			    </div>  
                                 <div class="right text-center">
                                            <div class="btn-group">
                                              <a href="#" class="" id="add"><span class="fa fa-plus" ></span></a>
                                            </div>
                                 </div>

                     </div>
				        </div>	 
							 <div class="clear"></div>   

		           </div>
               <!-- autometic delegates end -->

              <div class="clear"></div>
              <div class=" footer">
						           <button type="submit" class="btargetDatetn-primary btn"/>Save</button>
                       <input type="reset" class="btn-primary btn" value="Reset"/>
                       
              </div>
              <div class="clear"></div>
           </div>
				
	    </form>	
     </div> 
    <div class="clear"></div>
		
     <br/><br/><br/> 
     <!-- globle header for comman end --> 
<script>
function toggle(id) {
    var x = document.getElementById(id).checked;
    console.log(id , x);
    var xmlhttp = new XMLHttpRequest();
	 confirm("Do you want to inactive your account ?");

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText); 
            }
		 
        };
                xmlhttp.open("GET", "<?php echo base_url(); ?>Yearlyperiodic/changeStatus/?id="+id+"&status="+x);
        xmlhttp.send();
    
}
</script>
	    <script> 
				$(function() {
					$('a#add').click(function(e) {
						e.preventDefault();
						var lnth = $('#delete .auto-del').length;
					 $('#delete').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" required name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text" name="email[]" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></div></div></div></div><div class="center"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input type="text" id="phone" name="phone_number[]" required  /></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
					  
					});
				});
					function setValues(id){     
							document.getElementById("rm"+id).remove();
					}
		</script>
		
    <script>
        function openTabs(evt, Name) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(Name).style.display = "block";
            evt.currentTarget.className += " active";

        }
        $('.perdoci-task-add-btn').on('click', function () { $('.popup').css('display', 'block');$('.popup-main').css('display', 'block'); });
        $('#close-popup').on('click', function () { $('.popup').css('display', 'none'); });
        
    </script>
    
	<script>
	function status(id) {
   // console.log("id ====" ,id);
    var url = "<?php echo base_url(); ?>yearlyperiodic/view/"+id;
    window.location.assign(url);
}
   </script>
	 
      <?php $this->load->view('footer'); ?>
