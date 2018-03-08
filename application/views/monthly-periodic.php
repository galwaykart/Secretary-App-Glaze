<!doctype html>
<html>
 <?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
    <?php $this->load->view('header'); ?>

    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Monthly Periodic</p></div>
    <div class="clear"></div>
    <div class="monthly-periodic-task-sheet"><!-- monthly periodic panel start -->
              <h2 id="paddin-left">Monthly Periodic </h2>
              <a href="#" id="" class="perdoci-task-add-btn"><span class="fa fa-plus" ></span>&nbsp;New</a>
                <!--search button start-->
                        <div class="search-btn-perodic">
                            <input type="text" value="" placeholder="Search Task"/><button><span class="fa fa-search"></span></button>

                        </div>
                <!--search button end-->
              <div class="tabordion">
			  
			  <?php $month = date('m'); ?>
                          <section id="section1">
                                        <input type="radio" name="sections" id="option1" <?php if($month == '01') { echo "checked"; } ?> >
                                        <label for="option1">January</label>
                                        <article>
                                                     <h2>January 2019 Month Task</h2>
                                                     <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	$jan_arr = explode('-',$record->monthly_periodic_end_date);
																	$jan_month = $jan_arr[1];
																	if($jan_month==1){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php echo $record->monthly_periodic_status;?></td>
                                                                      </tr>
																	<?php } } }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                                   
                             
                                        </article>
                          </section>
                          <section id="section2">
                                        <input type="radio" name="sections" id="option2" <?php if($month == '02') { echo "checked"; } ?>>
                                        <label for="option2">Febuary</label>
                                        <article>
                                                  <h2>Febuary 2019 Month Task</h2>
                                                  <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
																	<?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	$feb_arr = explode('-',$record->monthly_periodic_end_date);
																	$feb_month = $feb_arr[1];
																	if($feb_month==2){
																  ?>
                                                                      <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																		   <td><?php echo $i++; ?></td>
																		   <td><?php echo $record->monthly_periodic_time;?></td>
																		   <td><?php echo $record->monthly_periodic_work;?></td>
																		   <td><?php echo $record->monthly_periodic_end_date;?></td>
																		   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
                                                                      </tr>
																	<?php } } }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>  
                              
                                        </article>
                          </section>
                          <section id="section3">
                                        <input type="radio" name="sections" id="option3" <?php if($month == '03') { echo "checked"; } ?>>
                                        <label for="option3">March</label>
                                        <article>
                                                        <h2>March 2019 Month Task</h2>
                                                        <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
																  <?php
																 
																if($fetch){
																  $i=1;
																	
																  foreach($fetch as $record){ 
																	$mar_arr = explode('-',$record->monthly_periodic_end_date);
																	$mar_month = $mar_arr[1];
																	if($mar_month==3){
																  ?> 
                                                                      <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																		   <td><?php echo $i++; ?></td>
																		   <td><?php echo $record->monthly_periodic_time;?></td>
																		   <td><?php echo $record->monthly_periodic_work;?></td>
																		   <td><?php echo $record->monthly_periodic_end_date;?></td>
																		   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
																			
																  <?php } } } ?>
																  </tr>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                        </article>
                          </section>
                          <section id="section4">
                                        <input type="radio" name="sections" id="option4" <?php if($month == '04') { echo "checked"; } ?>>
                                        <label for="option4">April</label>
                                        <article>
                                                            <h2>April 2019 Month Task</h2>
                                                            <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	$apr_arr = explode('-',$record->monthly_periodic_end_date);
																	$apr_month = $apr_arr[1];
																	if($apr_month==4){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	  
																	   <td><?php echo $record->monthly_periodic_status;?></td>
                                                                      </tr>
																	<?php } } }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                        </article>
                          </section>
                          <section id="section5">
                                                <input type="radio" name="sections" id="option5" <?php if($month == '05') { echo "checked"; } ?>>
                                                <label for="option5">May</label>
                                                <article>
                                                            <h2>May 2019 Month Task</h2>
                                                            <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	$may_arr = explode('-',$record->monthly_periodic_end_date);
																	$may_month = $may_arr[1];
																	if($may_month==5){
																  ?>
                                                                      <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	  
																	   <td><?php echo $record->monthly_periodic_status;?></td>
                                                                      </tr>
																	<?php } } }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                                </article>
                          </section>
                          <section id="section6">
                                                <input type="radio" name="sections" id="option6" <?php if($month == '06') { echo "checked"; } ?>>
                                                <label for="option6">June</label>
                                                <article>
                                                              <h2>June 2019 Month Task</h2>
                                                              <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	$june_arr = explode('-',$record->monthly_periodic_end_date);
																	$june_month = $june_arr[1];
																	if($june_month==6){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	  
																	   <td><?php echo $record->monthly_periodic_status;?></td>
                                                                      </tr>
																	<?php } } }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                                </article>
                          </section>
                          <section id="section7">
                                                        <input type="radio" name="sections" id="option7" <?php if($month == '07') { echo "checked"; } ?>>
                                                        <label for="option7">July</label>
                                                        <article>
                                                              <h2>July 2019 Month Task</h2>
                                                              <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	$july_arr = explode('-',$record->monthly_periodic_end_date);
																	$july_month = $july_arr[1];
																	if($july_month==7){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	
																	   <td><?php echo $record->monthly_periodic_status;?></td>
                                                                      </tr>
																	<?php } } }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                                        </article>
                          </section>
                          <section id="section8">
                                                        <input type="radio" name="sections" id="option8" <?php if($month == '08') { echo "checked"; } ?>>
                                                        <label for="option8">August</label>
                                                        <article>
                                                            <h2>August 2019 Month Task</h2>
                                                            <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	$aug_arr = explode('-',$record->monthly_periodic_end_date);
																	$aug_month = $aug_arr[1];
																	if($aug_month==8){
																  ?>
                                                                      <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	
																	   <td><?php echo $record->monthly_periodic_status;?></td>
                                                                      </tr>
																	<?php } } }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                                        </article>
                          </section>
                          <section id="section9">
                                                        <input type="radio" name="sections" id="option9" <?php if($month == '09') { echo "checked"; } ?>>
                                                        <label for="option9">Sepetmber</label>
                                                        <article>
                                                             <h2>Sepetmber 2019 Month Task</h2>
                                                             <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	$sept_arr = explode('-',$record->monthly_periodic_end_date);
																	$sept_month = $sept_arr[1];
																	if($sept_month==9){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	 
																	   <td><?php echo $record->monthly_periodic_status;?></td>
                                                                      </tr>
																	<?php } } }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                                        </article>
                          </section>
                          <section id="section10">
                                                        <input type="radio" name="sections" id="option10" <?php if($month == '10') { echo "checked"; } ?>>
                                                        <label for="option10">October</label>
                                                        <article>
                                                             <h2>October 2019 Month Task</h2>
                                                             <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	$oct_arr = explode('-',$record->monthly_periodic_end_date);
																	$oct_month = $oct_arr[1];
																	if($oct_month==10){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php echo $record->monthly_periodic_status;?></td>
                                                                      </tr>
																	<?php } } }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                                        </article>
                          </section>
                          <section id="section11">
                                                        <input type="radio" name="sections" id="option11" <?php if($month == '11') { echo "checked"; } ?>>
                                                        <label for="option11">November</label>
                                                        <article>
                                                              <h2>November 2019 Month Task</h2>
                                                              <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Delegate To</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;
																  foreach($fetch as $record){ 
																	$nov_arr = explode('-',$record->monthly_periodic_end_date);
																	$nov_month = $nov_arr[1];
																	if($nov_month==11){
																  ?>
                                                                    <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	
																	   <td><?php echo $record->monthly_periodic_status;?></td>
                                                                    </tr>
																	<?php } } }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                                        </article>
                          </section>
                          <section id="section12">
                                                        <input type="radio" name="sections" id="option12" <?php if($month == '12') { echo "checked"; } ?>>
                                                        <label for="option12">December</label>
                                                        <article>
                                                              <h2>December 2019 Month Task</h2>
                                                              <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	$dec_arr = explode('-',$record->monthly_periodic_end_date);
																	$dec_month = $dec_arr[1];
																	if($dec_month==12){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   
																	   <td><?php echo $record->monthly_periodic_status;?></td>
                                                                      </tr>
																	<?php } } }?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                                        </article>
                          </section>
                    </div><!-- verticle tabs end -->

        



    </div><!-- monthly periodic panel end -->
  
    
      <!-- popup start -->
    <form  method="POST" action="<?php echo base_url()."Monthlyperiodic/add_data/" ?>">
          <div class="popup">
            <div class="header">
                <h3>Monthly Periodic Task- <span id="work">Add</span></h3>
                <span id="close-popup"  title="Close">&times;</span>
            </div>
            <div class="content"><!-- content start -->
                <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Time :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="time" title="Time" name="monthly_periodic_time"/></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Work :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" title="Work" name="work" /></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                  <div class="col-md-12">
                   
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>End Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" title="End Date" name="end_date"/></div>
                                        </div>
                          </div>
                        
                    </div>
                      <div class="col-md-6">
                           <div class="form-group">
                                       <label>Active/Inactive</label>
                                        <div class="input-group">
                                            <div class="form-control">
											   <select name="status">
                                                    <option>Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inacive</option>
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
                                               <textarea id="Textarea1" class="" name="remark"></textarea>
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
                                            <div class="form-control"><input type="text" title="Delegate To" name="delegate_to[]"/></div>
                                        </div>
                                  </div>

                                 </div>
                                 <div class="center">
                                         <div class="form-group">
                                               <label>Email Id</label>
                                                <div class="input-group">
                                                    <div class="form-control">
                                                        <input type="text" name="email[]"/>
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
				</div>	 
							 <div class="clear"></div>
                     <!-- autometic delegates end -->

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
				
	</form>
                <div class="clear"></div>
    


   
	<?php echo $links;  ?>

     <br /><br /><br />
    <div style="height:50px;"></div>
	
	
	
	
      <?php $this->load->view('footer'); ?>


     <!-- globle header for comman end --> 
	 
	 
	 
   	    <script type="text/javascript"> 
				$(function() {
					$('a#A1').click(function(e) {
						e.preventDefault();
						var lnth = $('#delete').length; 
					 $('#delete').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text" name="email[]"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
					  
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
        $('.perdoci-task-add-btn').on('click', function () { $('.popup').css('display', 'block'); });
        $('#close-popup').on('click', function () { $('.popup').css('display', 'none'); });
        
    </script>
    
	<script>
	function status(id) {
   // console.log("id ====" ,id);
    var url = "<?php echo base_url(); ?>Monthlyperiodic/view/"+id;
    window.location.assign(url);
}
</script>
	
</body>
</html>
