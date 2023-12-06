$(document).ready(function(){
	$prev = "";
	$('.emplois1').click(function(){
		$($prev).hide();
		$prev = ".detail1";
		$('.detail1').show();
	});
	$('.emplois2').click(function(){
		$($prev).hide();
		$prev = ".detail2";
		$('.detail2').show();
	});
	$('.emplois3').click(function(){
		$($prev).hide();
		$prev = ".detail3";
		$('.detail3').show();
	});
	$('.emplois4').click(function(){
		$($prev).hide();
		$prev = ".detail4";
		$('.detail4').show();
	});


});