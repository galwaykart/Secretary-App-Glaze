  <?php $this->load->view('head'); ?>
     <?php $this->load->view('header'); ?>
    	 <style>
	 .form_error{color:red; font-size:18px;}
	 </style>
	<!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Monthly Periodic View</p></div>
	<div class="clear"></div>
    <div class="dailly-notes-index-panel">
			<?php 
		if(form_error('end_date') || form_error('note[]') || form_error('date[]')){
			echo '<span class="form_error">Please provide valid input', '</span>'	;
		}
	?>
	<form method="post"  action="<?php if($list){echo base_url()."Monthlyperiodic/add_data/".$list['data1'][0]->monthly_periodic_id;}else{echo base_url()."Monthlyperiodic/add_data/";} ?>">
	<div class="container-5">
                       
                        <div class="col-md-12">
                                    <h2>Perodic Task View</h2>
                                    <div class="col-md-12"><p>Task Name :
										<?php if($list['data1']){ echo $list['data1'][0]->monthly_periodic_work;} ?>
									<span id="projectname"></span></p></div>
                                   
                                    <div class="clear"></div>
                                    <div class="col-md-4">
                                         <div class="form-group">
                                                        <label>End Date</label>
                                                        
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                            <span class="fa fa-calendar" ></span>
                                                            </div>
                                                            <div class="form-control">
															<input type="date" title="End date" required name = "end_date" value="<?php if($list){ echo $list['data1'][0]->monthly_periodic_end_date; }  ?>" /></div>
                                                        </div>
                                                </div>
                                               
                                    </div>
							<div id="delete1" class="auto-del">
                                    <div class="col-md-4" >
                                         <div class="form-group">
                                                   <label>Delegate To</label>
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                                <span class="fa fa-share" ></span>
                                                            </div>
                                                     <div class="form-control">
															  <input type="text" title="Delegate To" placeholder="Delegate To" name="delegate_to[]" required value="<?php if($list['data2']){ echo $list['data2'][0]->monthly_periodic_delegates_name; }  ?>"/>
													</div>
															
                                                        </div>
										</div>
                                    </div>
									 <div class="col-md-4">
                                         <div class="form-group">
                                               <label>Email</label>
                                                        
                                                    <div class="input-group">
                                                        <div class="input-addon">
                                                              <span class="fa fa-share" ></span>
                                                         </div>
                                                            <div class="form-control">
															  <input type="text" title="Delegate To" placeholder="Delegate Email" name="email[]" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php if($list['data2']){ echo $list['data2'][0]->monthly_periodic_delegates_email; }  ?>"/>
															</div>
															
                                                    </div>
										</div>
                                    </div>
                                    <div class="col-md-4">
                                         <div class="btn-group margin-top" style="text-align:center">
											<a href="#" class="ad btn-primary btn" id="add"><span class="fa fa-plus" ></span></a>
										</div>           
                                    </div>        
						 <?php  $j = 0;
								if($list){									
									foreach($list['data2'] as $record){	 
									//print_r($list['data2']);
						     	if($j != '0'){  ?>
								<div class="clear"></div>
							      <div id="rm1<?php echo $j; ?>"  class="auto-del">
                                    <div class="col-md-4" >
                                         <div class="form-group">
                                                   <label>Delegate To</label>
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                                <span class="fa fa-share" ></span>
                                                            </div>
                                                     <div class="form-control">
															  <input type="text" title="Delegate To" placeholder="Delegate To" name="delegate_to[]" required value="<?php if($record){ echo $record->monthly_periodic_delegates_name; }  ?>"/>
													</div>
															
                                                        </div>
										</div>
                                    </div>
									 <div class="col-md-4" >
                                         <div class="form-group">
                                               <label>Email</label>
                                                        
                                                    <div class="input-group">
                                                        <div class="input-addon">
                                                              <span class="fa fa-share" ></span>
                                                         </div>
                                                            <div class="form-control">
															  <input type="text" title="Delegate To" placeholder="Delegate Email" name="email[]" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php if($record){ echo $record->monthly_periodic_delegates_email; }  ?>"/>
															</div>
															
                                                    </div>
									<div class="right text-center">
									 <div class="btn-group"><a style="background: red;" href="#"  onclick="setValues1(<?php echo $j; ?>)"><span class="fa fa-minus" style="color: white;"></span></a></div></div>
										</div>
                                    </div>
                             </div>		 
								<?php } $j++;  } }  ?>
                       
					 </div>  

		</div><!-- col-md-12 end -->
                        <div class="clear"></div>
           <div class="delegatesheet-view">
                        <div class="">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>End Date</th><th>Status</th>
                                            <th>Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
									if($list){		
									foreach($list['data1'] as $record){ ?>
                                       <tr>
									   <td><?php echo $record->monthly_periodic_end_date ?></td>
									  <td><?php if($record->monthly_periodic_status==1)echo "Yes"; else{echo "No";} ?></td>
									   <td><?php echo $record->monthly_periodic_remark ?></td>
									</tr>
									<?php } } ?>
                                    </tbody>
                                </table>
                        </div>
               </div>

   </div><!-- container 5 end -->

		<div class="col-md-12 monthly-view-list-input" id="delete">
		  	
					<div class="col-md-3">
						<div class="form-group">
							<label>Status Date</label>
							   <div class="input-group">
									<div class="input-addon">
										 <span class="fa fa-calendar" ></span>
									</div>
							<div class="form-control"><input type="date" title="Status date"  name="date[]" required value="<?php if($list['data3']){ echo $list['data3'][0]->monthly_periodic_status_date; }  ?>"/></div>
							 </div>
						</div>
													   
					</div> 
							
					 <div class="col-md-3">
						<div class="form-group">
                              <label>Note</label>
                                   <div class="input-group">
								       <div class="input-addon">
                                              <span class="fa fa-edit" ></span>
                                       </div>
                                          <div class="form-control">
                                              <textarea id="Textarea1" required class="" name="note[]"  >
											  <?php if($list['data3']){ echo $list['data3'][0]->monthly_periodic_status_note; }  ?>
											  </textarea>
                                         </div>
                                   </div>
                           
                        </div>
                   </div>
						<div class="col-md-3"> 
							<div class="btn-group margin-top" style="text-align:left">
								<a href="#" class="ad btn-primary btn" id="add1"><span class="fa fa-plus" ></span></a>
							</div>	
						</div> 
										
							 <?php  
							 $i = 0;
							 if($list){									
							foreach($list['data3'] as $record){	 
								//print_r($list['data2']);
								if($i != '0'){  ?>
								<div class="clear"></div>		
					<div id="rm<?php echo $i; ?>"  class="auto-del">
							<div class="col-md-4">
								<div class="form-group">
									<label>Status Date</label>
									   <div class="input-group">
											<div class="input-addon">
												 <span class="fa fa-calendar" ></span>
											</div>
												<div class="form-control">
												  <input type="date" title="Status date"  name="date[]" value="<?php if($record){ echo $record->monthly_periodic_status_date; }  ?>"/>
												</div>
									   </div>
								</div>
							</div> 
											
					 <div class="col-md-3">
						<div class="form-group">
                              <label>Note</label>
                                   <div class="input-group">
								       <div class="input-addon">
                                              <span class="fa fa-sticky-note" ></span>
                                       </div>
                                          <div class="form-control">
                                              <textarea id="Textarea1" class="" name="note[]"  >
											<?php if($record){ echo $record->monthly_periodic_status_note; } ?>
											  </textarea>
                                         </div>
                                   </div>
                           
                        </div>
                   </div>	
			   
					<div class="right text-center">
					  <div class="btn-group"><a style="background: red;" href="#"  onclick="setValues(<?php echo $i; ?>)"><span class="fa fa-minus" style="color: white;"></span></a></div></div>				   
			  </div>
				
			 <?php } $i++; } }   ?> 
	
			</div>	 
			<div class="col-md-12" style="text-align:center">
				<button type="submit" class="btn-primary btn">Submit</button>
			</div>	
	</form>
	<div class="clear"></div>
  </div><!-- dailly index panel end -->
