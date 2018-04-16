<?php $this->load->view('head'); ?>
	<?php $this->load->view('header'); ?>
<!-- globle header for comman start --> 
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Weekly Periodic</p></div>
    <div class="clear"></div>
    <div class="monthly-periodic-task-sheet"><!-- monthly periodic panel start -->
              <h2 id="paddin-left">Weekly Periodic </h2>
              <a href="#" id="" class="perdoci-task-add-btn"><span class="fa fa-plus" ></span>Add</a>
                <!--search button start-->
                <?php 
                // echo "<pre>";
                // print_r($fetch);
                // echo "</pre>";
                ?>
                        <div class="search-btn-perodic">
                            <input type="text" value="" placeholder="Search Task"/><button><span class="fa fa-search"></span></button>

                        </div>
                <!--search button end-->
                <?php if($this->session->flashdata('msg')): ?>
                <p style="color:red;"><?php echo $this->session->flashdata('msg'); ?></p>
                <?php endif; ?>	
              <div class="tabordion">
                          <section id="section1">
                                        <input type="radio" name="sections" id="option1" <?php if($month == '01') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/01') ?>'">
                                        <label for="option1">January</label>
                                        <article>
                                                     <h2>January 2018 Weekly Task</h2>
                                                       <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'weekone')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'weektwo')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'weekthree')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'weekfour')">Week Four</button>
                                                                         
                                                                </div>
                                                                <div id="weekone" class="tabcontent"style="display:block;">
                                                                    <br />
                                                                    <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                           
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                           $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                            //echo $end_month . " + " . $year. " + " . $end_date . "+++++++++++".$r->weekly_periodic_start_date; 

                                                                                            if( $end_month == "Jan" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Jan" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                } else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Jan" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                    </div>
                                                                </div>

                                                                <div id="weektwo" class="tabcontent">
                                                                    <br />
                                                                                <div class="table-res">
                                                                                        <table class="">
                                                                                             <thead>
                                                                                                 <tr>
                                                                                                     <th>SR NO</th>
                                                                                                     <th>Day</th>
                                                                                                     <th>Time</th>
                                                                                                     <th>Start Date</th><th>End Date</th>
                                                                                                     <th>Task</th>
                                                                                                     <!-- <th>Delegate To</th> -->
                                                                                                     <th>Supervised By</th>
                                                                                                     <th>remarks</th>
                                                                                                     <th>Active / Inactive</th>

                                                                                                 </tr>
                                                                                             </thead>
                                                                                              <tbody>
                                                                                              <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
																							$start_date =  date("d" , strtotime($r->weekly_periodic_start_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             
                                                                                            if( $end_month == "Jan" && $year >= 2018 ){
                                                                                                //echo $start_date_month . " + " . $start_date_year. " + " . $start_date;
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Jan" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
																							 } else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Jan" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                      }
                                                                                 
                                                                                ?>
                                                                              </tbody>
                                                                       </table>
                                                                     </div>
                                                                </div>
                                                                <div id="weekthree" class="tabcontent">
                                                                    <br />
                                                                               <div class="table-res">
                                                                                    <table class="">
                                                                                         <thead>
                                                                                             <tr>
                                                                                                 <th>SR NO</th>
                                                                                                 <th>Day</th>
                                                                                                 <th>Time</th>
                                                                                                 <th>Start Date</th><th>End Date</th>
                                                                                                 <th>Task</th>
                                                                                                 <!-- <th>Delegate To</th> -->
                                                                                                 <th>Supervised By</th>
                                                                                                 <th>remarks</th>
                                                                                                 <th>Active / Inactive</th>

                                                                                             </tr>
                                                                                         </thead>
                                                                                          <tbody>
                                                                                          <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Jan" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Jan" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Jan" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                          </tbody>
                                                                                    </table>
                                                                         </div>
                                                                </div>
                                                                <div id="weekfour" class="tabcontent">
                                                                    <br />
                                                                                <div class="table-res">
                                                                                        <table class="">
                                                                                             <thead>
                                                                                                 <tr>
                                                                                                     <th>SR NO</th>
                                                                                                     <th>Day</th>
                                                                                                     <th>Time</th>
                                                                                                     <th>Start Date</th><th>End Date</th>
                                                                                                     <th>Task</th>
                                                                                                     <!-- <th>Delegate To</th> -->
                                                                                                     <th>Supervised By</th>
                                                                                                     <th>remarks</th>
                                                                                                     <th>Active / Inactive</th>

                                                                                                 </tr>
                                                                                             </thead>
                                                                                              <tbody>
                                                                                              <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Jan" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                              </tbody>
                                                                                        </table>
                                                                             </div>
                                                                </div>

                                                     <!-- january weekly tabs ends -->
                                                   
                             
                                        </article>
                          </section>
                          <section id="section2">
                                        <input type="radio" name="sections" id="option2" <?php if($month == '02') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/02') ?>'">
                                        <label for="option2">Febuary</label>
                                        <article>
                                                  <h2>Febuary 2018 Weekly Task</h2>
                                                      <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'Div1')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'Div2')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'Div3')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'Div4')">Week Four</button>
                                                                         
                                                                </div>
                                                                <div id="Div1" class="tabcontent"style="display:block;">
                                                                    <br />
                                                                         <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Feb" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Feb" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Feb" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div2" class="tabcontent">
                                                                    <br />
                                                                             <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Feb" && $year >= 2018 ){
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Feb" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Feb" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div3" class="tabcontent">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Feb" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Feb" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Feb" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div4" class="tabcontent">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Feb" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>

                                                     <!-- january weekly tabs ends -->
                                                  
                                        </article>
                          </section>
                          <section id="section3">
                                        <input type="radio" name="sections" id="option3" <?php if($month == '03') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/03') ?>'">
                                        <label for="option3">March</label>
                                        <article>
                                                        <h2>March 2018 Weekly Task</h2>
                                                          <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'Div5')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'Div6')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'Div7')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'Div8')">Week Four</button>
                                                                         
                                                                </div>
                                                                <div id="Div5" class="tabcontent"style="display:block;">
                                                                    <br />
                                                                         <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Mar" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Mar" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Mar" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div6" class="tabcontent">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Mar" && $year >= 2018 ){
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Mar" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Mar" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div7" class="tabcontent">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Mar" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Mar" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Mar" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div8" class="tabcontent">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Mar" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>

                                                     <!-- january weekly tabs ends -->
                                                        
                                        </article>
                          </section>
                          <section id="section4">
                                        <input type="radio" name="sections" id="option4" <?php if($month == '04') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/04') ?>'">
                                        <label for="option4">April</label>
                                        <article>
                                                            <h2>April 2018 Weekly Task</h2>
                                                              <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'Div9')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'Div10')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'Div11')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'Div12')">Week Four</button>
                                                                         
                                                                </div>
                                                                <div id="Div9" class="tabcontent"style="display:block;">
                                                                    <br />
                                                                           <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Apr" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Apr" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Apr" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div10" class="tabcontent">
                                                                    <br />
                                                                             <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Apr" && $year >= 2018 ){
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Apr" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Apr" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div11" class="tabcontent">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Apr" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Apr" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Apr" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div12" class="tabcontent">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Apr" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>

                                                     <!-- january weekly tabs ends -->
                                                            
                                                              
                            
                                        </article>
                          </section>
                          <section id="section5">
                                                <input type="radio" name="sections" id="option5" <?php if($month == '05') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/05') ?>'">
                                                <label for="option5">May</label>
                                                <article>
                                                            <h2>May 2018 Weekly Task</h2>
                                                              <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'Div13')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'Div14')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'Div15')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'Div16')">Week Four</button>
                                                                         
                                                                </div>
                                                                <div id="Div13" class="tabcontent"style="display:block;">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "May" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="May" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="May" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div14" class="tabcontent">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "May" && $year >= 2018 ){
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="May" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="May" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div15" class="tabcontent">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "May" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="May" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="May" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div16" class="tabcontent">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "May" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>

                                                     <!-- january weekly tabs ends -->
                                                           
                            
                                                </article>
                          </section>
                          <section id="section6">
                                                <input type="radio" name="sections" id="option6" <?php if($month == '06') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/06') ?>'">
                                                <label for="option6">June</label>
                                                <article>
                                                              <h2>June 2018 Weekly Task</h2>
                                                                  <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'Div17')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'Div18')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'Div19')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'Div20')">Week Four</button>
                                                                         
                                                                </div>
                                                                <div id="Div17" class="tabcontent"style="display:block;">
                                                                    <br />
                                                                           <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Jun" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Jun" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Jun" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div18" class="tabcontent">
                                                                    <br />
                                                                           <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Jun" && $year >= 2018 ){
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Jun" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Jun" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div19" class="tabcontent">
                                                                    <br />
                                                                             <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Jun" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Jun" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Jun" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>
                                                                <div id="Div20" class="tabcontent">
                                                                    <br />
                                                                            <div class="table-res">
                                                                            <table class="">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Jun" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                            </table>
                                                                </div>
                                                                </div>

                                                     <!-- january weekly tabs ends -->
                                                              
                                                </article>
                          </section>
                          <section id="section7">
                                                        <input type="radio" name="sections" id="option7" <?php if($month == '07') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/07') ?>'">
                                                        <label for="option7">July</label>
                                                        <article>
                                                              <h2>July 2018 Weekly Task</h2>
                                                                 <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'Div21')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'Div22')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'Div23')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'Div24')">Week Four</button>
                                                                         
                                                                </div>
                                                                <br/>
                                                                <div id="Div21" class="tabcontent"style="display:block;">
                                                                     <table>
                                                                     <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Jul" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Jul" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Jul" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                     </table>
                                                                </div>
                                                                <div id="Div22" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                     <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Jul" && $year >= 2018 ){
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Jul" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Jul" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                     </table>
                                                                </div>
                                                                <div id="Div23" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                     <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Jul" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Jul" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Jul" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                     </table>
                                                                </div>
                                                                <div id="Div24" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                     <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Jul" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                     </table>
                                                                </div>

                                                     <!-- january weekly tabs ends -->
                                                              
                                                        </article>
                          </section>
                          <section id="section8">
                                                        <input type="radio" name="sections" id="option8" <?php if($month == '08') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/08') ?>'">
                                                        <label for="option8">Augest</label>
                                                        <article>
                                                            <h2>Augest 2018 Weekly Task</h2>
                                                              <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'Div25')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'Div26')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'Div27')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'Div28')">Week Four</button>
                                                                         
                                                                </div>
                                                                <div id="Div25" class="tabcontent"style="display:block;">
                                                                  <br/>
                                                                <table>
                                                                     <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Aug" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Aug" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Aug" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                     </table>
                                                                </div>
                                                                <div id="Div26" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                     <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Aug" && $year >= 2018 ){
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Aug" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Aug" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                     </table>
                                                                </div>
                                                                <div id="Div27" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                     <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Aug" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Aug" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Aug" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                     </table>
                                                                </div>
                                                                <div id="Div28" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                     <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Aug" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                     </table>
                                                                </div>

                                                     <!-- january weekly tabs ends -->
                                                        </article>
                          </section>
                          <section id="section9">
                                                        <input type="radio" name="sections" id="option9" <?php if($month == '09') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/09') ?>'">
                                                        <label for="option9">Sepetmber</label>
                                                        <article>
                                                             <h2>Sepetmber 2018 Weekly Task</h2>
                                                               <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'weekone')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'weektwo')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'weekthree')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'weekfour')">Week Four</button>
                                                                         
                                                                </div>
                                                                <div id="Div29" class="tabcontent"style="display:block;">
                                                                  <br/>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Sep" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Sep" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Sep" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                                <div id="Div30" class="tabcontent">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Sep" && $year >= 2018 ){
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Sep" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Sep" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                                <div id="Div31" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Sep" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Sep" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Sep" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                                <div id="Div32" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Sep" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>

                                                     <!-- january weekly tabs ends -->
                                                     
                                                        </article>
                          </section>
                          <section id="section10">
                                                        <input type="radio" name="sections" id="option10" <?php if($month == '10') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/10') ?>'">
                                                        <label for="option10">October</label>
                                                        <article>
                                                             <h2>October 2018 Weekly Task</h2>
                                                               <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'weekone')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'weektwo')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'weekthree')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'weekfour')">Week Four</button>
                                                                         
                                                                </div>
                                                                <div id="Div33" class="tabcontent"style="display:block;">
                                                                  <br/>
                                                                <table>
                                                                     <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Oct" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Oct" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Oct" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                     </table>
                                                                </div>
                                                                <div id="Div34" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Oct" && $year >= 2018 ){
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Oct" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Oct" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                                <div id="Div35" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Oct" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Oct" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Oct" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                                <div id="Div36" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Oct" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>

                                                     <!-- january weekly tabs ends -->
                            
                                                        </article>
                          </section>
                          <section id="section11">
                                                        <input type="radio" name="sections" id="option11" <?php if($month == '11') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/11') ?>'">
                                                        <label for="option11">November</label>
                                                        <article>
                                                              <h2>November 2018 Weekly Task</h2>
                                                                <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'weekone')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'weektwo')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'weekthree')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'weekfour')">Week Four</button>
                                                                         
                                                                </div>
                                                                <div id="Div37" class="tabcontent"style="display:block;">
                                                                  <br/>
                                                                <table>
                                                                     <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Nov" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Nov" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Nov" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                     </table>
                                                                </div>
                                                                <div id="Div38" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Nov" && $year >= 2018 ){
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Nov" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Nov" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                                <div id="Div39" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Nov" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Nov" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Nov" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                                <div id="Div40" class="tabcontent">
                                                                  <br/>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Nov" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>

                                                     <!-- january weekly tabs ends -->
                            
                                                        </article>
                          </section>
                          <section id="section12">
                                                        <input type="radio" name="sections" id="option12" <?php if($month == '12') { echo "checked"; } ?> onclick="window.location='<?php echo site_url('WeeklyPeriodic/index/12') ?>'">
                                                        <label for="option12">December</label>
                                                        <article>
                                                              <h2>December 2018 Weekly Task</h2>
                                                                <!-- january weekly tabs start -->
                                                                <div class="tab monthly-tabs">
                                                                          <button class="tablinks active bb1" onclick="openTabs(event, 'weekone')">Week One</button>
                                                                          <button class="tablinks  bb2" onclick="openTabs(event, 'weektwo')">Week Two</button>
                                                                          <button class="tablinks  bb3" onclick="openTabs(event, 'weekthree')">Week Three</button>
                                                                          <button class="tablinks  bb4" onclick="openTabs(event, 'weekfour')">Week Four</button>
                                                                         
                                                                </div>
                                                                <div id="Div41" class="tabcontent"style="display:block;">
                                                                  <br/>
                                                                <table>
                                                                     <thead>
                                                                                     <tr>
                                                                                         <th>SR NO</th>
                                                                                         <th>Day</th>
                                                                                         <th>Time</th>
                                                                                         <th>Start Date</th><th>End Date</th>
                                                                                         <th>Task</th>
                                                                                         <!-- <th>Delegate To</th> -->
                                                                                         <th>Supervised By</th>
                                                                                         <th>remarks</th>
                                                                                         <th>Active / Inactive</th>

                                                                                     </tr>
                                                                                 </thead>
                                                                                  <tbody>
                                                                                  <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Dec" && $year >= 2018 ){
                                                                                                if($end_date >=1 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Dec" && $start_date>8){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Dec" && $start_date>8){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                                  </tbody>
                                                                     </table>                                                                            
                                                                </div>
                                                                <div id="Div42" class="tabcontent">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Dec" && $year >= 2018 ){
                                                                                                if($end_date >=8 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Dec" && $start_date>15){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Dec" && $start_date>15){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                                <div id="Div43" class="tabcontent">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Dec" && $year >= 2018 ){
                                                                                                if($end_date >=15 && $end_date <=31){
                                                                                                    if($start_date_year == 2018 && $start_date_month=="Dec" && $start_date>22){
                                                                                                        continue;
                                                                                                    }
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                if($start_date_year == 2018 && $start_date_month=="Dec" && $start_date>22){
                                                                                                    continue;
                                                                                                }
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                                <div id="Div44" class="tabcontent">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                        <th>SR NO</th>
                                                                        <th>Day</th>
                                                                        <th>Time</th>
                                                                        <th>Start Date</th><th>End Date</th>
                                                                        <th>Task</th>
                                                                        <!-- <th>Delegate To</th> -->
                                                                        <th>Supervised By</th>
                                                                        <th>remarks</th>
                                                                        <th>Active / Inactive</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                                    if($fetch){
                                                                                        $i=1;

                                                                                        foreach($fetch as $r) { 
                                                                                            $end_month = date("M" , strtotime($r->weekly_periodic_end_date));
                                                                                            $year  = date("Y" , strtotime($r->weekly_periodic_end_date));
                                                                                            $end_date =  date("d" , strtotime($r->weekly_periodic_end_date));
                                                                                            $start_date =  date("d" , strtotime($r->weekly_periodic_start_date)); $start_date_month =  date("M" , strtotime($r->weekly_periodic_start_date));                                                                                             $start_date_year =  date("Y" , strtotime($r->weekly_periodic_start_date));
                                                                                             //echo $end_month . " + " . $year. " + " . $end_date; 

                                                                                            if( $end_month == "Dec" && $year >= 2018 ){
                                                                                                if($end_date >=22 && $end_date <=31){
                                                                                                    echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                    echo "<td>".$i++."</td>"; 
                                                                                                    echo "<td>".$r->Day."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                    echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                    if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                    echo "<tr>";
                                                                                                }else{
                                                                                                    continue;
                                                                                                }

                                                                                            }else{
                                                                                                echo "<tr onclick='status($r->weekly_periodic_id)'>"; 
                                                                                                echo "<td>".$i++."</td>"; 
                                                                                                echo "<td>".$r->Day."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_time."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_start_date."</td>"; echo "<td>".$r->weekly_periodic_end_date."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_work."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_supervision."</td>"; 
                                                                                                echo "<td>".$r->weekly_periodic_remark."</td>"; 
                                                                                                if($r->weekly_periodic_status == 0){ echo "<td>Inactive</td>"; }else{ echo "<td>Active</td>"; } 
                                                                                                echo "<tr>";                                                                                                
                                                                                            } 
                                                                                        } 
                                                                                    }
                                                                                ?>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                             
                                                     <!-- january weekly tabs ends -->
                            
                                                        </article>
                          </section>
                    </div><!-- verticle tabs end -->

        



    </div><!-- monthly periodic panel end -->
  
    
      <!-- popup start -->
<div class="popup-main">
<form id="myForm"  method="POST" action="<?php echo base_url();?>WeeklyPeriodic/add_data" >
            <div class="popup">
                <div class="header">
                    <h3>Project Delegation Sheet- <span id="work">Add</span></h3>
                    <span id="close-popup"  title="Close">&times;</span>
                </div>
              <div class="content">
                <!-- content start -->
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Time :</label>
                      <div class="input-group">
                        <div class="form-control">
                          <input type="time" title="Time" name="weekly_periodic_time"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Work :</label>
                      <div class="input-group">
                        <div class="form-control">
                          <input type="text" title="Work" name="work"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="clear"></div>

                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>End Date :</label>
                      <div class="input-group">
                        <div class="form-control">
                          <input type="date" title="End Date" name="end_date"/>
                        </div>
<<<<<<< HEAD
                <div class="col-md-6">
                            <div class="form-group">
                                <label>Active/Inactive</label>
                                <div class="input-group">
                                    <div class="form-control"><select name="status">
                                            <option>Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inacive</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 
                  </div>
=======
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Active/Inactive</label>
                      <div class="input-group">
                        <div class="form-control">
                          <select name="status">
                            <option>Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inacive</option>
                          </select>
                        </div>
>>>>>>> b0cec028f3171ce64aa79500a4aa5eb377b5ce17
                      </div>
                    </div>
                  </div>
                </div>

                <div class="clear"></div>

                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Day :</label>
                      <div class="input-group">
                        <div class="form-control">
                          <input type="text" title="Day" name="day"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Supervision</label>
                      <div class="input-group">
                        <div class="form-control">
                          <input type="text" title="Supervision" name="supervision"/>
                        </div>
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
                        <textarea id="Textarea1" class="" name="remark"></textarea>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="clear"></div>
                <!-- autometic delegates start -->
                <div id="refresh_popup">
                  <div id="auto-del">
                    <div class="auto-del">
                      <div class="left">
                        <div class="form-group">
                          <label>Delegate To</label>
                          <div class="input-group">
                            <div class="form-control">
                              <input required="" type="text" id ="gm1" name="delegate_to[]" title="Delegate To" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="center">
                        <div class="form-group">
                          <label>Email Id</label>
                          <div class="input-group">
                            <div class="form-control">
                              <input required="" type="text" id="gm2"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="left">
                        <div class="form-group">
                          <label>Phone number</label>
                          <div class="input-group">
                            <div class="form-control">
                              <input required="" type="text" id="gm3"   name="delegate_phone[]"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="right text-center">
                        <div class="btn-group">
                          <a href="#" class="plus" id="plus">
                            <span class="fa fa-plus" ></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clear"></div>
                <!-- autometic delegates end -->
              </div>
                    <div class="footer">
					
                        <button type="submit" class="btargetDatetn-primary btn">Save</button>
                        <!-- <a href="#">Add</a> -->
                        <input type="reset" class="btn-primary btn" value="Reset">
                        <!-- <a href="#">Reset</a> -->
                    </div>   
					
                   		
                </div>
                   
            </div>
			<div class="clear"></div>

</form>
</div>
        <!-- PopUp end -->     <div class="clear"></div>
    


   

        </div><!-- right deshbrad end -->

<?php
echo $links;
?>            

    </div><!-- Main Dashbrad end -->
   

   
    
    <script>
        function openTabs(evt, Name) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(Name).style.display = "block";
            evt.currentTarget.className += " active";

        }
        $('.perdoci-task-add-btn').on('click', function () { $('.popup-main').css('display', 'block');$('.popup').css('display', 'block'); });
        $('#close-popup').on('click', function () { $('.popup , .popup-main').css('display', 'none'); });

    </script>


    <script type="text/javascript"> 
    $(function() {
        $('a#plus').click(function(e) {
            e.preventDefault();
            var lnth = $('#auto-del .auto-del').length; 
            $('#auto-del').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]"/></div></div></div></div><div class="left"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input required type="text" name="delegate_phone[]" id="gm3"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
            
        });
    });
        function setValues(id){     
                document.getElementById("rm"+id).remove();
        }
</script>

	<script>
	function status(id) {
   // console.log("id ====" ,id);
    var url = "<?php echo base_url(); ?>WeeklyPeriodic/view/"+id;
    window.location.assign(url);
}
</script>

 <?php $this->load->view('footer'); ?>