    <?php $this->load->view('head'); ?> 
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
    <script>
      
function newDoc(id) {
    //console.log("id ====" ,id);
    var url = "<?php echo base_url(); ?>Quickwork/daillynote_view/"+id;
    window.location.assign(url);
}
</script> 
    <?php $this->load->view('footer'); ?>
	
	
	