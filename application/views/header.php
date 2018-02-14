 <header id="sec-header">
        <div id="toggle-btn-box">
            <span id="bar" class="fa fa-bars" >
                <!-- <div class="one"></div>
				<div class="two"></div>
                <div class="three"></div>-->
             </span>
            <span id="close">&times</span>
        </div>
        <a href="<?php echo base_url(); ?>">	
            <img src="<?php echo base_url(); ?>img/galway_logo.png" alt="logo" id="img"/>
		</a>

        <h1>Secretory App</h1>

        <div class="rigth-log-box">
				<?php 
					$firstname = $this->session->firstname; 
					$lastname   = $this->session->lastname;  ?>

            <div class="inner">
                        <p class="person-name"> <?php if($firstname){ echo $firstname; } ?> <?php if($lastname){ echo $lastname; } ?></p>
                        <img src="<?php echo base_url(); ?>img/person.png" alt="person image" id="per-img" /> 
		   </div>
        </div>
		 <div class="log-up-body">
           <ul>
               <li><a href="#">Profile</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="<?php echo base_url('user/user_logout'); ?>">LogOut</a></li>
           </ul>
        </div>
    </header>
	
	    <aside class="aside-left" id="aside">
                <div id="accordion">
                    <ul>
                        <li>
                            <div>MENU</div>
                        </li>
                        <li>
                             <a href="?31">Index Meeting in Progress</a> 
                        </li>
						<li>
                             <a href="?21">Daily Notes</a> 
                        </li>
						<li>
                             <a href="?21">Quick Work</a> 
                        </li>
						<li>
                             <a href="?21">Appointments</a> 
                        </li>
                        <li>
                            <div>Periodic tasks</div>
                            <ul>
                                <li><a href="?31">Yearly periodic task (Quarterly)</a></li>
                                <li><a href="?32">Yearly periodic status sheet</a></li>
                                <li><a href="?32">Monthly periodic Status Sheet</a></li>
                                <li><a href="?32">Monthly periodic Status sheet</a></li>
                                <li><a href="?32">Everyday periodic Task</a></li>
                                <li><a href="?32">Everyday Periodic Status Sheet</a></li>
                                <li><a href="?32">Weekly periodic Task</a></li>
                                <li><a href="?32">Weekly periodic status sheet</a></li> 
                            </ul>
                        </li>
                        <li>
                            <a href="?4">Reminder Sheet</a>
                        </li>
						<li>
							<a href="<?php echo base_url('user/userlist'); ?>">Users</a>
                        </li>
                    </ul>
                </div>
    </aside>
 
