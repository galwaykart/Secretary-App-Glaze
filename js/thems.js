$('.thenms-chenger .thems-icon ').on('click',function(){
$('.thenms-chenger .color').toggle('slow');

});



$('.thenms-chenger .color ul li.red').on('click',function(){

	$('#sec-header').css('background-color', '#b91111');
	$('#sec-header h1 span , #sec-header h1').css('color', 'white');
	$('.heading-tag').css('background-color', '#dccbcb');
	$('#accordion .top > a, #accordion .top > div').css('color', '#b91111');
	$('span.fa-dashboard , span#dashbiar-name').css('color', 'rgb(58, 51, 51)');
	$('.left-pop-tag').css('background-color', '#715f5f');
	$('.box-data-for-2 h2 span').css('background-color', '#FF5722');
	$('#sec-header #toggle-btn-box').css('border-right', '1px solid #9e0f0f');
	$('.second-main-portion .left .header p').css('background-color', '#ec1010');
	$('.second-main-portion .center .header1 p').css('background-color', '#ec1010');
	$('.second-main-portion .right .header2 p').css('background-color', '#ec1010');
	$('table.app-tag tbody tr').css('border-bottom', '1px solid #ecc5c5');
});

