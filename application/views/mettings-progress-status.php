<?php
/*
@Meeting in progress is the status report which is a detailed sheet, linked to the Index Meeting in Progress.
@the data are showing from 2 different tables using join query and also using the count function we are counting the number of agenda meeting.
@we are using foreach to get multiple data  from database.
@agenda of meeting: agenda name

*/
?>

  <?php $this->load->view('head'); ?> 
  <?php $this->load->view('header'); ?> 
    <!-- user View design page start -->
	
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Users</p></div>
    <div class="col-md-12 all-mettings">
            <div class="container">
                <h2 class="heading">Meeting Status</h2>
            </div>
        <div class="Mettings-View-index-panel" >
             
               <div class="table-res style-4">
                   <table  class="mettings-table-second" id="mettings-table" style="width:100%;">
                       <thead>
                           <tr>
							               <th>SR No.</th>
							               <th>Ajenda of Meeting</th>
							               <th>Previews Meetings Date</th>
							               <th>Next Meeting Date</th>
						               </tr>
                       </thead>
                       <tbody>
					               <?php   $i=1;
					                   foreach($list as $get){?>
						               <tr onclick ='newDoc(<?php echo $get->index_meeting_id; ?>)'>
								            <td><?php echo $i++;?></td>
								            <td><?php echo $get->agenda_name;?></td>
								            <td><?php echo $get->date_of_meeting;?></td>
								            <td><?php echo $get->index_meeting_next_date;?></td>
								           
								           
                                       </tr>
					               <?php } ?>
                       </tbody>
                   </table>

               </div>
              <div class='clear'></div>
              <br></br>
              <div class="pagination">
                   <?php echo $links; ?>
              </div>
        </div>
    </div>
	
 
<script>
  function newDoc(id) {
   // console.log("id ====" ,id);
    var url = "<?php echo base_url(); ?>indexmeeting/metting_info/"+id;
    window.location.assign(url);
}
</script>
	<?php $this->load->view('footer'); ?>
	
 
