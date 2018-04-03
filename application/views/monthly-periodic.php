 <?php $this->load->view('head'); ?>
   <style>
	.mon_class {
		color:#fff;
	}
	.form_error{color:red; font-size:18px;}
   </style>
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
<?php if($this->session->flashdata('msg')): ?>
 <p style="color:red;"><?php echo $this->session->flashdata('msg'); ?></p>
<?php endif; ?>	
	<?php 
		if(form_error('start_date') || form_error('monthly_periodic_time') || form_error('end_date') ||form_error('remark') || form_error('work')){
			echo '<span class="form_error">Please provide valid input', '</span>'	;
		}
	?>
                <!--search button end-->
              <div class="tabordion">
			  
			  <?php //$month = date('m'); ?>
			  
                          <section id="section1">
                                        <input type="radio"  name="sections" id="option1"  <?php if($month == '01') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('Monthlyperiodic/index/01') ?>'">
                                        <label for="option1">
											<a href="<?php echo site_url('Monthlyperiodic/index/01') ?>" class="mon_class">January</a>
										</label>
                                        <article>
                                                     <h2>January 2018 Month Task</h2>
                                                     <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			  <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	//$jan_arr = explode('-',$record->start_date);
																	//$jan_month = $jan_arr[1];
																	//if($jan_month==1){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_start_date;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
                                                                      </tr>
																	<?php 
																	//} 
																	} 
																	}
																	?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                                   
                             
                                        </article>
                          </section>
                          <section id="section2">
                                        <input type="radio" name="sections" id="option2" <?php if($month == '02') { echo "checked"; } ?>  onclick="window.location='<?php echo site_url('Monthlyperiodic/index/02') ?>'">
                                        <label for="option2">
											<a href="<?php echo site_url('Monthlyperiodic/index/02') ?>" class="mon_class">
											Febuary</a>
										</label>
                                        <article>
                                                  <h2>Febuary 2018 Month Task</h2>
                                                  <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			  <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
																	<?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	//$feb_arr = explode('-',$record->start_date);
																	//$feb_month = $feb_arr[1];
																	//if($feb_month==2){
																  ?>
                                                                      <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																		   <td><?php echo $i++; ?></td>
																		   <td><?php echo $record->monthly_periodic_time;?></td>
																		   <td><?php echo $record->monthly_periodic_work;?></td>
																		   <td><?php echo $record->monthly_start_date;?></td>
																		   <td><?php echo $record->monthly_periodic_end_date;?></td>
																		   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
                                                                      </tr>
																	<?php 
																	//} 
																	} 
																	}
																	?>
                                                                  </tbody>
                                                              </table>
                                                     </div>  
                              
                                        </article>
                          </section>
                          <section id="section3">
                                        <input type="radio" name="sections" id="option3" <?php if($month == '03') { echo "checked"; } ?>  onclick="window.location='<?php echo site_url('Monthlyperiodic/index/03') ?>'">
                                        <label for="option3">
											<a href="<?php echo site_url('Monthlyperiodic/index/03') ?>" class="mon_class">March</a>
										</label>
                                        <article>
                                                        <h2>March 2018 Month Task</h2>
                                                        <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			  <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
																  <?php
																 
																if($fetch){
																  $i=1;
																	
																  foreach($fetch as $record){ 
																	//$mar_arr = explode('-',$record->start_date);
																	//$mar_month = $mar_arr[1];
																	//if($mar_month==3){
																  ?> 
                                                                      <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																		   <td><?php echo $i++; ?></td>
																		   <td><?php echo $record->monthly_periodic_time;?></td>
																		   <td><?php echo $record->monthly_periodic_work;?></td>
																		   <td><?php echo $record->monthly_start_date;?></td>
																		   <td><?php echo $record->monthly_periodic_end_date;?></td>
																		   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
																  <?php 
																  //} 
																  } 
																  } 
																  ?>
																  </tr>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                        </article>
                          </section>
                          <section id="section4">
                                        <input type="radio" name="sections" id="option4" <?php if($month == '04') { echo "checked"; } ?>  onclick="window.location='<?php echo site_url('Monthlyperiodic/index/04') ?>'">
                                        <label for="option4">
											<a href="<?php echo site_url('Monthlyperiodic/index/04') ?>" class="mon_class">April</a>
										</label>
                                        <article>
                                                            <h2>April 2018 Month Task</h2>
                                                            <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			  <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>
                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	//$apr_arr = explode('-',$record->monthly_periodic_end_date);
																	//$apr_month = $apr_arr[1];
																	//if($apr_month==4){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_start_date;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
                                                                      </tr>
																	<?php 
																	//} 
																	} 
																	}
																	?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                        </article>
                          </section>
                          <section id="section5">
                                                <input type="radio" name="sections" id="option5" <?php if($month == '05') { echo "checked"; } ?>  onclick="window.location='<?php echo site_url('Monthlyperiodic/index/05') ?>'">
                                                <label for="option5">
													<a href="<?php echo site_url('Monthlyperiodic/index/05') ?>" class="mon_class">May</a>
												</label>
                                                <article>
                                                            <h2>May 2018 Month Task</h2>
                                                            <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			  <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	//$may_arr = explode('-',$record->monthly_periodic_end_date);
																	//$may_month = $may_arr[1];
																	//if($may_month==5){
																  ?>
                                                                      <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_start_date;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
																	   
                                                                      </tr>
																	<?php 
																	//} 
																	} 
																	}
																	?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                                </article>
                          </section>
                          <section id="section6">
                                                <input type="radio" name="sections" id="option6" <?php if($month == '06') { echo "checked"; } ?>  onclick="window.location='<?php echo site_url('Monthlyperiodic/index/06') ?>'">
                                                <label for="option6">
													<a href="<?php echo site_url('Monthlyperiodic/index/06') ?>" class="mon_class">June</a>
												</label>
                                                <article>
                                                              <h2>June 2018 Month Task</h2>
                                                              <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			  <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	//$june_arr = explode('-',$record->monthly_periodic_end_date);
																	//$june_month = $june_arr[1];
																	//if($june_month==6){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	   <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_start_date;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
                                                                      </tr>
																	<?php 
																	//} 
																	} 
																	}
																	?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                                </article>
                          </section>
                          <section id="section7">
                                                        <input type="radio" name="sections" id="option7" <?php if($month == '07') { echo "checked"; } ?>  onclick="window.location='<?php echo site_url('Monthlyperiodic/index/07') ?>'">
                                                        <label for="option7">
															<a href="<?php echo site_url('Monthlyperiodic/index/07') ?>" class="mon_class">July</a>
														</label>
                                                        <article>
                                                              <h2>July 2018 Month Task</h2>
                                                              <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			  <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	//$july_arr = explode('-',$record->monthly_periodic_end_date);
																	//$july_month = $july_arr[1];
																	//if($july_month==7){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_start_date;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
                                                                      </tr>
																	<?php 
																	//} 
																	} 
																	}
																	?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                                        </article>
                          </section>
                          <section id="section8">
                                                        <input type="radio" name="sections" id="option8" <?php if($month == '08') { echo "checked"; } ?>  onclick="window.location='<?php echo site_url('Monthlyperiodic/index/08') ?>'">
                                                        <label for="option8">
															<a href="<?php echo site_url('Monthlyperiodic/index/08') ?>" class="mon_class">August</a>
														</label>
                                                        <article>
                                                            <h2>August 2018 Month Task</h2>
                                                            <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			  <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	//$aug_arr = explode('-',$record->monthly_periodic_end_date);
																	//$aug_month = $aug_arr[1];
																	//if($aug_month==8){
																  ?>
                                                                      <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	   <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_start_date;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
                                                                      </tr>
																	<?php 
																	//} 
																	} 
																	}
																	?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                                        </article>
                          </section>
                          <section id="section9">
                                                        <input type="radio" name="sections" id="option9" <?php if($month == '09') { echo "checked"; } ?>  onclick="window.location='<?php echo site_url('Monthlyperiodic/index/09') ?>'">
                                                        <label for="option9">
															<a href="<?php echo site_url('Monthlyperiodic/index/09') ?>" class="mon_class">September</a>
														</label>
                                                        <article>
                                                             <h2>September 2018 Month Task</h2>
                                                             <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			  <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	//$sept_arr = explode('-',$record->monthly_periodic_end_date);
																	//$sept_month = $sept_arr[1];
																	//if($sept_month==9){
																  ?>
                                                                    <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	   <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_start_date;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
                                                                    </tr>
																	<?php 
																	//} 
																	} 
																	}
																	?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                                                        </article>
                          </section>
                          <section id="section10">
                                                        <input type="radio" name="sections" id="option10" <?php if($month == '10') { echo "checked"; } ?>  onclick="window.location='<?php echo site_url('Monthlyperiodic/index/10') ?>'">
                                                        <label for="option10">
															<a href="<?php echo site_url('Monthlyperiodic/index/10') ?>" class="mon_class">October</a>
														</label>
                                                        <article>
                                                             <h2>October 2018 Month Task</h2>
                                                             <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			  <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;

																  foreach($fetch as $record){ 
																	//$oct_arr = explode('-',$record->monthly_periodic_end_date);
																	//$oct_month = $oct_arr[1];
																	//if($oct_month==10){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_start_date;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
                                                                      </tr>
																	<?php 
																	//} 
																	} 
																	}
																	?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                                        </article>
                          </section>
                          <section id="section11">
                                                        <input type="radio" name="sections" id="option11" <?php if($month == '11') { echo "checked"; } ?>  onclick="window.location='<?php echo site_url('Monthlyperiodic/index/11') ?>'">
                                                        <label for="option11">
															<a href="<?php echo site_url('Monthlyperiodic/index/11') ?>" class="mon_class">November</a>
														</label>
                                                        <article>
                                                              <h2>November 2018 Month Task</h2>
                                                              <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			  <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;
																  foreach($fetch as $record){ 
																	//$nov_arr = explode('-',$record->monthly_periodic_end_date);
																	//$nov_month = $nov_arr[1];
																	//if($nov_month==11){
																  ?>
                                                                    <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_start_date;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>
                                                                    </tr>
																	<?php 
																	//} 
																	} 
																	}
																	?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                                        </article>
                          </section>
                          <section id="section12">
                                                        <input type="radio" name="sections" id="option12" <?php if($month == '12') { echo "checked"; } ?>  onclick="window.location='<?php echo site_url('Monthlyperiodic/index/12') ?>'">
                                                        <label for="option12">
															<a href="<?php echo site_url('Monthlyperiodic/index/12') ?>" class="mon_class">December</a>
														</label>
                                                        <article>
                                                              <h2>December 2018 Month Task</h2>
                                                              <div class="table-res style-6">
                                                              <table class="">
                                                                     <thead>
                                                                         <tr>
                                                                             <th>SR NO</th>
                                                                             <th>Time</th>
                                                                             <th>Work</th>
																			 <th>Start Date</th>
                                                                             <th>End Date</th>
                                                                             <th>Active / Inactive</th>

                                                                         </tr>
                                                                     </thead>
                                                                  <tbody>
                                                                  <?php
																if($fetch){
																  $i=1;
																									
																  foreach($fetch as $record){ 
																	//$dec_arr = explode('-',$record->monthly_periodic_end_date);
																	//$dec_month = $dec_arr[1];
																	
																	//if($dec_month==12){
																  ?>
                                                                       <tr onclick='status(<?php echo $record->monthly_periodic_id; ?>)'>
																	  <td><?php echo $i++; ?></td>
																	   <td><?php echo $record->monthly_periodic_time;?></td>
																	   <td><?php echo $record->monthly_periodic_work;?></td>
																	   <td><?php echo $record->monthly_start_date;?></td>
																	   <td><?php echo $record->monthly_periodic_end_date;?></td>
																	   <td><?php if($record->monthly_periodic_status == 1){ echo "Yes"; }else{ echo "No" ;}?></td>																	   <td></td>
                                                                      </tr>
																	  
																  <?php 
																  //} 
																  } 
																  } 
																  ?>
                                                                  </tbody>
                                                              </table>
                                                     </div>
                            
                                                       </article>
                          </section>
						  <div class="clear"></div>
                    </div><!-- verticle tabs end -->
					<div class="clear"></div>
					<div class="tabsPagination">
							<div class="pagination">
								  <?php echo $links; ?>
							</div>
					</div>

    </div><!-- monthly periodic panel end -->
  
      <!-- popup start -->
	  <div class="popup-main">
   <form  method="POST" action="<?php echo base_url()."Monthlyperiodic/add_data/" ?>">
          <div class="popup">
            <div class="header">
                <h3>Monthly Periodic Task- <span id="work">Add</span></h3>
                <span id="close-popup"  title="Close">&times;</span>
            </div>
            <div class="content"><!-- content start -->
                            <div class="col-md-12" class="auto-del">
                                <div class="col-md-6">
                                    <div class="form-group">
                                     <label>Time :</label>
                                        <div class="input-group">
                                           <div class="form-control"><input type="time" title="Time" required name="monthly_periodic_time" />
										   </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="form-group">
                                       <label>Work :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" required title="Work" name="work" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <div class="clear"></div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label>Start Date :</label>
                                      <div class="input-group">
                                         <div class="form-control"><input type="date" required title="Start Date" name="start_date"/></div>
                                      </div>
                                 </div>
                             </div>
                                  <div class="col-md-6">
                                     <div class="form-group">
                                       <label>End Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" required title="End Date" name="end_date"/></div>
                                        </div>
                                     </div>
                                  </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                       <label>Active/Inactive</label>
                                        <div class="input-group">
                                            <div class="form-control">
											   <select name="status" required>
                                                    <option disabled value="" selected hidden>Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inacive</option>
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
                                               <textarea id="Textarea1" required class="" name="remark"></textarea>
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
                                            <div class="form-control"><input type="text" required title="Delegate To" name="delegate_to[]"/></div>
                                        </div>
                                     </div>
                                 </div>
                                         <div class="center">
                                             <div class="form-group">
                                               <label>Email Id</label>
                                                <div class="input-group">
                                                    <div class="form-control">
                                                        <input type="text" name="email[]" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
                                                    </div>
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
	</div>
    <div class="clear"></div>
	 
	    <script> 
				$(function() {
					$('a#add').click(function(e) {
						e.preventDefault();
						var lnth = $('#delete .auto-del').length;
					 $('#delete').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" required name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text" name="email[]" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
					  
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


$('.perdoci-task-add-btn').on('click',function(){
	
	$('.popup').css('display','block');
	$('.popup-main').css('display','block');
});

</script>
	
      <?php $this->load->view('footer'); ?>

     <!-- globle header for comman end --> 
	 
