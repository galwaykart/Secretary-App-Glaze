<?php
/*
@the data are showing from 2 different tables using join query and also using the count function we are counting the number of agenda meeting.
@we are using foreach to get multiple data  from database.
@Previous Date – To be used as the last date of the meeting. Fed manually by the user.
In case of first meeting - Previous Date = NA
@Next Date – To be manually fed by the user
@Number of the Meeting – count using the the agenda
@Agenda – The column should consist the provision of manual feeding of the text
*/
?>

	<?php $this->load->view('head'); ?>
		<?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Users</p></div>
    <div class="col-md-12 all-mettings">
<!--message showing code-->	
<?php if($this->session->flashdata('msg')): ?>
 <p style="color:red;"><?php echo $this->session->flashdata('msg'); ?></p>
<?php endif; ?>

            <div class="container">
                <h2 class="heading">All Meeting</h2>
            </div>
        <div class="Mettings-View-index-panel">
             
               <div class="table-res style-4">
                   <table id="mettings-table">
                       <thead>
                           <tr>
							   <th>Sr No</th>
							   <th>Ajenda</th>
							   <th>No of Meeting</th>
							   <th>Next Meeting Date</th>
							   <th>Meeting Called By (Name & Department)</th>
							   <th>Remarks</th>
							   <th>Active/Inactive</th>
						   </tr>
                       </thead>
                       <tbody>
					   <?php //print_r($meeting); ?>
					   <?php  $i=1;
					     foreach($meeting as $arr){?>
						 <!--newDoc is a function to passed the Id from the database-->
                         <tr onclick='newDoc(<?php echo $arr->agenda_id; ?>)'>
							 <td><?php echo $i++;?></td>
							 <td><?php echo $arr->agenda_name;?></td>
							 <td><?php echo $arr->counter;?></td>
							 <td><?php echo $arr->index_meeting_next_date;?></td>
							 <td><?php echo $arr->meeting_called_by?></td>
							 <td></td>
							 <td></td>
							 <td></td>

                         </tr>
					   <?php } ?>
                       </tbody>
                   </table>

               </div>
            <div class="col-md-12">
			<br>
               <a href="<?php echo site_url('indexmeeting/metting_info/'); ?>" class="btn" id="addmeeingsbtn"><span class="fa fa-plus" ></span>&nbsp;Add</a>
           
        </div>
		<div class="clear"></div>
		<br><br>
		<div class="pagination">
	    <?php echo $links; ?>
    
		 <script>
      
			function newDoc(id) {
			   // console.log("id ====" ,id);
				var url = "<?php echo base_url(); ?>indexmeeting/mettings_status/"+id;
				window.location.assign(url);
			}
			</script>
  	
	</div>
			
    </div> 
	
	
	 </div><div style="height:80px;"></div>
	 <div class="clear"></div>
	 
<?php $this->load->view('footer'); ?>
	
		

