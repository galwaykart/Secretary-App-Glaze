<!doctype html>
<html>
<?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Quick Work</p></div>
    <div class="dailly-notes-index-panel">
    <?php
        //  if($records){print_r($records);} 
         ?>
            <div class="table-res">
                    <div class="table-view">
                        <table>
                            <thead>
                                <tr><th>Sr No</th><th>Date </th><th>Task</th><th>Delegate To</th><th>Target Date</th><th>Priority</th><th>Remarks</th><th>Status</th><th>Active</th></tr>
                            </thead>
                            <tbody>
                            <?php 
                              $i=1;
                                          foreach($records as $r) { 
                                            echo "<tr onclick='newDoc($r->quick_work_id)'>"; 
                                            echo "<td>".$i++."</td>"; 
                                            echo "<td>".$r->date."</td>"; 
                                            echo "<td>".$r->task."</td>"; 
                                            echo "<td>".$r->delegated."</td>"; 
                                            echo "<td>".$r->target_date."</td>"; 
                                            echo "<td>".$r->priority."</td>"; 
                                            echo "<td>".$r->remark."</td>"; 
                                            echo "<td>".$r->status."</td>"; 
                                            echo "<td>".$r->active."</td>"; 

                                            
                                         //    echo "<td><a href = '".base_url()."index.php/stud/edit/"
                                         //       .$r->roll_no."'>Edit</a></td>"; 
                                         //    echo "<td><a href = '".base_url()."index.php/stud/delete/"
                                         //       .$r->roll_no."'>Delete</a></td>"; 
                                            echo "<tr>"; 
                                         } 
                              ?>
                              <!-- <tr>
                                  <td>1</td><td>12/07/2018</td><td>no tasks</td><td>self</td><td>12/09/2018</td><td>High</td><td>No remarks</td><td>pending</td><td>Active</td>
                              </tr>
                                  <tr>
                                  <td>1</td><td>12/07/2018</td><td>no tasks</td><td>self</td><td>12/09/2018</td><td>High</td><td>No remarks</td><td>pending</td><td>Active</td>
                              </tr>
                                  <tr>
                                  <td>1</td><td>12/07/2018</td><td>no tasks</td><td>self</td><td>12/09/2018</td><td>High</td><td>No remarks</td><td>pending</td><td>Active</td>
                              </tr> -->
                            </tbody>
                        </table>
                    </div>

            </div>
    </div><!-- dailly index panel end -->
   
     <br /><br /><br />
    <div style="height:50px;"></div>
    <?php $this->load->view('footer'); ?>
    <script>
      
function newDoc(id) {
    //console.log("id ====" ,id);
    var url = "<?php echo base_url(); ?>Quickwork/daillynote_view/"+id;
    window.location.assign(url);
}
</script>
        <div class="clear"></div>
        <div class="col-md-12">
            <br />
                <a href="#" id="addnotes"><span class="fa fa-plus" >&nbsp;Add</span></a>
        </div>
    </div><!-- dailly index panel end -->
  
    <!-- popup start -->
    <form method="POST" action="<?php echo base_url()."Quickwork/req/" ?>">
    <div class="popup" style="display: none;">
                        <div class="header">
                <h3>Quick Work - <span id="work">Add</span></h3>
                <span id="close-popup"  title="Close">&times;</span>
            </div>
           
            <div class="content"><!-- content start -->
                <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" name="date" title="Date" /></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Task :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" name="task" title="Task" /></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                   
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Target Date</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" name="target_date" title="Target Date" /></div>
                                        </div>
                          </div>
                        
                    </div>
                      <div class="col-md-6">
                           <div class="form-group">
                                       <label>Priority</label>
                                        <div class="input-group">
                                            <div class="form-control"><select name="priority">
                                                    <option>Select Priority</option>
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
                                               <textarea id="" name="remark" class=""></textarea>
                                            </div>
                                        </div>
                           
                    </div>
                </div>
                     
                <div class="clear"></div>
                 <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Status</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" name="status" title="Status" /></div>
                                        </div>
                           </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Active/Inactive</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select name="active"><option value='Yes'>Yes</option><option value='No'>No</option></select>
                                            </div>
                                        </div>
                           </div>
                    </div>

                     <!-- autometic delegates start -->
                     <div id="auto-del">
						 <div class="auto-del">
									 <div class="left">
										 <div class="form-group">
											   <label>Delegate To</label>
												<div class="input-group">
													<div class="form-control"><input type="text" name="delegate_to[]" title="Delegate To" /></div>
												</div>
                                            </div>

									 </div>
									 <div class="center">
											 <div class="form-group">
												   <label>Email Id</label>
													<div class="input-group">
														<div class="form-control">
														<input type="text" name="delegate_email[]"/>
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
                     </div>
                     <!-- autometic delegates end -->

                </div>
                <div class="clear"></div>
                        
                                                           

            </div><!-- container end -->
            
            <div class="footer">
                
                    <div class="col-md-12">
                    <button type="submit" class="btn-primary btn">Add</button>
                                   <!-- <a href="#">Add</a> -->
                                   <a href="#">Reset</a>
                    </div>
                
            </div><!-- footer end -->

    </div>
    </form>
    <!-- popup ends --> 
         
     <br /><br /><br />
    <div style="height:50px;"></div>
	
	    <script type="text/javascript"> 
				$(function() {
					$('a#plus').click(function(e) {
						e.preventDefault();
						var lnth = $('#auto-del').length; 
					 $('#auto-del').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input type="text" title="Delegate To" name="delegate_to[] /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input type="text" name="delegate_email[]"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
					  
					});
				});
					function setValues(id){     
							document.getElementById("rm"+id).remove();
					}
		</script>
    
	
<?php $this->load->view('footer'); ?>

	 <!-- <script>
		  
		function newDoc(id) {
			//console.log("id ====" ,id);
			var url = "<?php echo base_url(); ?>Quickwork/daillynote_view/"+id;
			window.location.assign(url);
		}
	</script>  -->
</body>
</html>
