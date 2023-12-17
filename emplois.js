$(document).ready(function(){
	$prevD = "";
	$prevE = "";
	$(this).click(function(){
		$('.info').hide();
	});
	//En dessous les fonction d'affichage et hide pour 10 emplois (capacité max du serv)
	$('.emplois1').click(function(){
		$($prevD).hide(); //hide l'ancien détail
		$($prevE).css("background-color","white");
		$prevE = "." + $(this).attr('class'); //maj de l'emploi consulté précédement
		$prevD = ".detail" + $(this).attr('class'); // on recup la class du bloc cliqué et maj du détail consulté précédement
		$(this).css("background-color","gold");
		$($prevD).show(); //affichage du nouveau détail voulu
	});
	$('.emplois2').click(function(){
		$($prevD).hide(); //hide l'ancien détail
		$($prevE).css("background-color","white");
		$prevE = "." + $(this).attr('class'); //maj de l'emploi consulté précédement
		$prevD = ".detail" + $(this).attr('class'); // on recup la class du bloc cliqué et maj du détail consulté précédement
		$(this).css("background-color","gold");
		$($prevD).show(); //affichage du nouveau détail voulu
	});
	$('.emplois3').click(function(){
		$($prevD).hide(); //hide l'ancien détail
		$($prevE).css("background-color","white");
		$prevE = "." + $(this).attr('class'); //maj de l'emploi consulté précédement
		$prevD = ".detail" + $(this).attr('class'); // on recup la class du bloc cliqué et maj du détail consulté précédement
		$(this).css("background-color","gold");
		$($prevD).show(); //affichage du nouveau détail voulu
	});
	$('.emplois4').click(function(){
		$($prevD).hide(); //hide l'ancien détail
		$($prevE).css("background-color","white");
		$prevE = "." + $(this).attr('class'); //maj de l'emploi consulté précédement
		$prevD = ".detail" + $(this).attr('class'); // on recup la class du bloc cliqué et maj du détail consulté précédement
		$(this).css("background-color","gold");
		$($prevD).show(); //affichage du nouveau détail voulu
	});
	$('.emplois5').click(function(){
		$($prevD).hide(); //hide l'ancien détail
		$($prevE).css("background-color","white");
		$prevE = "." + $(this).attr('class'); //maj de l'emploi consulté précédement
		$prevD = ".detail" + $(this).attr('class'); // on recup la class du bloc cliqué et maj du détail consulté précédement
		$(this).css("background-color","gold");
		$($prevD).show(); //affichage du nouveau détail voulu
	});
	$('.emplois6').click(function(){
		$($prevD).hide(); //hide l'ancien détail
		$($prevE).css("background-color","white");
		$prevE = "." + $(this).attr('class'); //maj de l'emploi consulté précédement
		$prevD = ".detail" + $(this).attr('class'); // on recup la class du bloc cliqué et maj du détail consulté précédement
		$(this).css("background-color","gold");
		$($prevD).show(); //affichage du nouveau détail voulu
	});
	$('.emplois7').click(function(){
		$($prevD).hide(); //hide l'ancien détail
		$($prevE).css("background-color","white");
		$prevE = "." + $(this).attr('class'); //maj de l'emploi consulté précédement
		$prevD = ".detail" + $(this).attr('class'); // on recup la class du bloc cliqué et maj du détail consulté précédement
		$(this).css("background-color","gold");
		$($prevD).show(); //affichage du nouveau détail voulu
	});
	$('.emplois8').click(function(){
		$($prevD).hide(); //hide l'ancien détail
		$($prevE).css("background-color","white");
		$prevE = "." + $(this).attr('class'); //maj de l'emploi consulté précédement
		$prevD = ".detail" + $(this).attr('class'); // on recup la class du bloc cliqué et maj du détail consulté précédement
		$(this).css("background-color","gold");
		$($prevD).show(); //affichage du nouveau détail voulu
	});
	$('.emplois9').click(function(){
		$($prevD).hide(); //hide l'ancien détail
		$($prevE).css("background-color","white");
		$prevE = "." + $(this).attr('class'); //maj de l'emploi consulté précédement
		$prevD = ".detail" + $(this).attr('class'); // on recup la class du bloc cliqué et maj du détail consulté précédement
		$(this).css("background-color","gold");
		$($prevD).show(); //affichage du nouveau détail voulu
	});
	$('.emplois10').click(function(){
		$($prevD).hide(); //hide l'ancien détail
		$($prevE).css("background-color","white");
		$prevE = "." + $(this).attr('class'); //maj de l'emploi consulté précédement
		$prevD = ".detail" + $(this).attr('class'); // on recup la class du bloc cliqué et maj du détail consulté précédement
		$(this).css("background-color","gold");
		$($prevD).show(); //affichage du nouveau détail voulu
	});

});