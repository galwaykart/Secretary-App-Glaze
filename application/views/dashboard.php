<?php 
	
	// echo "<pre>";
	// print_r($dash_data);
    // echo "</pre>";
    //$Start_date =array();

//     $date = new DateTime('2006-12-12');
// $date->modify('+1 year');
// echo $date->format('Y-m-d');

    // $end_date = explode('-', $dash_data['yearly_periodic'][1]->yearly_periodic_end_date);
    //  $Start_date = explode('-', $dash_data['yearly_periodic'][1]->yearly_periodic_start_date);
    //  $year_diff = $end_date[0]  - $Start_date[0];
    // //print_r($year_diff);
    // $start_new_date = array();
    // $new_start_date = $dash_data['yearly_periodic'][1]->yearly_periodic_start_date;
    // while($new_start_date <= $dash_data['yearly_periodic'][1]->yearly_periodic_end_date){
    //     array_push($start_new_date , $new_start_date);
    //     $n_start_d = new DateTime($new_start_date);
    //     $n_start_d->modify('+1 year');
    //     $new_start_date = $n_start_d->format('Y-m-d');
        

    // }
    // print_r($start_new_date);

    
    
	
?> 


    <?php $this->load->view('head'); ?> 
	<?php $this->load->view('header');?>

      <div class="col-md-12 heading-tag">
                        <p><span class="fa fa-dashboard" ></span>&nbsp;<span id="dashbiar-name">Dashboard</span></p>
                        </div>

                        <!-- body tag diffrent for all -->
                        <div class="main-area-body-box"> 
                                        <div class="col-md-12">
                                               <div class="col-md-new-2">
                                                                       <div class="box-data-for-2">
                                                                           <div class="container1 ">
                                                                                        <div class="left-pop-tag"> <span class="fa fa-american-sign-language-interpreting" ></span></div>
                                                                                        <div class="right-pop-tag">
                                                                                            <h2>Mettings&nbsp; <span id=""><?php echo($dash_data['count_index_meeting'][0]->total);?></span></h2>
                                                                                            <p>Today Metting <span id=""><?php echo($dash_data['index_meeting']["count"]);?></span></p>
                                                                                        </div>
                                                                            </div>
                                                                       </div>
                                              </div>
                                              


                                            
                                             <div class="col-md-new-2">
                                                                       <div class="box-data-for-2">
                                                                           <div class="container1 ">
                                                                                        <div class="left-pop-tag"> <span class="fa fa-file-text-o" ></span></div>
                                                                                        <div class="right-pop-tag">
                                                                                            <h2>Daily Notes&nbsp;<span id="Span1"><?php echo($dash_data['count_daily_notes'][0]->total);?></span></h2>
                                                                                            <p>Today Daily Notes <span id="Span2"><?php echo($dash_data['daily_notes']["count"]);?> </span></p>
                                                                                        </div>
                                                                            </div>
                                                                       </div>
                                              </div>
                                             
                                             <div class="col-md-new-2">
                                                                       <div class="box-data-for-2">
                                                                           <div class="container1 ">
                                                                                        <div class="left-pop-tag"> <span class="fa fa-edit" ></span></div>
                                                                                        <div class="right-pop-tag">
                                                                                            <h2>Quick Work&nbsp; <span id="Span3"><?php echo($dash_data['count_quickworks'][0]->total);?></span></h2>
                                                                                            <p>Today Quick Work <span id="Span4"><?php echo($dash_data['quick_work'][0]->total_works);?></span></p>
                                                                                        </div>
                                                                            </div>
                                                                       </div>
                                              </div>
                                              
                                             <div class="col-md-new-2">
                                                                       <div class="box-data-for-2">
                                                                           <div class="container1 ">
                                                                                        <div class="left-pop-tag"> <span class="fa fa-copy" ></span></div>
                                                                                        <div class="right-pop-tag">
                                                                                            <h2>Delegation Sheet&nbsp;<span id="Span5"><?php echo($dash_data['count_projectDelegation'][0]->total);?></span></h2>
                                                                                            <p>Today Delegation Task <span id="Span6"><?php echo($dash_data['project_delegation'][0]->total_projects);?></span></p>
                                                                                        </div>
                                                                            </div>
                                                                       </div>
                                              </div>
                                             
                                             <div class="col-md-new-2">
                                                                       <div class="box-data-for-2">
                                                                           <div class="container1 ">
                                                                                        <div class="left-pop-tag"> <span class="fa fa-coffee" ></span></div>
                                                                                        <div class="right-pop-tag">
                                                                                            <h2>Appoinment&nbsp;<span id="Span7"><?php echo($dash_data['count_appointment'][0]->total);?></span></h2>
                                                                                            <p>Today Appoinment <span id="Span8"><?php echo($dash_data['appointment']["count"]);?></span></p>
                                                                                        </div>
                                                                            </div>
                                                                       </div>
                                              </div>
                                             
                                             <div class="col-md-new-2">
                                                                       <div class="box-data-for-2">
                                                                           <div class="container1 ">
                                                                                        <div class="left-pop-tag"> <span class="fa fa-paw" ></span></div>
                                                                                        <div class="right-pop-tag">
                                                                                            <h2>Periodic Task&nbsp; <span id="Span9"><?php echo($dash_data['count_index_meeting'][0]->total);?></span></h2>
                                                                                            <p>Today Periodic Task <span id="Span10"><?php echo($dash_data['periodic']);?></span></p>
                                                                                        </div>
                                                                            </div>
                                                                       </div>
                                              </div>
                                              
                                             <div class="col-md-new-2">
                                                                       <div class="box-data-for-2">
                                                                           <div class="container1 ">
                                                                                        <div class="left-pop-tag"> <span class="fa fa-outdent" ></span></div>
                                                                                        <div class="right-pop-tag">
                                                                                            <h2>Reminder Sheet&nbsp; <span id="Span11"><?php echo($dash_data['count_index_meeting'][0]->total);?></span></h2>
                                                                                            <p>Today Reminder Task <span id="Span12"><?php echo($dash_data['daily_notes']["count"]);?></span></p>
                                                                                        </div>
                                                                            </div>
                                                                       </div>
                                              </div>
                                            <div class="col-md-new-2">
                                                                       <div class="box-data-for-2">
                                                                           <div class="container1 ">
                                                                                        <div class="left-pop-tag">
                                                                                           <div id="cl-weth"> </div>
                                                                                        </div>
                                                                                        <div class="right-pop-tag">
                                                                                            <h2>Wheather Forcast</h2>
                                                                                            <p><span id="temprature"></span></p>
                                                                                        </div>
                                                                            </div>
                                                                       </div>
                                              </div>
                                              

                                        </div>






                                            <div class="clear"></div>
                                            <div class="second-main-portion ">
                                                <div class="left">

                                                    <div class="header">
                                                        <p>Appoinment</p>
                                                        <div class="panel style-5">
                                                            <table class="app-tag">
                                                                    <tbody>
                                                                    <?php 
                            if($dash_data['appointment']){
                              $i=1;
                                          foreach($dash_data['appointment']['data'] as $r) { 
                                            echo "<tr>"; 
                                            echo "<td><span class='fa fa fa-coffee'></span></td>";
                                            echo "<td>today</td>"; 
                                            echo "<td>".$r->appointment_subject."</td>"; 
                                            //if($r->priority == 1){ echo "<td><span class='high'>Highest</span></td>"; }elseif($r->priority == 2){ echo "<td><span class='mid'>Medium</span></td>"; }else{echo "<td><span class='low'>Lowest</span></td>";}
                                            if($r->appointment_start_time >= date("Y-m-d H:m:s", time()) && $r->appointment_end_time >= date("Y-m-d H:m:s", time())){echo "<td><span class='next'>Next</span></td>";}
                                            elseif($r->appointment_start_time <= date("Y-m-d H:m:s", time()) && $r->appointment_end_time >= date("Y-m-d H:m:s", time())){echo "<td><span class='run'>Running</span></td>";}
                                            else{echo "<td><span class='mid'>Happened</span></td>";}
                                            // echo "<td><span class='next'>".date("Y/m/d H:m:s", time())."</span></td>";
                                            //echo "<td><span class='next'>Next</span></td>";
                                            echo "<tr>"; 
                                         } 
                                        }
                              ?>
                                                                        <!-- <tr>
                                                                            <td><span class="fa fa fa-coffee"></span></td>
                                                                            <td>today </td>
                                                                            <td>2</td>
                                                                            <td>Immideaiet effact</td>
                                                                            <td><span class="next">Next</span></td>
                                                                        </tr>
                                                                          <tr>
                                                                            <td><span class="fa fa fa-coffee"></span></td>
                                                                            <td>today </td>
                                                                            <td>2</td>
                                                                            <td>Immideaiet effact</td>
                                                                              <td><span class="run">Running</span></td>
                                                                        </tr>
                                                                          <tr>
                                                                            <td><span class="fa fa fa-coffee"></span></td>
                                                                            <td>today </td>
                                                                            <td>2</td>
                                                                            <td>Immideaiet effact</td>
                                                                              <td><span class="next">Next</span></td>
                                                                        </tr>
                                                                         <tr>
                                                                            <td><span class="fa fa fa-coffee"></span></td>
                                                                            <td>today </td>
                                                                            <td>2</td>
                                                                            <td>Immideaiet effact</td>
                                                                            <td><span class="run">Running</span></td>
                                                                        </tr>
                                                                         <tr>
                                                                            <td><span class="fa fa fa-coffee"></span></td>
                                                                            <td>today </td>
                                                                            <td>2</td>
                                                                            <td>Immideaiet effact</td>
                                                                             <td><span class="next">Next</span></td>
                                                                        </tr> -->
 
                                                                    </tbody>
                                                                </table>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="center">

                                                    <div class="header1">
                                                        <p>Daily Task</p>
                                                        <div class="panel style-5">

                                                                <table class="task-tag">
                                                                    <tbody>
                            <?php 
                            if($dash_data['daily_notes']){
                              $i=1;
                                          foreach($dash_data['daily_notes']['data'] as $r) { 
                                            echo "<tr>"; 
                                            echo "<td><span class='fa fa-paw'></span></td>";
                                            echo "<td>today</td>"; 
                                            echo "<td>".$r->task_name."</td>"; 
                                            if($r->priority == 1){ echo "<td><span class='high'>Highest</span></td>"; }elseif($r->priority == 2){ echo "<td><span class='mid'>Medium</span></td>"; }else{echo "<td><span class='low'>Lowest</span></td>";}
                                            echo "<tr>"; 
                                         } 
                                        }
                              ?>

                                                                    </tbody>
                                                                </table>
                               

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <div class="header2 ">
                                                        <p>Mettings</p>
                                                        <div class="panel style-5">
                                                            <!-- calander desig start -->
                                                             <div>

                                                                <table class="task-tag">
                                                                    <tbody>
                                                                    <?php 
                            if($dash_data['index_meeting']){
                              $i=1;
                                          foreach($dash_data['index_meeting']['data'] as $r) { 
                                            echo "<tr>"; 
                                            echo "<td><span class='fa fa-american-sign-language-interpreting'></span></td>";
                                            echo "<td>today</td>"; 
                                            echo "<td>".$r->agenda_name."</td>"; 
                                            if($r->index_meeting_start_time > date("H:m:s", time()) && $r->index_meeting_end_time > date("H:m:s", time())){echo "<td><span class='next'>Next</span></td>";}
                                            elseif($r->index_meeting_start_time <= date("H:m:s", time()) && $r->index_meeting_end_time >= date("H:m:s", time())){echo "<td><span class='run'>Running</span></td>";}
                                            else{echo "<td><span class='mid'>Happened</span></td>";}
                                            //if($r->priority == 1){ echo "<td><span class='high'>Highest</span></td>"; }elseif($r->priority == 2){ echo "<td><span class='mid'>Medium</span></td>"; }else{echo "<td><span class='low'>Lowest</span></td>";}
                                            //echo "<td><span class='run'>Running</span></td>";
                                             echo date("H:m:s" , time());
                                            echo "<tr>"; 
                                         } 
                                        }
                              ?>
                                                                        <!-- <tr>
                                                                            <td><span class="fa fa-american-sign-language-interpreting"></span></td>
                                                                            <td>today </td>
                                                                            <td>2</td>
                                                                            <td>Immideaiet effact</td>
                                                                            <td><span class="run">Running</span></td>
                                                                        </tr>
                                                                          <tr>
                                                                             <td><span class="fa fa-american-sign-language-interpreting"></span></td>
                                                                            <td>today </td>
                                                                            <td>2</td>
                                                                            <td>Immideaiet effact</td>
                                                                              <td><span class="comp">Cmpleted</span></td>
                                                                        </tr>
                                                                          <tr>
                                                                             <td><span class="fa fa-american-sign-language-interpreting"></span></td>
                                                                            <td>today </td>
                                                                            <td>2</td>
                                                                            <td>Immideaiet effact</td>
                                                                              <td><span class="comp">Cmpleted</span></td>
                                                                        </tr>
                                                                         <tr>
                                                                            <td><span class="fa fa-american-sign-language-interpreting"></span></td>
                                                                            <td>today </td>
                                                                            <td>2</td>
                                                                            <td>Immideaiet effact</td>
                                                                             <td><span class="next">Next</span></td>
                                                                        </tr>
                                                                         <tr>
                                                                            <td><span class="fa fa-american-sign-language-interpreting"></span></td>
                                                                            <td>today </td>
                                                                            <td>2</td>
                                                                            <td>Immideaiet effact</td>
                                                                             <td><span class="next">Next</span></td>
                                                                        </tr> -->
                                                                         
                                                                    </tbody>
                                                                </table>
                               

                                                        </div>

                                                            <!-- calender end -->
                                                        </div>
                                                    </div>

                                                </div>


                                             </div>
                                            <!-- quick work calender start -->
                                            <div class="clear"></div>
                                            <div class="col-md-12 quickwork-heading"><h2>Quick work</h2></div>
                                            <div class="clear"></div>
                                            <div class="col-md-12 quick-cal">
                                                    <div id='calendar'></div>
                                            </div>
                                             
                                            <!--  quick work calender end -->

        </div><!-- right deshbrad end -->

