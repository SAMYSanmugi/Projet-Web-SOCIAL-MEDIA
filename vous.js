function afficherFormulaireDeux(){
	// pour le 2e formulaire on fait "disparaitre" le premier 
	document.getElementById("form1").style.display ="none"; 
	document.getElementById("form2").style.display ="block"; 
}

function afficherFormulaireTrois(){
	document.getElementById("form2").style.display ="none"; 
	document.getElementById("form3").style.display ="block"; 
}
		
function afficherFormulaireQuatre(){
	document.getElementById("form3").style.display ="none"; 
	document.getElementById("form4").style.display ="block"; 
}
		
function afficherFormulaireCinq(){
	document.getElementById("form4").style.display ="none"; 
	document.getElementById("form5").style.display ="block"; 
}
		
function afficherFormulaireSix(){
	document.getElementById("form5").style.display ="none"; 
	document.getElementById("form6").style.display ="block"; 
}
		
function afficherFormulaireSept(){
	document.getElementById("form6").style.display ="none"; 
	document.getElementById("form7").style.display ="block"; 
}	
