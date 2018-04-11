<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
                        <button class="tours">Tour <span class="fa fa-angle-down"></span>
                      </button>
                        <p><span class="fa fa-dashboard" ></span>&nbsp;<span id="dashbiar-name">Dashboard</span></p>
                        </div>

                        <!-- body tag diffrent for all -->
                        <div class="main-area-body-box"> 
                                        <div class="col-md-12">
                                               <div class="col-md-new-2">
                                                                       <div class="box-data-for-2 one-box ">
                                                                         <div class="blur1">
                                                                           <div class="container1 ">
                                                                                        <span class="fa fa-bars new-right"></span>
                                                                                        <div class="contextMenu">
                                                                                         <p>Resize</p>
                                                                                         <ul><li><a href="#" class="small">Small</a></li>
                                                                                             <li><a href="#" class="mid">Medium</a></li>
                                                                                             <li><a href="#" class="large">Large</a></li>
                                                                                         </ul>
                                                                                        </div>
                                                                                       <!-- contect menu end -->
                                                                                        <div class="left-pop-tag"> <span class="fa fa-handshake-o one" ></span></div>
                                                                                        <div class="right-pop-tag">
                                                                                            <h3>
                                                                                              <?php echo($dash_data['count_index_meeting'][0]->total);?>
                                                                                            </h3>
                                                                                            <h2>Mettings</h2>
                                                                                            <p>Today Metting <span id=""><?php echo($dash_data['index_meeting']["count"]);?></span></p>
                                                                                        </div>
                                                                            </div>
                                                                         </div>
                                                                       </div>
                                              </div>
                                              


                                            
                                             <div class="col-md-new-2">
                                                                       <div class="box-data-for-2 twobox">
                                                                         <div class="blur2">
                                                                           <div class="container1 ">
                                                                             <span class="fa fa-bars new-right"></span>
                                                                             <div class="contextMenu">
                                                                               <p>Resize</p>
                                                                               <ul>
                                                                                 <li>
                                                                                   <a href="#">Small</a>
                                                                                 </li>
                                                                                 <li>
                                                                                   <a href="#">Medium</a>
                                                                                 </li>
                                                                                 <li>
                                                                                   <a href="#">Large</a>
                                                                                 </li>
                                                                               </ul>
                                                                             </div>
                                                                             <div class="left-pop-tag">
                                                                               <span class="fa fa-file-text-o two" ></span>
                                                                             </div>
                                                                             <div class="right-pop-tag">
                                                                               <h3>
                                                                                 <?php echo($dash_data['count_daily_notes'][0]->total);?>
                                                                               </h3>
                                                                               <h2>
                                                                                 Daily Notes
                                                                               </h2>
                                                                               <p>
                                                                                 Today Daily Notes <span id="Span2">
                                                                                   <?php echo($dash_data['daily_notes']["count"]);?>
                                                                                 </span>
                                                                               </p>
                                                                             </div>
                                                                           </div>

                                                                         </div>
                                                                       </div>
                                              </div>
                                             
                                             <div class="col-md-new-2">
                                                                       <div class="box-data-for-2 threebox ">
                                                                         <div class="blur3">
                                                                           <div class="container1 ">
                                                                             <span class="fa fa-bars new-right"></span>
                                                                             <div class="contextMenu">
                                                                               <p>Resize</p>
                                                                               <ul>
                                                                                 <li>
                                                                                   <a href="#">Small</a>
                                                                                 </li>
                                                                                 <li>
                                                                                   <a href="#">Medium</a>
                                                                                 </li>
                                                                                 <li>
                                                                                   <a href="#">Large</a>
                                                                                 </li>
                                                                               </ul>
                                                                             </div>
                                                                             <div class="left-pop-tag">
                                                                               <span class="fa fa-edit three" ></span>
                                                                             </div>
                                                                             <div class="right-pop-tag">
                                                                               <h3>
                                                                                 <?php echo($dash_data['count_quickworks'][0]->total);?>
                                                                               </h3>
                                                                               <h2>
                                                                                 Quick Work&nbsp; 
                                                                               </h2>
                                                                               <p>
                                                                                 Today Quick Work <span id="Span4">
                                                                                   <?php echo($dash_data['quick_work'][0]->total_works);?>
                                                                                 </span>
                                                                               </p>
                                                                             </div>
                                                                           </div>
                                                                         </div>
                                                                       </div>
                                               
                                              </div>
                                              
                                             <div class="col-md-new-2">
                                                                       <div class="box-data-for-2 fourbox">
                                                                         <div class="blur4">
                                                                           <div class="container1 ">
                                                                             <span class="fa fa-bars new-right"></span>
                                                                             <div class="contextMenu">
                                                                               <p>Resize</p>
                                                                               <ul>
                                                                                 <li>
                                                                                   <a href="#">Small</a>
                                                                                 </li>
                                                                                 <li>
                                                                                   <a href="#">Medium</a>
                                                                                 </li>
                                                                                 <li>
                                                                                   <a href="#">Large</a>
                                                                                 </li>
                                                                               </ul>
                                                                             </div>
                                                                             <div class="left-pop-tag">
                                                                               <span class="fa fa-copy four" ></span>
                                                                             </div>
                                                                             <div class="right-pop-tag">
                                                                               <h3>
                                                                                 <?php echo($dash_data['count_projectDelegation'][0]->total);?>
                                                                               </h3>
                                                                               <h2>
                                                                                 Delegation Sheet
                                                                               </h2>
                                                                               <p>
                                                                                 Today Delegation Task <span id="Span6">
                                                                                   <?php echo($dash_data['project_delegation'][0]->total_projects);?>
                                                                                 </span>
                                                                               </p>
                                                                             </div>
                                                                           </div>
                                                                         </div>
                                                                        
                                                                       </div>
                                              </div>
                                             
                                             <div class="col-md-new-2">
                                               <div class="box-data-for-2 fivebox">
                                                 <div class="blur5">
                                                   <div class="container1 ">
                                                     <span class="fa fa-bars new-right"></span>
                                                     <div class="contextMenu">
                                                       <p>Resize</p>
                                                       <ul>
                                                         <li>
                                                           <a href="#">Small</a>
                                                         </li>
                                                         <li>
                                                           <a href="#">Medium</a>
                                                         </li>
                                                         <li>
                                                           <a href="#">Large</a>
                                                         </li>
                                                       </ul>
                                                     </div>
                                                     <div class="left-pop-tag">
                                                       <span class="fa fa-coffee five" ></span>
                                                     </div>
                                                     <div class="right-pop-tag">
                                                       <h3>
                                                         <?php echo($dash_data['count_appointment'][0]->total);?>
                                                       </h3>
                                                       <h2>
                                                         Appoinment
                                                       </h2>
                                                       <p>
                                                         Today Appoinment <span id="Span8">
                                                           <?php echo($dash_data['appointment']["count"]);?>
                                                         </span>
                                                       </p>
                                                     </div>
                                                   </div>

                                                 </div>
                                                 </div>
                                               </div>
                                             
                                             <div class="col-md-new-2">
                                                                       <div class="box-data-for-2 sixbox">
                                                                         <div class="blur6">
                                                                           <div class="container1 ">
                                                                             <span class="fa fa-bars new-right"></span>
                                                                             <div class="contextMenu">
                                                                               <p>Resize</p>
                                                                               <ul>
                                                                                 <li>
                                                                                   <a href="#">Small</a>
                                                                                 </li>
                                                                                 <li>
                                                                                   <a href="#">Medium</a>
                                                                                 </li>
                                                                                 <li>
                                                                                   <a href="#">Large</a>
                                                                                 </li>
                                                                               </ul>
                                                                             </div>
                                                                             <div class="left-pop-tag">
                                                                               <span class="fa fa-paw six" ></span>
                                                                             </div>
                                                                             <div class="right-pop-tag">
                                                                               <h3>
                                                                                 <?php echo($dash_data['count_index_meeting'][0]->total);?>
                                                                               </h3>
                                                                               <h2>
                                                                                 Periodic Task
                                                                               </h2>
                                                                               <p>
                                                                                 Today Periodic Task <span id="Span10">
                                                                                   <?php echo($dash_data['periodic']);?>
                                                                                 </span>
                                                                               </p>
                                                                             </div>
                                                                           </div>
                                                                         </div>
                                                                       </div>
                                              </div>
                                              
                                             <div class="col-md-new-2">
                                                                       <div class="box-data-for-2 sevenbox">
                                                                         <div class="blur7">
                                                                           <div class="container1 ">
                                                                             <span class="fa fa-bars new-right"></span>
                                                                             <div class="contextMenu">
                                                                               <p>Resize</p>
                                                                               <ul>
                                                                                 <li>
                                                                                   <a href="#">Small</a>
                                                                                 </li>
                                                                                 <li>
                                                                                   <a href="#">Medium</a>
                                                                                 </li>
                                                                                 <li>
                                                                                   <a href="#">Large</a>
                                                                                 </li>
                                                                               </ul>
                                                                             </div>
                                                                             <div class="left-pop-tag">
                                                                               <span class="fa fa-outdent seven" ></span>
                                                                             </div>
                                                                             <div class="right-pop-tag">
                                                                               <h3>
                                                                                 <?php echo($dash_data['count_index_meeting'][0]->total);?>
                                                                               </h3>
                                                                               <h2>
                                                                                 Reminder Sheet
                                                                               </h2>
                                                                               <p>
                                                                                 Today Reminder Task <span id="Span12">
                                                                                   <?php echo($dash_data['daily_notes']["count"]);?>
                                                                                 </span>
                                                                               </p>
                                                                             </div>
                                                                           </div>
                                                                         </div>
                                                                       </div>
                                              </div>
                                            <div class="col-md-new-2 ">
                                                                       <div class="box-data-for-2 temprature egbox">
                                                                         <div class="blur8">
                                                                           <div class="container1 ">

                                                                             <div class="left-pop-tag">
                                                                               <div id="cl-weth"> </div>
                                                                             </div>
                                                                             <div class="right-pop-tag">
                                                                               <h2 class="title">Wheather Forcast</h2>
                                                                               <p>
                                                                                 <span ></span>
                                                                               </p>
                                                                               <h2 id="temprature" class="temp"></h2>
                                                                             </div>

                                                                           </div>
                                                                         </div>
                                                                       </div>
                                              </div>
                                            <div class="col-md-new-2">
                                              <div class="box-data-for-2 no-border-box">
                                                <div class="container1 text-center">
                                                  <canvas id="canvas"  class="clock" width="180" >
                                                  </canvas>
                                                  <!-- container clock end -->
                                                
                                                </div>
                                              </div>
                                            </div>
                                          <div class="col-md-new-2">
                                                    <div class="container1 color" >
                                                      <div id="piechart" ></div>
                                                    </div>
                                          </div>
                                              

                                          </div><!-- div end  -->






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
                                                                       <tr>
                                                                           
                                                                            <td>today </td>
                                                                            
                                                                            <td>Immideaiet effact</td>
                                                                            <td><span class="run">Running</span></td>
                                                                        </tr>
                                                                          <tr>
                                                                            
                                                                            <td>today </td>
                                                                           
                                                                            <td>Immideaiet effact</td>
                                                                              <td><span class="comp">Cmpleted</span></td>
                                                                        </tr>
                                                                          <tr>
                                                                             
                                                                            <td>today </td>
                                                                            
                                                                            <td>Immideaiet effact</td>
                                                                              <td><span class="comp">Cmpleted</span></td>
                                                                        </tr>
                                                                         <tr>
                                                                           
                                                                            <td>today </td>
                                                                           
                                                                            <td>Immideaiet effact</td>
                                                                             <td><span class="next">Next</span></td>
                                                                        </tr>
                                                                         <tr>
                                                                            
                                                                            <td>today </td>
                                                                           
                                                                            <td>Immideaiet effact</td>
                                                                             <td><span class="next">Next</span></td>
                                                                        </tr> 
                                                                         
                                                                    </tbody>
                                                                </table>
                               

                                                        </div>

                                                            
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
        <div class='clear'></div>
 
        
