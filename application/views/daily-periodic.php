 <?php $this->load->view('head'); ?>
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
	<div class="clear"></div>
	<div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Periodic task</p></div>

      <div class="dailly-notes-index-panel">
                  <div class="add-task-view-button">
                      <a href="<?php echo base_url('Dailyperiodic/add'); ?>" > <span class="fa fa-plus"> </span></a>
                  </div>
      <div class="dailly-task2 "><!-- monthly periodic panel start -->	
              <div id='calendar'></div>
              <br/><br /><br /><br />

      </div><!-- right deshbrad end -->
      </div>
        
       <div style="height:50px;"></div>
      <?php $this->load->view('footer'); ?>

    </div><!-- Main Dashbrad end -->

    <!-- don-t change -->
    <div style="height:50px;"></div>
    
		<script>
      
			function daily_status(id) {
			   // console.log("id ====" ,id);
				var url = "<?php echo base_url(); ?>Dailyperiodic/listpage/"+id;
				window.location.assign(url);
			}
		</script>

           <script>

             $(document).ready(function () {

             $('#calendar').fullCalendar({
             header: {
             left: 'prev,next today',
             center: 'title',
             right: 'month,agendaWeek,agendaDay,listWeek'
             },
             defaultDate: '2018-04-12',
             navLinks: true, // can click day/week names to navigate views
             eventMouseover: function(calEvent, jsEvent) {
             var tooltip = '<div class="tooltipevent" >
               <h2 class="title">Title</h2>
               <h2 > ' + calEvent.title + '</h2>
               <p> Start Time : '+  calEvent.start  + '</p>
             </div>';
             var $tooltip = $(tooltip).appendTo('body');

             $(this).mouseover(function(e) {
             $(this).css('z-index', 10000);
             $tooltip.fadeIn('500');
             $tooltip.fadeTo('10', 1.9);
             }).mousemove(function(e) {
             $tooltip.css('top', e.pageY + 10);
             $tooltip.css('left', e.pageX + 20);
             });
             },
             weekNumbers: true,
             weekNumbersWithinDays: true,
             weekNumberCalculation: 'ISO',

             editable: true,
             eventLimit: true, // allow "more" link when too many events


             events: [
             <?php foreach($fetch as $daily_periodic){ ?>
						
						{
                           id:1,
						   title :'<?php echo $daily_periodic->daily_periodic_task ?>',
						   start: '<?php echo $daily_periodic->daily_periodic_start_date ?>'+'T'+'<?php echo $daily_periodic->daily_periodic_time ?>',
						   url :  "<?php echo base_url(); ?>Dailyperiodic/show/"+(<?php echo $daily_periodic->daily_periodic_id; ?>),
						},	
                         
						<?php } ?>
                        
                       ]
                   });

               });

</script>
</body>
</html>
