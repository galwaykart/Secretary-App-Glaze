 <header id="sec-header">
        <div id="toggle-btn-box">
                <span id="bar" >
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </span>
            <span id="close"> &times </span>
        </div>
        <img src="<?php echo base_url(); ?>img/galway_logo.png" alt="logo" id="img"/>
        <h1>Secratory App</h1>
        <div class="rigth-log-box">
				<?php 
					$firstname = $this->session->firstname; 
					$lastname   = $this->session->lastname;  ?>
			   
            <div class="inner">
                        <p class="person-name"> <?php if($firstname){ echo $firstname; } ?> <?php if($lastname){ echo $lastname; } ?></p>
                        <img src="<?php echo base_url(); ?>img/person.png" alt="person image" id="per-img" />

            </div>

        </div>
    </header>
 
