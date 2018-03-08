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
                                                            <div class="form-control"><input type="text" title="Delegate To" placeholder="Delegate To" name="delegate_to" value="<?php if($list){ echo $list[0]->monthly_periodic_delegates_name; }  ?>"/></div>
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
									<?php foreach($list as $record){ ?>
                                       <tr>
									   <td><?php echo $record->monthly_periodic_end_date ?></td>
									   <td><?php echo $record->monthly_periodic_status ?></td>
									   <td><?php echo $record->monthly_periodic_remark ?></td>
									   
									   </tr>
									<?php } ?>
                                    </tbody>
                                </table>
                        </div>
               </div>
             


   </div><!-- container 5 end -->
<form method="post"  action="<?php echo base_url()."Monthlyperiodic/add_data/" ?>">
		<div class="col-md-12" id="delete">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Status Date</label>
                       <div class="input-group">
                            <div class="input-addon">
                                 <span class="fa fa-calendar" ></span>
                            </div>
                    <div class="form-control"><input type="date" title="Status date"  name="date[]"/></div>
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
                                              <textarea id="Textarea1" class="" name="note[]"></textarea>
                                         </div>
                                   </div>
                           
                        </div>
                   </div>
						<div class="col-md-2"> 
							<div class="btn-group margin-top" style="text-align:center">
								<a href="#" class="ad btn-primary btn" id="add1"><span class="fa fa-plus" ></span></a>
							</div>	
						</div>    
				   
			<div class="col-md-12" style="text-align:center">
				<button type="submit" class="btn-primary btn">Submit</button>
			</div>	
		</div>

	</form>
  </div><!-- dailly index panel end -->
  
       
     <br /><br /><br />
    <div style="height:50px;"></div>
    <?php $this->load->view('footer'); ?>
	
	
   	    <script type="text/javascript"> 
				$(function() {
					$('a#add1').click(function(e) {
						e.preventDefault();
						var lnth = $('#delete').length; 
					 $('#delete').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="col-md-4"><div class="form-group"><label>Status Date</label><div class="input-group"><div class="input-addon"><span class="fa fa-calendar" ></span></div><div class="form-control"><input type="date" title="Status date"  /></div></div></div></div> <div class="col-md-3"><div class="form-group"><label>Note</label><div class="input-group"><div class="input-addon"><span class="fa fa-sticky-note" ></span></div><div class="form-control"><textarea id="Textarea1" class="" name="note"></textarea></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div>');
					  
					});
				});
					function setValues(id){     
							document.getElementById("rm"+id).remove();
					}
		</script>
</body>
</html>
