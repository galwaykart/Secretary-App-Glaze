 
    <footer id="footer">
        <p>&copy; Copyright By Glaze India Pvt. Ltd.</p>
    </footer>


     <!-- globle header for comman end --> 
    <script>
        $(document).ready(function () {
            $('#aside').css('width', '20%');
            $('#sec-header #toggle-btn-box span#bar').click(function () {
                $('#sec-header #toggle-btn-box span#bar').hide();
                $('#sec-header #toggle-btn-box span#close').show();
                if ($(window).width() < 769) {
                    $('#aside').css('width', '70%').show().addClass('show');
                }
                else { $('#aside').css('width', '20%').show().addClass('show'); }
            });

            $('#sec-header #toggle-btn-box span#close').click(function () {
                $('#sec-header #toggle-btn-box span#bar ').show();
                $('#sec-header #toggle-btn-box span#close').hide();
               
                $('#aside').css('width', '0%');


            });
			$('.log-popup').on('click', function () {
              //  $('.log-up-body').toggle('slow');
				$('.log-up-body').slideToggle('slow'); // code added by surender

            });
			
			
        });

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
    </script> 

     <script type="text/javascript" src="<?php echo base_url(); ?>js/caleandar.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/demo.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/popup.js"></script>
 
