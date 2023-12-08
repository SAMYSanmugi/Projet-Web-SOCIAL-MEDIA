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

function genererCV(){

}