<?php $c_date = date('Y-m-d', time()); ?> 
<script>
  $(document).ready(function() {

  $('#calendar').fullCalendar({
  header: {
  left:'',
  center: 'prev,title,next',
  right: 'month,agendaWeek,agendaDay,listWeek'
  },

  defaultDate: '<?php echo $c_date; ?>',
  navLinks: true, // can click day/week names to navigate views
  editable: true,
  eventLimit: true, // allow "more" link when too many events

  eventRender: function(event, element) {
  if(event.id == 1) {
  element.css('background-color', '#ffa50094').css('border','1px solid rgb(230, 182, 93)').css('color','black');
  }
  if(event.id == 6) {
  element.css('background-color', 'rgb(221, 140, 243)').css('border','1px solid rgb(197, 120, 218)').css('color','black');
  }
  if(event.id == 7) {
  element.css('background-color', 'rgb(206, 199, 127)').css('border','1px solid rgb(183, 176, 106)').css('color','black');
  }

  if(event.id == 8) {
  element.css('background-color', 'rgb(206, 199, 127)').css('border','1px solid rgb(183, 176, 106)').css('color','black');
  }

  },




  eventMouseover: function(calEvent, jsEvent) {
  var tooltip = '<div class="tooltipevent" ><h2 class="title">Title</h2><h2 > ' + calEvent.title + '</h2><p> Start Time : '+  calEvent.start  + '</p></div>';
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

  eventMouseout: function(calEvent, jsEvent) {
  $(this).css('z-index', 8);
  $('.tooltipevent').remove();
  },



  events: [
  <?php foreach($dash_data['index_meeting']["all_data"] AS $indexMeeting){?>
        
    {   id:1, 
        title: '<?php echo $indexMeeting->agenda_name ?>' +' (INDEX MEETINGS)',
        start: '<?php echo $indexMeeting->date_of_meeting ?>'+'T'+'<?php echo $indexMeeting->index_meeting_start_time ?>',
       
    },  
    <?php }   ?>
    <?php foreach($dash_data['total_quick_work'] AS $quickworks){?>

  {        id:2,
           title: '<?php echo $quickworks->task ?>' +' (QUICK WORKS)',
            start: '<?php echo $quickworks->date ?>',
           
        },  
        <?php }   ?>
        <?php foreach($dash_data['appointment']['all_data'] AS $appointments){?>
        
        {    id:3,
            title: '<?php echo $appointments->appointment_subject ?>' +' (Appointments)',
            start: '<?php echo $appointments->appointment_start_time ?>',
           
        },  
        <?php }   ?>

        <?php foreach($dash_data['total_project_delegation'] AS $projects){?>
        
        {   id:4,  
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
  
        {   id:5,
            title: '<?php echo $yearly_periodic->yearly_periodic_task_name ?>' +' (Yearly Periodic)',
            start: '<?php echo $yearly_periodic->yearly_periodic_start_date ?>',
  
           
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
            id:6,
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
        
        {    id:7,
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
<script>
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");
  var radius = canvas.height / 2;
  ctx.translate(radius, radius);
  radius = radius * 0.90
  setInterval(drawClock, 1000);

  function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
  }

  function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = '#e24545';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, 'white');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, 'orange');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  }

  function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}

    $(function(){
       $('.box-data-for-2 .container1 span.fa-bars').on('click',function(){
            // $('.contextMenu').css('display','none');
             
             $(this).next('.contextMenu').toggle('slow');
             
    
    });
       
        $('.contextMenu ul li a.small').on('click',function(e){
          
           $('.box-data-for-2').css('width','10%');
    });    
    
    
    
    
    });
    
    // chart
  
</script>
<script type="text/javascript">
  // Load google charts
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  // Draw the chart and set the chart values
  function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Tasks', ''],
  ['Meetings', 4],
  ['Appoinment', 3],
  ['Task', 3]

  ]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Daiily Log', 'width':230, 'height':220};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<?php $this->load->view('footer'); ?>




