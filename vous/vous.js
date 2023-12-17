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

function ajouterExperience(){
    var table = document.getElementById("experienceTable");
    var numeroExperience = table.rows.length + 1; 
    var newRow = table.insertRow(table.rows.length);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    cell1.innerHTML = "Experience/projet" + ' ' + numeroExperience;
    cell2.innerHTML = '<input type="text" name="experience[]">';
}

function ajouterFormation(){
    var table = document.getElementById("formationsTable");
    var numeroFormation = table.rows.length + 1; 
    var newRow = table.insertRow(table.rows.length);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    cell1.innerHTML = "Formation" + ' ' + numeroFormation;
    cell2.innerHTML = '<input type="text" name="formation[]">';
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
