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
		$(this).css("background-color","lightblue");
		$('.detail1').show();
	});
	$('.notifications3').click(function(){
		$($prevD).hide();
		$($prevE).css("background-color","white");
		$prevD = ".detail3";
		$prevE = ".notifications3";
		$(this).css("background-color","lightblue");
		$('.detail3').show();
	});
	
});
