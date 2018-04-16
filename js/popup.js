 
 // $('.popup .header #close-popup').on('click',function(){$('.popup').addClass('animation-out').hide();});
 // $('#addnotes').on('click',function(){$('.popup').show();});

 
 	$('.popup .header #close-popup').on('click',function(){ 
    $('.popup').addClass('animation-out').hide();

	$('.popup-main').css('display','none');
});

$('#addnotes').on('click',function(){
    $("#my2form").attr('action', 'http://localhost/Practice/Codeigniter-prac/Secretary-App-Glaze/Appoinment/req/');
	$('#my2Form input[type="text"]').val('');
    $('#my2Form input[type="date"]').val('');
    $('#my2Form textarea').val('');
 
    $('#my2Form input[type="Time"]').val(''); 
    $('#my2Form select').val('');
    $('#refresh_popup .auto-del').remove();
    $('#set_submail .check_mail').remove();  
	$('#auto-del').append('<div class="auto-del"><div class="left"><div class="form-group"><label>Appointment With</label><div class="input-group"><div class="form-control"><input required="" type="text" id="gm1" name="delegate_to[]" title="Delegate To"></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required="" type="text" id="gm2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]"></div></div></div></div><div class="left"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input required type="text" name="delegate_phone[]" id="gm3"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a href="#" class="plus" id="plus"><span class="fa fa-plus"></span></a></div></div></div>');
		$('.popup-main').css('display','block');
		$('.popup').show();
	  
	
    });
 
    $('#addnotes').on('click',function(){
        $("#myform").attr('action', 'http://localhost/Practice/Codeigniter-prac/Secretary-App-Glaze/Quickwork/req/');
		    $('#myForm input[type="text"]').val('');
    $('#myForm input[type="date"]').val('');
    $('#myForm textarea').val('');
 
    $('#myForm input[type="Time"]').val(''); 
    $('#myForm select').val('');
    $('#refresh_popup .auto-del').remove();
    $('#set_submail .check_mail').remove();   
	$('#auto-del').append('<div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required="" type="text" id="gm1" name="delegate_to[]" title="Delegate To"></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required="" type="text" id="gm2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]"></div></div></div></div><div class="left"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input required type="text" name="delegate_phone[]" id="gm3"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a href="#" class="plus" id="plus"><span class="fa fa-plus"></span></a></div></div></div>');
		$('.popup-main').css('display','block');
		$('.popup').show();
	  
	
    });

     $('#addnotes').on('click',function(){
     $("#reminder_form").attr('action', 'http://localhost/Secretary-App-Glaze/Reminder/insert_sheet/');
     $('#reminder_form input[type="text"]').val('');
     $('#reminder_form input[type="date"]').val('');
     $('#reminder_form textarea').val('');
     $('#reminder_form input[type="Time"]').val(''); 
     $('#reminder_form select').val('');
     $('#refresh_popup_js .auto-del').remove();
	 $('#set_submail .check_mail').remove(); 
     $('#delete').append('<div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input type="text" required id="delegate_name" title="Delegate To" name="delegate_to[]"  /></div></div></div></div><div class="center" class="col-md-3"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input type="text" name="email[]" required id="delegate_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  /></div></div></div></div><div class="center" class="col-md-3"><div class="form-group"><label>Phone Number</label><div class="input-group"><div class="form-control"><input type="text" id="phone" name="phone[]" required /></div></div></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ i + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div></div>');		$('.popup-main').css('display','block');
         $('.popup-main').css('display','block');
         $('.popup').show();
       
     
     });
 

    $('#addnotes').on('click',function(){$('.popup').show();});

