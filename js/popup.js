 
 // $('.popup .header #close-popup').on('click',function(){$('.popup').addClass('animation-out').hide();});
 // $('#addnotes').on('click',function(){$('.popup').show();});

 
 	$('.popup .header #close-popup').on('click',function(){ 
    $('.popup').addClass('animation-out').hide();

	$('.popup-main').css('display','none');
});


 
    $('#addnotes').on('click',function(){
		    $('#myForm input[type="text"]').val('');
    $('#myForm input[type="date"]').val('');
    $('#myForm textarea').val('');

 
    $('#myForm input[type="Time"]').val(''); 
    $('#myForm select').val('');
    $('#refresh_popup .auto-del').remove();
	$('#auto-del').append('<div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required="" type="text" id="gm1" name="delegate_to[]" title="Delegate To"></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required="" type="text" id="gm2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]"></div></div></div></div><div class="right text-center"><div class="btn-group"><a href="#" class="plus" id="plus"><span class="fa fa-plus"></span></a></div></div></div>');
		$('.popup-main').css('display','block');
		$('.popup').show();
	  
	
	});
 

    $('#addnotes').on('click',function(){$('.popup').show();});

