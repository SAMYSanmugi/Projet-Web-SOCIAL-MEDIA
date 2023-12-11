$(document).ready(function(){
	$prevD = "";
	$prevE = "";
	$(this).click(function(){
		$('.info').hide();
	});
	$('.notifications1').click(function(){
		$($prevD).hide();
		$($prevE).css("background-color","white");
		$prevD = ".detail1";
		$prevE = ".notifications1";
		$(this).css("background-color","gold");
		$('.detail1').show();
	});
	$('.notifications2').click(function(){
		$($prevD).hide();
		$($prevE).css("background-color","white");
		$prevD = ".detail2";
		$prevE = ".notifications2";
		$(this).css("background-color","gold");
		$('.detail2').show();
	});
	$('.notifications3').click(function(){
		$($prevD).hide();
		$($prevE).css("background-color","white");
		$prevD = ".detail3";
		$prevE = ".notifications3";
		$(this).css("background-color","gold");
		$('.detail3').show();
	});
	
});