<<<<<<< HEAD
            <script>		
               $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2018-03-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-03-01',
        },
        {
          title: 'Long Event',
          start: '2018-03-07',
          end: '2018-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-03-11',
          end: '2018-03-13'
        },
        {
          title: 'Meeting',
          start: '2018-03-12T10:30:00',
          end: '2018-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-03-28'
        }
      ]
    });

  });

    </script>
	
=======




<script>
               $(document).ready(function() {

$('#calendar').fullCalendar({
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay,listWeek'
  },
  defaultDate: '2018-03-12',
  navLinks: true, // can click day/week names to navigate views
  editable: true,
  eventLimit: true, // allow "more" link when too many events
  events: [
    <?php foreach($dash_data['index_meeting']["all_data"] AS $indexMeeting){?>
        
    {      
        title: '<?php echo $indexMeeting->agenda_name ?>' +' (INDEX MEETINGS)',
        start: '<?php echo $indexMeeting->date_of_meeting ?>'+'T'+'<?php echo $indexMeeting->index_meeting_start_time ?>',
       
    },  
    <?php }   ?>
    <?php foreach($dash_data['total_quick_work'] AS $quickworks){?>
        
        {      
            title: '<?php echo $quickworks->task ?>' +' (QUICK WORKS)',
            start: '<?php echo $quickworks->date ?>',
           
        },  
        <?php }   ?>
        <?php foreach($dash_data['appointment']['all_data'] AS $appointments){?>
        
        {      
            title: '<?php echo $appointments->appointment_subject ?>' +' (Appointments)',
            start: '<?php echo $appointments->appointment_start_time ?>',
           
        },  
        <?php }   ?>

        <?php foreach($dash_data['total_project_delegation'] AS $projects){?>
        
        {      
            title: '<?php echo $projects->project_delegation_project ?>' +' (PROJECT DELEGATIONS)',
            start: '<?php echo $projects->project_delegation_date ?>',
           
        },  
        <?php }   ?>  

        <?php foreach($dash_data['yearly_periodic'] AS $yearly_periodic){
                // $end_date = explode('-', $yearly_periodic->yearly_periodic_end_date);
                // $Start_date = explode('-', $yearly_periodic->yearly_periodic_start_date);
                // $year_diff = $end_date[0]  - $Start_date[0];
                $new_start_date =  $yearly_periodic->yearly_periodic_start_date;
                while($new_start_date <=  $yearly_periodic->yearly_periodic_end_date){ 
                ?>
        
        {      
            title: '<?php echo  $yearly_periodic->yearly_periodic_task_name ?>' +' (Yearly Periodic)',
            start: '<?php echo $new_start_date ?>',
           
        },  
        <?php 
                                $n_start_d = new DateTime($new_start_date);
                                $n_start_d->modify('+1 year');
                                $new_start_date = $n_start_d->format('Y-m-d');
        }

                        }?>  
        <?php foreach($dash_data['monthly_periodic'] AS $monthly_periodic){
                            $new_start_date =  $monthly_periodic->monthly_start_date;
                            while($new_start_date <=  $monthly_periodic->monthly_periodic_end_date){ ?>
        
        {      
            title: '<?php echo $monthly_periodic->monthly_periodic_work ?>' +' (Monthly Periodic)',
            start: '<?php echo $new_start_date ?>',
           
        },  
        <?php 
                                    $n_start_d = new DateTime($new_start_date);
                                    $n_start_d->modify('+1 month');
                                    $new_start_date = $n_start_d->format('Y-m-d');
    
    } }  ?>    
        <?php foreach($dash_data['weekly_periodic'] AS $weekly_periodic){
                $new_start_date =  $weekly_periodic->weekly_periodic_start_date;
                while($new_start_date <=  $weekly_periodic->weekly_periodic_end_date){ ?>
        
        {      
            title: '<?php echo $weekly_periodic->weekly_periodic_work ?>' +' (Weekly Periodic)',
            start: '<?php echo $new_start_date ?>',
           
        },  
        <?php 
            $n_start_d = new DateTime($new_start_date);
            $n_start_d->modify('+7 days');
            $new_start_date = $n_start_d->format('Y-m-d');

        }}   ?>      

    // {
    //   title: 'All Day Event',
    //   start: '2018-03-01',
    // },
    // {
    //   title: 'Long Event',
    //   start: '2018-03-07',
    //   end: '2018-03-10'
    // },
    // {
    //   id: 999,
    //   title: 'Repeating Event',
    //   start: '2018-03-09T16:00:00'
    // },
    // {
    //   id: 999,
    //   title: 'Repeating Event',
    //   start: '2018-03-16T16:00:00'
    // },
    // {
    //   title: 'Conference',
    //   start: '2018-03-11',
    //   end: '2018-03-13'
    // },
    // {
    //   title: 'Meeting',
    //   start: '2018-03-12T10:30:00',
    //   end: '2018-03-12T12:30:00'
    // },
    // {
    //   title: 'Lunch',
    //   start: '2018-03-12T12:00:00'
    // },
    // {
    //   title: 'Meeting',
    //   start: '2018-03-12T14:30:00'
    // },
    // {
    //   title: 'Happy Hour',
    //   start: '2018-03-12T17:30:00'
    // },
    // {
    //   title: 'Dinner',
    //   start: '2018-03-12T20:00:00'
    // },
    // {
    //   title: 'Birthday Party',
    //   start: '2018-03-13T07:00:00'
    // },
    // {
    //   title: 'Click for Google',
    //   url: 'http://google.com/',
    //   start: '2018-03-28'
    // }
  ]
});

});
</script>
            
>>>>>>> 0af7e0780fbefe551bdec17c6bf175ef0a86e5bd
 
    <?php $this->load->view('footer'); ?>
	 
