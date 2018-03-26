 
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
                                                                                            <h2>Mettings&nbsp; <span id="">404 M</span></h2>
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
                                                                                            <h2>Daily Notes&nbsp;<span id="Span1">404 M</span></h2>
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
                                                                                            <h2>Quick Work&nbsp; <span id="Span3">404 M</span></h2>
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
                                                                                            <h2>Delegation Sheet&nbsp;<span id="Span5">404 M</span></h2>
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
                                                                                            <h2>Appoinment&nbsp;<span id="Span7">404 M</span></h2>
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
                                                                                            <h2>Periodic Task&nbsp; <span id="Span9">404 M</span></h2>
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
                                                                                            <h2>Reminder Sheet&nbsp; <span id="Span11">404 M</span></h2>
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
                                            echo "<td><span class='next'>Next</span></td>";
                                            echo "<tr>"; 
                                         } 
                                        }
                              ?>
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
                                            echo "<td>".$r->agenda_id."</td>"; 
                                            //if($r->priority == 1){ echo "<td><span class='high'>Highest</span></td>"; }elseif($r->priority == 2){ echo "<td><span class='mid'>Medium</span></td>"; }else{echo "<td><span class='low'>Lowest</span></td>";}
                                            echo "<td><span class='run'>Running</span></td>";
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

            
 
    <?php $this->load->view('footer'); ?>
	 
