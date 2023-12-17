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

function genererCV() {


  var nom = document.getElementsByName("nom")[0].value;
  var prenom = document.getElementsByName("prenom")[0].value;
  var naissance = document.getElementsByName("naissance")[0].value;
  var adresse = document.getElementsByName("adresse")[0].value;
  var telephone = document.getElementsByName("telephone")[0].value;
  var mail = document.getElementsByName("mail")[0].value;
  var profil = document.getElementsByName("profil")[0].value;

  // Récupérer les compétences
  var competences = [];
  var competencesInputs = document.getElementsByName("competence[]");
  for (var i = 0; i < competencesInputs.length; i++) {
    competences.push(competencesInputs[i].value);
  }

  // Récupérer les centres d'intérêt
  var interet = document.getElementsByName("interet")[0].value;

  // Récupérer les compétences linguistiques
  var langues = [];
  var languesInputs = document.getElementsByName("langue[]");
  for (var j = 0; j < languesInputs.length; j++) {
    langues.push(languesInputs[j].value);
  }

  // Récupérer l'expérience/projet
  var experience = [];
  var experienceInputs = document.getElementsByName("experience[]");
  for (var k = 0; k < experienceInputs.length; k++) {
    experience.push(experienceInputs[k].value);
  }

  // Récupérer les formations
  var formations = [];
  var formationsInputs = document.getElementsByName("formation[]");
  for (var l = 0; l < formationsInputs.length; l++) {
    formations.push(formationsInputs[l].value);
  }

  document.getElementById("cvNomPrenom").innerText = nom + " " + prenom;
  document.getElementById("coordonnes").innerText = "Date de naissance :" + naissance + "\nAdresse :" + adresse + "\nTéléphone :" + telephone + "\nAdresse-mail :" + mail;
  document.getElementById("pro").innerText = profil;
  document.getElementById("comp").innerText = competences.join(", ");
  document.getElementById("int").innerText = interet;
  document.getElementById("lang").innerText = langues.join(", ");
  document.getElementById("cvExperience").innerText = experience.join("\n");
  document.getElementById("fo").innerText = formations.join(", ");

  document.getElementById("cvForm").style.display = "none";
  document.getElementById("fin").style.display = "none";
  document.getElementById("cv").style.display = "block";

  
}


  
