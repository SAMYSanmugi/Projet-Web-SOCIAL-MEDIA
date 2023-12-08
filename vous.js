//affichage quand on clique sur le bouton suivant 
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

//affichage quand on appuie sur le bouton precedent 
function afficherPrecedentUn(){
	document.getElementById("form2").style.display ="none"; 
	document.getElementById("form1").style.display ="block"; 
}

function afficherPrecedentDeux(){
	document.getElementById("form3").style.display ="none"; 
	document.getElementById("form2").style.display ="block"; 
}

function afficherPrecedentTrois(){
	document.getElementById("form4").style.display ="none"; 
	document.getElementById("form3").style.display ="block"; 
}

function afficherPrecedentQuatre(){
	document.getElementById("form5").style.display ="none"; 
	document.getElementById("form4").style.display ="block"; 
}

function afficherPrecedentCinq(){
	document.getElementById("form6").style.display ="none"; 
	document.getElementById("form5").style.display ="block"; 
}

function afficherPrecedentSix(){
	document.getElementById("form7").style.display ="none"; 
	document.getElementById("form6").style.display ="block"; 
}

//fonction permettant d'ajouter des lignes 
function ajouterCompetence() {
    var table = document.getElementById("competencesTable");
    var numeroCompetence = table.rows.length + 1; //afficher le num de la compétence
    var newRow = table.insertRow(table.rows.length);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    cell1.innerHTML = "Compétence" + ' ' + numeroCompetence;
    cell2.innerHTML = '<input type="text" name="competence[]">';
}

function ajouterLangues(){
	var table = document.getElementById("languesTable");
    var numeroLangue = table.rows.length + 1; 
    var newRow = table.insertRow(table.rows.length);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    cell1.innerHTML = "Langue" + ' ' + numeroLangue;
    cell2.innerHTML = '<input type="text" name="langue[]">';
}

//fonction permettant de charger le fichier XML 
function loadXMLDoc(){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
			genererCV(this); 
		}
	};
	xmlhttp.open("GET", "vous.xml", true); 
	xmlhttp.send(); 
}

function genererCV(){

}
