<!doctype html>
<html>


  <?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
  <?php $this->load->view('header'); ?> 
    <!-- user View design page start -->
	
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Users</p></div>
    <div class="col-md-12 all-mettings">
            <div class="container">
                <h2 class="heading">Meeting Status</h2>
            </div>
        <div class="Mettings-View-index-panel">
             
               <div class="table-res">
                   <table id="mettings-table">
                       <thead>
                           <tr>
							   <th>SR No.</th>
							   <th>Ajenda of Meeting</th>
							   <th>Previous Meetings Date</th>
							   <th>Next Meeting Date</th>
							   <th>Participants</th>
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
								<td> </td>
								<td> </td>
                           </tr>
					   <?php } ?>
                       </tbody>
                   </table>

               </div>
        </div>
    </div>
   <?php echo $links; ?>

     <br/><br/><br/>
    <div style="height:50px;"></div> 
	<?php $this->load->view('footer'); ?>
	
<script>
  function newDoc(id) {
   // console.log("id ====" ,id);
    var url = "<?php echo base_url(); ?>indexmeeting/metting_info/"+id;
    window.location.assign(url);
}
</script>
</body>
</html>
