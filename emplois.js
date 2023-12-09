$(document).ready(function(){
	$prevD = "";
	$prevE = "";
	$(this).click(function(){
		$('.info').hide();
	});
	$('.emplois1').click(function(){
		$($prevD).hide();
		$($prevE).css("background-color","white");
		$prevD = ".detail1";
		$prevE = ".emplois1";
		$(this).css("background-color","gold");
		$('.detail1').show();
	});
	$('.emplois2').click(function(){
		$($prevD).hide();
		$($prevE).css("background-color","white");
		$prevD = ".detail2";
		$prevE = ".emplois2";
		$(this).css("background-color","gold");
		$('.detail2').show();
	});
	$('.emplois3').click(function(){
		$($prevD).hide();
		$($prevE).css("background-color","white");
		$prevD = ".detail3";
		$prevE = ".emplois3";
		$(this).css("background-color","gold");
		$('.detail3').show();
	});
	$('.emplois4').click(function(){
		$($prevD).hide();
		$($prevE).css("background-color","white");
		$prevD = ".detail4";
		$prevE = ".emplois4";
		$(this).css("background-color","gold");
		$('.detail4').show();
	});


});