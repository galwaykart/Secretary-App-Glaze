 <?php $this->load->view('head'); ?>
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
	<div class="clear"></div>
	<div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Periodic task</p></div>

                                <div class="dailly-notes-index-panel">
                                            <div class="add-task-view-button">
                                                <a href="<?php echo base_url('Dailyperiodic/add'); ?>" > <span class="fa fa-plus">&nbsp;Add </span></a>
                                            </div>
                                <div class="dailly-task "><!-- monthly periodic panel start -->	
                                        <div id='calendar'></div>
                                        <br /><br /><br /><br />

                                </div><!-- right deshbrad end -->
                                </div>
                                
            
 
       <div style="height:50px;"></div>
      <?php $this->load->view('footer'); ?>

    </div><!-- Main Dashbrad end -->
   

    <!-- don-t change -->
    <div style="height:50px;"></div>
    <footer id="footer">
        <p>&copy; Copyright By Glaze India Pvt. Ltd.</p>
    </footer>



     <!-- globle header for comman end --> 
    <script>
        $(document).ready(function () {
            var count = 0;
            var count2 = 0;


            $('#sec-header #toggle-btn-box span#bar').click(function () {
                if ($(window).width() >= 769) {
                    if (count % 2 == 0) { $('#aside').css('display', 'none'); $('.main-area-dashboard #left').css('width', '0%'); $('.main-area-dashboard #right').css('width', '100%'); }
                    else { $('#aside').css('display', 'block'); $('.main-area-dashboard #left').css('width', '15%'); $('.main-area-dashboard #right').css('width', '85%'); }
                    count++;
                }
                else {

                    if (count2 % 2 == 0) { $('.mobile-menu-bar').css('display', 'block'); }
                    else { $('.mobile-menu-bar').css('display', 'none'); }
                    count2++;
                }

            });

            $('.log-popup').on('click', function () {
                $('.log-up-body').toggle('slow');

            });




            // window resize option
            $(window).bind('resize', function () {
                if ($(window).width() > 768) {
                    $('#aside').css('display', 'block'); $('.mobile-menu-bar').css('display', 'none');
                    $('.main-area-dashboard #right').css('width', '85%');
                    $('.main-area-dashboard #left').css('width', '15%');
                }
                else {
                    $('#aside').css('display', 'none');
                    $('.main-area-dashboard #right').css('width', '100%'); $('.mobile-menu-bar').css('display', 'none');
                }
            });

            $('.add-task-view-button a').on('click', function () { alert()});



        });

    </script>
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

                       weekNumbers: true,
                       weekNumbersWithinDays: true,
                       weekNumberCalculation: 'ISO',

                       editable: true,
                       eventLimit: true, // allow "more" link when too many events
					   eventRender: function(event, element) {
						if(event.id == 1) {
                          element.css('background-color', 'rgb(206, 199, 127)').css('border','1px solid rgb(183, 176, 106)').css('color','black');
   						} 
						},
			
                       events: [
					   <?php foreach($fetch as $daily_periodic){ ?>
						
						{
                           id:1,
						   title :'<?php echo $daily_periodic->daily_periodic_task ?>',
						   start: '<?php echo $daily_periodic->daily_periodic_start_date ?>'+'T'+'<?php echo $daily_periodic->daily_periodic_time ?>',
						   url :  "<?php echo base_url(); ?>Dailyperiodic/show/"+(<?php echo $daily_periodic->daily_periodic_id; ?>),
						},	
                         
						<?php } ?>
                         // {
                             // title: 'Long Event',
                             // start: '2018-02-07',
                             // end: '2018-02-10'
                         // },
                         // {
                             // id: 999,
                             // title: 'Repeating Event',
                             // start: '2018-02-09T16:00:00'
                         // },
                         // {
                             // id: 999,
                             // title: 'Repeating Event',
                             // start: '2018-02-16T16:00:00'
                         // },
                         // {
                             // title: 'Conference',
                             // start: '2018-02-11',
                             // end: '2018-02-13'
                         // },
                         // {
                             // title: 'Meeting',
                             // start: '2018-02-12T10:30:00',
                             // end: '2018-02-12T12:30:00'
                         // },
                         // {
                             // title: 'Lunch',
                             // start: '2018-02-12T12:00:00'
                         // },
                         // {
                             // title: 'Meeting',
                             // start: '2018-02-12T14:30:00'
                         // },
                         // {
                             // title: 'Happy Hour',
                             // start: '2018-02-12T17:30:00'
                         // },
                         // {
                             // title: 'Dinner',
                             // start: '2018-02-12T20:00:00'
                         // },
                         // {
                             // title: 'Birthday Party',
                             // start: '2018-02-13T07:00:00'
                         // },
                         // {
                             // title: 'Click View Task',
                             // url: 'daiily-task-view-list.html',
                             // start: '2018-02-28'
                         // }
                       ]
                   });

               });

</script>
</body>
</html>
