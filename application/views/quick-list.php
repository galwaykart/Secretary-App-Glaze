<!doctype html>
<html>
	<?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
    <?php $this->load->view('header'); ?>

    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Quick Work</p></div>
    <div class="dailly-notes-index-panel">
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
                                            echo "<tr onclick='newDoc($r->id)'>"; 
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
                            </tbody>
                        </table>
                    </div>

            </div>
        <div class="clear"></div>
        <div class="col-md-12">
            <br />
                <a href="#" id="addnotes"><span class="fa fa-plus" >&nbsp;Add</span></a>
        </div>
    </div><!-- dailly index panel end -->
  
    <!-- popup start -->
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
                                            <div class="form-control"><input type="date" title="Date" /></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Task :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" title="Task" /></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Delegate To</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" title="Delegate To" /></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Target Date</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" title="Target Date" /></div>
                                        </div>
                          </div>
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                    <div class="col-md-6">
                           <div class="form-group">
                                       <label>Priority</label>
                                        <div class="input-group">
                                            <div class="form-control"><select>
                                                    <option>Select Priority</option>
                                                </select></div>
                                        </div>
                          </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Remark</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <input type="text" placeholder="Remarks" />
                                            </div>
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
                                            <div class="form-control"><input type="text" title="Status" /></div>
                                        </div>
                           </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Active/Inactive</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select><option value='Yes'>Yes</option><option value='No'>No</option></select>
                                            </div>
                                        </div>
                           </div>
                    </div>
                </div>
                <div class="clear"></div>
                        
                                                           

            </div><!-- container end -->
            <div class="footer">
                
                    <div class="col-md-12">
                                   <a href="#">Add</a>
                                   <a href="#">Reset</a>
                    </div>
                
            </div><!-- footer end -->

    </div>
    <!-- popup ends --> 
         <!-- popup start -->
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
</body>
</html>
