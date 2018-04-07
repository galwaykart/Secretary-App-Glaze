 <?php $this->load->view('head'); ?> 
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Project Delegation Sheet</p></div>
	<div class="container">
                <h2 class="headingDaiilyNotes">Project Delegation Sheet</h2>
   </div>
    <div class="dailly-notes-index-panel">
    <?php
          if($message){print_r($message);} 
         ?>
            <div class="table-res style-4">
                    <div class="table-view " style="width:1376px">
                        <table>
                            <thead>
                              <tr>
                                  <th>Project No</th>
                                  <th>Project Name</th>
                                  <th>Date</th>
                                  <th>Department</th>
                                  <th>Outsoursing</th>
                                  <!-- <th>Delegate To</th> -->
                                  <th>Followup form</th>
                                  <th>Target Date</th>
                                  <!-- <th>Extended Date</th> -->
                                  <!-- <th>Old Status Date</th> -->
                                  <!-- <th>New Followup date</th> -->
                                  <th>Remarks</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                              if($records){
                              $i=1;
                                          foreach($records as $r) { 
                                            echo "<tr onclick='newDoc($r->project_delegation_id)'>"; 
                                            echo "<td>".$i++."</td>"; 
                                            echo "<td>".$r->project_delegation_project."</td>"; 
                                            echo "<td>".$r->project_delegation_date."</td>"; 
                                            echo "<td>".$r->project_delegation_department."</td>"; 
                                            if($r->project_delegation_outsourcing == 0){
                                                echo "<td>OutSource</td>";
                                            }else{
                                                echo "<td>Inhouse</td>";
                                            }
                                            
                                            // echo "<td>"."yuhi achanak kisi ko bhi"."</td>"; 
                                            echo "<td>".$r->project_delegation_followup_date."</td>"; 
                                            echo "<td>".$r->project_delegation_target_date."</td>"; 
                                            // echo "<td>"."NA"."</td>"; 
                                            // echo "<td>"."NA"."</td>"; 
                                            // echo "<td>"."NA"."</td>";
                                            echo "<td>".$r->project_delegation_remark."</td>";
                                            
                                           
                                            
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
						<br />
							<a href="#" id="addnotes"><span class="fa fa-plus" >&nbsp;Add</span></a>
					</div>
				    <div class="clear"></div>
        <div class="clear"></div>
      
    </div><!-- dailly index panel end -->
    <!-- popup start -->

      <!-- popup start -->
    <form method="POST" action="<?php echo base_url();?>Projectdelegation/req">                                    
          <div class="popup">
            <div class="header">
                <h3>Project Delegation Sheet - <span id="work">Create New</span></h3>
                <span id="close-popup"  title="Close">&times;</span>
            </div>
            <div class="content"><!-- content start -->
                <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" title="Date" required name="start_date"/></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Project</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" required title="Project" name="project_name"/></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                  <div class="col-md-12">
                   
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Department</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" required title="Department" name="department"/></div>
                                        </div>
                          </div>
                        
                    </div>
                      <div class="col-md-6">
                           <div class="form-group">
                                       <label>OutSourcing</label>
                                        <div class="input-group">
                                            <div class="form-control"><select name="outsource" required>
                                                    <option>Select OutSourcing</option>
                                                    <option value="1">Inhouse</option>
                                                    <option value="0">OutSource</option>
                                                </select></div>
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
                                            <div class="form-control"><input type="date" required name="target_date" title="Target Date" /></div>
                                        </div>
                          </div>
                        
                    </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                       <label>Followup Date</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" required name="followup_date" title="Followup date" /></div>
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
                

                     <!-- autometic delegates start -->
<div id ="refresh_popup">
    <div id="auto-del"> 
        <div class="auto-del">
            <div class="left">
                <div class="form-group">
                <label>Delegate To</label>
                    <div class="input-group">
                        <div class="form-control">
                        <input type="text" title="Delegate To" name="delegate_to[]" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="center">
                <div class="form-group">
                <label>Email Id</label>
                    <div class="input-group">
                        <div class="form-control">
                        <input type="text"  name="delegate_email[]" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
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
</div>
                     <!-- autometic delegates end -->

                </div>
				<div class="clear"></div>
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
                <div class="clear"></div>


</form>


    <!-- popup end -->
    <script type="text/javascript"> 
        $(function() {
        $('a#plus').click(function(e) {
        e.preventDefault();
        var lnth = $('#auto-del .auto-del').length; 
        console.log(lnth);
        $('#auto-del').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text" name="delegate_email[]"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');

        });
        });
        function setValues(id){     
        document.getElementById("rm"+id).remove();
        }
    </script>
       
     <br /><br /><br />
 

    <div id="container">
       <div id="body">
          <p><?php echo $links; ?></p>
       </div>
    </div>


    <script>
      
function newDoc(id) {
    //console.log("id ====" ,id);
    var url = "<?php echo base_url(); ?>Projectdelegation/view/"+id;
    window.location.assign(url);
}
</script>
    
      <?php $this->load->view('footer'); ?>

   