<!-- dailly index panel end -->
       
	
	
   	    <script type="text/javascript"> 
				$(function() {
					$('a#add1').click(function(e) {
						e.preventDefault();
						var lnth = $('#delete .custom').length; 
					 $('#delete').append('<div class="clear"></div><div id="rm'+lnth+'" class="custom"><div class="auto-del"><div class="col-md-3"><div class="form-group"><label>Status Date</label><div class="input-group"><div class="input-addon"><span class="fa fa-calendar" ></span></div><div class="form-control"><input type="date" title="Status date" name="date[]" required /></div></div></div></div> <div class="col-md-3"><div class="form-group"><label>Note</label><div class="input-group"><div class="input-addon"><span class="fa fa-edit" ></span></div><div class="form-control"><textarea id="Textarea1" class="" name="note[]" required></textarea></div></div></div></div><div class="right "><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div>');
					  
					});
				});
					function setValues(id){     
							document.getElementById("rm"+id).remove();
					}
		</script>
		
		 	    <script type="text/javascript"> 
				$(function() {
					$('a#add').click(function(e) {
						e.preventDefault();
						var lnth1 = $('#delete1 .auto-del1').length; 
					 $('#delete1').append('<div class="clear"></div><div id="rm1'+lnth1+'" class="auto-del1"><div class="col-md-4"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="input-addon"><span class="fa fa-share" ></span></div><div class="form-control"><input type="text" title="Delegate To" placeholder="Delegate To" name="delegate_to[]" required/></div></div></div></div><div class="col-md-4" ><div class="form-group"><label>Email</label><div class="input-group"><div class="input-addon"><span class="fa fa-share" ></span></div><div class="form-control"><input type="text" title="Delegate To" placeholder="Delegate Email" name="email[]" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues1('+ lnth1 + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div>');
					  
					});
				});
					function setValues1(id){     
						document.getElementById("rm1"+id).remove();
					}
		</script>
    <?php $this->load->view('footer'); ?>
