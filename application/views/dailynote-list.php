 <?php $this->load->view('head'); ?>
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
	<div class="clear"></div>
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Notes</p></div>
	<div class="container">
                <h2 class="headingDaiilyNotes">Dailly Notes</h2>
    </div>
    <div class="dailly-notes-index-panel">
	
    <?php if($message){echo $message;} ?> 
            <div class="table-res">
                    <div class="table-view">
                        <table>
                            <thead>
                                <tr><th>Sr No</th><th>Date of Entry</th><th>Task</th><th>Task Type</th><th>Target Date</th><th>Department</th><th>Delegate To</th><th>Status</th><th>Remark</th><th>Data Send to other sheet</th></tr>
                            </thead>
                            <tbody>
                              <?php 
                              if($records){
                              $i=1;
                                          foreach($records as $r) { 
                                            echo "<tr onclick='newDoc($r->daily_notes_id)'>"; 
                                            echo "<td>".$i++."</td>"; 
                                            echo "<td>".$r->task_start_date."</td>"; 
                                            echo "<td>".$r->task_name."</td>"; 
                                            echo "<td>".$r->task_type."</td>"; 
                                            echo "<td>".$r->task_target_date."</td>"; 
                                            echo "<td>".$r->department."</td>"; 
                                            echo "<td>".$r->delegated."</td>"; 
                                            echo "<td>"."Active"."</td>"; 
                                            echo "<td>"."No Remark"."</td>"; 
                                            echo "<td>"."NO"."</td>"; 
                                            
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
					<div class="clear"></div>
            </div>
            <div class="col-md-12">
                    <a href="<?php echo base_url('Daillynote/daillynote_view/'); ?>" class="btn" id="addmeeingsbtn"><span class="fa fa-plus" ></span>&nbsp;Add</a>
                    </div>
                    <div style="height:80px;"></div>
					<div class="clear"></div>
					<div class="pagination">
                      <p><?php echo $links; ?></p>					
					  <script>
								 
							function newDoc(id) {
								//console.log("id ====" ,id);
								var url = "<?php echo base_url(); ?>Daillynote/daillynote_view/"+id;
								window.location.assign(url);
							}
				     </script>
					</div>
    </div><!-- dailly index panel end --> 
	
     <br /><br /><br /> 

            <div id="container">

    <div id="body">



       

    </div>


    <div style="height:50px;"></div>
      <?php $this->load->view('footer'); ?>


