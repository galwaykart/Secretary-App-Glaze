<!doctype html>
<html>
<head>

 <?php $this->load->view('head'); ?>
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
	<div class="clear"></div>
	<div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Perodic Task View</p></div>
  <div class="container"><h2 class="headingDaiilyNotes"> Dailly Perodic Task Status</h2></div>
  <div class="dailly-notes-index-panel">

    <form method="POST" action = ""
      <?php if($fetch){echo base_url()."Dailyperiodic/add_daily_periodic/".$fetch['data1'][0]->daily_periodic_id;}else{echo base_url()."Dailyperiodic/add_daily_periodic/";} ?>" >
      <div class="container-5">
        <div class="col-md-12">
        
          <div class="col-md-12">
            <p>
              Task Name : <span id="projectname">
                <?php if($fetch['data1']){echo $fetch['data1'][0]->daily_periodic_task;} ?>
              </span>
            </p>
          </div>
          <div class="clear"></div>
          <div class="col-md-3">
            <div class="form-group">
              <label>End Date</label>

              <div class="input-group">
                <div class="input-addon">
                  <span class="fa fa-calendar" ></span>
                </div>
                <div class="form-control">
                  <input type="date" title="End date" value=""<?php if($fetch['data1']){ if($fetch['data1'][0]->daily_periodic_status==0){ echo $fetch['data1'][0]->daily_periodic_end_date; } }  ?>"  />
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Supervised By</label>

              <div class="input-group">
                <div class="input-addon">
                  <span class="fa fa-user" ></span>
                </div>
                <div class="form-control">
                  <input type="text" required="" title="Supervised by" name="supervise_by" value=""<?php if($fetch['data1']){ echo $fetch['data1'][0]->daliy_periodic_supervise; } else{echo set_value('supervise_by');} ?>" />
                </div>
                <?php //echo form_error('supervise_by', '<span class="form_error">', '</span>'); ?>
              </div>
            </div>

          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Status</label>
              <div class="input-group">
                <div class="input-addon">
                  <span class="fa fa-align-center"></span>
                </div>
                <div class="form-control">
                  <select name="status"
                    <?php if($fetch['data1']) { if($fetch['data1'][0]->daily_periodic_status=='0'){ echo "disabled"; } } ?> >
                    <option value="1"
                      <?php if($fetch['data1']) { if($fetch['data1'][0]->daily_periodic_status == "1"){ echo "selected"; } } ?>>Active
                    </option>
                    <option value="0"
                      <?php if($fetch['data1']) { if($fetch['data1'][0]->daily_periodic_status == "0"){ echo "selected"; } } ?>>Inactive
                    </option>
                  </select>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- col-md-12 end -->
        <div class="clear"></div>
        <div class="col-md-12 ">
          <div class=" margin-top"  style="position:relative;">
            <a href="#" class="ad btn-primary btn participater right-btn" id="add" title="Add new Delegate">
              <span class="fa fa-plus" ></span>
            </a>
          </div>
        </div>
        <div class="clear"></div>
        <div class="col-md-12" id="delete">
          <div  class="auto-del">
            <div class="col-md-3">
              <div class="form-group">
                <label>Delegate To</label>
                <div class="input-group">
                  <div class="input-addon">
                    <span class="fa  fa-share" ></span>
                  </div>
                  <div class="form-control">
                    <input type="text" placeholder="Delegate Name" required="" id="delegate_name" title="Delegate To" name="delegate_to[]" value=""<?php if($fetch['data2']){ echo $fetch['data2'][0]->daily_periodic_delegates_name; } ?>" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Email Id</label>
                <div class="input-group">
                  <div class="input-addon">
                    <span class="fa fa-envelope-o" ></span>
                  </div>
                  <div class="form-control">
                    <input type="text" placeholder="Delegate Email" name="email[]" required="" id="delegate_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value=""<?php if($fetch['data2']){ echo $fetch['data2'][0]->daily_periodic_delegates_email; } ?>" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Phone Number</label>
                <div class="input-group">
                  <div class="input-addon">
                    <span class="fa fa-phone" ></span>
                  </div>
                  <div class="form-control">
                    <input type="text" placeholder="Phone Number" id="phone" name="phone[]" required="" value=""<?php if($fetch['data2']){ echo $fetch['data2'][0]->daily_periodic_delegates_phone_number; } ?>" />
                  </div>
                </div>
              </div>
            </div>
            
          </div>


         

          <?php  $j = 0;
					if($fetch){									
						foreach($fetch['data2'] as $record){	 
									//print_r($list['data2']);
						 if($j != '0'){  ?>
          <div class="col-md-12 " id="rm"
            <?php echo $j; ?>" >
            <div  class="auto-del">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Delegate To</label>
                  <div class="input-group">
                    <div class="input-addon">
                      <span class="fa  fa-share" ></span>
                    </div>
                    <div class="form-control">
                      <input type="text" placeholder="Delegate Name" required="" id="delegate_name" title="Delegate To" name="delegate_to[]" value=""<?php if($record){ echo $record->daily_periodic_delegates_name; } ?>" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Email Id</label>
                  <div class="input-group">
                    <div class="input-addon">
                      <span class="fa fa-envelope-o" ></span>
                    </div>
                    <div class="form-control">
                      <input type="text" placeholder="Delegate Email" name="email[]" required="" id="delegate_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value=""<?php if($record){ echo $record->daily_periodic_delegates_email; } ?>" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Phone Number</label>
                  <div class="input-group">
                    <div class="input-addon">
                      <span class="fa fa-phone" ></span>
                    </div>
                    <div class="form-control">
                      <input type="text" placeholder="Phone Number" id="phone" name="phone[]" required="" value=""<?php if($record){ echo $record->daily_periodic_delegates_phone_number; } ?>" />
                    </div>
                  </div>
                </div>
              </div>
              <div class=" ">
                <div class=" text-right position">
                  <a class="right-btn-minus new-minus-daiily-task-new" href="#" onclick="setValues("
                    <?php echo $j; ?>)" ><span class="fa fa-minus " ></span>
                  </a>
                </div>
              </div>
            </div>
            <?php } $j++;  } }  ?>
          </div>
        </div>
       
      </div><!-- container 5 end -->
      <div class="clear"></div>
      <div class="delegatesheet-view ">
        <div class="table-res margin-top">
          <table >
            <thead>
              <tr>
                <th>End Date</th>
                <th>Status</th>
                <th>Remark</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0;
									if($fetch['data1']){
										foreach($fetch['data1'] as $arr){	
									?>
              <tr>
                <td>
                  <?php if($arr->daily_periodic_status==0){ echo $arr->daily_periodic_end_date; }?>
                </td>
                <td>
                  <?php if($arr->daily_periodic_status==1){echo "Active";}else{echo "Inactive";} ?>
                </td>
                <td>
                  <?php echo $arr->daily_periodic_remark; ?>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12 btn-group" style="text-align:center">

        <button type="submit" class="btn-primary btn">Submit</button>
      </div>
      <div class="clear"></div>
    </form>
  </div>
        
   
 <div style="height:50px;"></div>
      <?php $this->load->view('footer'); ?>

	 
		 	<script type="text/javascript"> 
				$(function() {
					$('a#add').click(function(e) {
						e.preventDefault();
						var lnth1 = $('#delete .auto-del').length; 
					 $('#delete').append('<div class="clear"><div class="auto-del"></div></div><div id="rm'+lnth1+'" class="auto-del1"><div class="col-md-3"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="input-addon"><span class="fa fa-share" ></span></div><div class="form-control"><input type="text" title="Delegate To" placeholder="Delegate To" name="delegate_to[]" required/></div></div></div></div><div class="col-md-3" ><div class="form-group"><label>Email</label><div class="input-group"><div class="input-addon"><span class="fa fa-envelope-o" ></span></div><div class="form-control"><input type="text" title="Delegate Email" placeholder="Delegate Email" name="email[]" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></div></div></div></div><div class="col-md-3"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="input-addon"><span class="fa fa-phone" ></span></div><div class="form-control"><input type="text" placeholder="Phone Number" id="phone" name="phone[]" required /></div></div></div></div><div class=" " style="position:relative"><div class="" ><a class="right-btn-minus " href="#"  onclick="setValues('+ lnth1 + ')"><span class="fa fa-minus " ></span></a></div></div></div>');
					  
					});
				});
					function setValues(id){     
						document.getElementById("rm"+id).remove();
					}
		    </script>
	 
	 
	 
   
</body>
</html>
