function mobilier() {
    document.getElementById('mobilier').style.boxShadow = "inset -1px 0px 20px 6px #fff";
    document.getElementById('mobilier').style.zIndex = "1";
    document.getElementById('mobilier').style.filter = "blur(0px)"; 

    document.getElementById('immobilier').style.boxShadow = "inset 0px 0px 0px 0px #000";
    document.getElementById('immobilier').style.zIndex = "0";
    document.getElementById('immobilier').style.filter = "blur(7px)"; 
}

function immobilier() {
    document.getElementById('immobilier').style.boxShadow = "inset -1px 0px 20px 6px #fff";
    document.getElementById('immobilier').style.zIndex = "1";
    document.getElementById('immobilier').style.filter = "blur(0px)";

    document.getElementById('mobilier').style.boxShadow = "inset 0px 0px 0px 0px #000";
    document.getElementById('mobilier').style.zIndex = "0";
    document.getElementById('mobilier').style.filter = "blur(7px)"; 
}

//--------------------------------------------------------------------------------------------//

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("Topnav").style.height = "4vh";

    document.getElementById("TopnavA").style.height="4vh";
    document.getElementById("TopnavA").style.padding = "1vh 2.5vw";
    document.getElementById("TopnavA").style.fontSize = "13px"; 

    document.getElementById("TopnavB").style.height="4vh";
    document.getElementById("TopnavB").style.padding = "1vh 2.5vw";
    document.getElementById("TopnavB").style.fontSize = "13px"; 

    document.getElementById("TopnavC").style.height="4vh";
    document.getElementById("TopnavC").style.padding = "1vh 2.5vw";
    document.getElementById("TopnavC").style.fontSize = "13px"; 

    document.getElementById("TopnavD").style.height="4vh";
    document.getElementById("TopnavD").style.padding = "1vh 2.5vw";
    document.getElementById("TopnavD").style.fontSize = "13px"; 

    document.getElementById("TopnavDeconnexion").style.height="4vh";
    document.getElementById("TopnavDeconnexion").style.padding = "1vh 2.5vw";
    document.getElementById("TopnavDeconnexion").style.fontSize = "13px"; 

    document.getElementById("TopnavE").style.height="4vh";
    document.getElementById("TopnavE").style.padding = "1vh 2.5vw";
    document.getElementById("TopnavE").style.fontSize = "13px"; 

    document.getElementById("TopnavAjouter").style.height="4vh";
    document.getElementById("TopnavAjouter").style.padding = "1vh 2.5vw";
    document.getElementById("TopnavAjouter").style.fontSize = "13px"; 

      } else {
    document.getElementById("Topnav").style.height = "7vh";

    document.getElementById("TopnavA").style.height = "7vh";
    document.getElementById("TopnavA").style.padding="2.5vh 2.5vw";
    document.getElementById("TopnavA").style.fontSize = "17px"; 

    document.getElementById("TopnavB").style.height = "7vh";
    document.getElementById("TopnavB").style.padding="2.5vh 2.5vw";
    document.getElementById("TopnavB").style.fontSize = "17px";

    document.getElementById("TopnavC").style.height = "7vh";
    document.getElementById("TopnavC").style.padding="2.5vh 2.5vw";
    document.getElementById("TopnavC").style.fontSize = "17px";

    document.getElementById("TopnavD").style.height = "7vh";
    document.getElementById("TopnavD").style.padding="2.5vh 2.5vw";
    document.getElementById("TopnavD").style.fontSize = "17px";

    document.getElementById("TopnavDeconnexion").style.height = "7vh";
    document.getElementById("TopnavDeconnexion").style.padding="2.5vh 2.5vw";
    document.getElementById("TopnavDeconnexion").style.fontSize = "17px";

    document.getElementById("TopnavE").style.height = "7vh";
    document.getElementById("TopnavE").style.padding="2.5vh 2.5vw";
    document.getElementById("TopnavE").style.fontSize = "17px";

    document.getElementById("TopnavAjouter").style.height = "7vh";
    document.getElementById("TopnavAjouter").style.padding="2.5vh 2.5vw";
    document.getElementById("TopnavAjouter").style.fontSize = "17px";
  }
}

//--------------------------------------------------------------------------------------------//

function redirect() {
  window.location = "php/entiteViewer.php";
}

function mesEntites() {
  document.getElementById("iframe").src = "mesEntites.php";
}

function mesReservations() {
  document.getElementById("iframe").src = "mesReservations.php";
}

//--------------------------------------------------------------------------------------------//

function recuperationData(id, nom, desc, prix, lieu, img1, img2, img3, img4, img5, img6, proprietaire) {

  //console.log(id + " " + nom + " " + desc + " " + prix + " " + lieu + " " + img1 + " " + img2 + " " + img3 + " "+ img4 + " " + img5 + " " + img6 + " " + proprietaire);
  var idRecuperer = id;
  var nomRecuperer = nom;
  var descRecuperer = desc;
  var prixRecuperer = prix;
  var lieuRecuperer = lieu;
  var img1Recuperer = img1;
  var img2Recuperer = img2;
  var img3Recuperer = img3;
  var img4Recuperer = img4;
  var img5Recuperer = img5;
  var img6Recuperer = img6;
  var proprietaireRecuperer = proprietaire;
  //console.log(idRecuperer + " " + nomRecuperer + " " + descRecuperer + " " + prixRecuperer + " " + lieuRecuperer + " " + img1Recuperer + " " + img2Recuperer + " " + img3Recuperer + " " + img4Recuperer + " " + img5Recuperer + " " + img6Recuperer + " " + proprietaireRecuperer);


  localStorage.setItem('idRecuperer', id);
  var idRecuperer = localStorage.getItem('idRecuperer');
  console.log(idRecuperer);

  localStorage.setItem('nomRecuperer', nom);
  var nomRecuperer = localStorage.getItem('nomRecuperer');
  console.log(nomRecuperer);

  localStorage.setItem('descRecuperer', desc);
  var descRecuperer = localStorage.getItem('descRecuperer');
  console.log(descRecuperer);

  localStorage.setItem('prixRecuperer', prix);
  var prixRecuperer = localStorage.getItem('prixRecuperer');
  console.log(prixRecuperer);

  localStorage.setItem('lieuRecuperer', lieu);
  var lieuRecuperer = localStorage.getItem('lieuRecuperer');
  console.log(lieuRecuperer);

  localStorage.setItem('img1Recuperer', img1);
  var img1Recuperer = localStorage.getItem('img1Recuperer');
  console.log(img1Recuperer);

  localStorage.setItem('img2Recuperer', img2);
  var img2Recuperer = localStorage.getItem('img2Recuperer');
  console.log(img2Recuperer);

  localStorage.setItem('img3Recuperer', img3);
  var img3Recuperer = localStorage.getItem('img3Recuperer');
  console.log(img3Recuperer);

  localStorage.setItem('img4Recuperer', img4);
  var img4Recuperer = localStorage.getItem('img4Recuperer');
  console.log(img4Recuperer);

  localStorage.setItem('img5Recuperer', img5);
  var img5Recuperer = localStorage.getItem('img5Recuperer');
  console.log(img5Recuperer);

  localStorage.setItem('img6Recuperer', img6);
  var img6Recuperer = localStorage.getItem('img6Recuperer');
  console.log(img6Recuperer);

  localStorage.setItem('proprietaireRecuperer', proprietaire);
  var proprietaireRecuperer = localStorage.getItem('proprietaireRecuperer');
  console.log(proprietaireRecuperer);

};

function entiteData() {
  var getID = localStorage.getItem('idRecuperer');
  var getNom = localStorage.getItem('nomRecuperer');
  var getDesc = localStorage.getItem('descRecuperer');
  var getPrix = localStorage.getItem('prixRecuperer');
  var getLieu = localStorage.getItem('lieuRecuperer');
  var getImg1 = localStorage.getItem('img1Recuperer');
  var getImg2 = localStorage.getItem('img2Recuperer');
  var getImg3 = localStorage.getItem('img3Recuperer');
  var getImg4 = localStorage.getItem('img4Recuperer');
  var getImg5 = localStorage.getItem('img5Recuperer');
  var getImg6 = localStorage.getItem('img6Recuperer');
  var getProprietaire = localStorage.getItem('proprietaireRecuperer');

  document.getElementById("titreEntite").innerHTML = getNom;
  document.getElementById("desc").innerHTML = getDesc;
  document.getElementById("proprietaire").innerHTML = getProprietaire;
  document.getElementById("prix").innerHTML = getPrix + " €";
  document.getElementById("prix").style.fontWeight = "bold";
  document.getElementById("lieu").innerHTML = getLieu;
  document.getElementById("img1").src = "uploads/" + getImg1;
  document.getElementById("img2").src = "uploads/" + getImg2;
  document.getElementById("img3").src = "uploads/" + getImg3;
  document.getElementById("img4").src = "uploads/" + getImg4;
  document.getElementById("img5").src = "uploads/" + getImg5;
  document.getElementById("img6").src = "uploads/" + getImg6;
  document.getElementById("formID").value = getID;

  if (getImg2 == "" ) {
    document.getElementById("img2").src = "uploads/" + getImg1;
    document.getElementById("img2").style.opacity = "0";
  }
  
  if (getImg3 == "" ) {
    document.getElementById("img3").src = "uploads/" + getImg1;
    document.getElementById("img3").style.opacity = "0";
  }
  
  if (getImg4 == "" ) {
    document.getElementById("img4").src = "uploads/" + getImg1;
    document.getElementById("img4").style.opacity = "0";
  }
  
  if (getImg5 == "" ) {
    document.getElementById("img5").src = "uploads/" + getImg1;
    document.getElementById("img5").style.opacity = "0";
  }
  
  if (getImg6 == "" ) {
    document.getElementById("img6").src = "uploads/" + getImg1;
    document.getElementById("img6").style.opacity = "0";
  }
}

//--------------------------------------------------------------------------------------------//

function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}

//--------------------------------------------------------------------------------------------//

function recuperationDataModification(id, nom, desc, prix, lieu, img1, img2, img3, img4, img5, img6, proprietaire) {

  //console.log(id + " " + nom + " " + desc + " " + prix + " " + lieu + " " + img1 + " " + img2 + " " + img3 + " "+ img4 + " " + img5 + " " + img6 + " " + proprietaire);
  var idRecupererModif = id;
  var nomRecupererModif = nom;
  var descRecupererModif = desc;
  var prixRecupererModif = prix;
  var lieuRecupererModif = lieu;
  var img1RecupererModif = img1;
  var img2RecupererModif = img2;
  var img3RecupererModif = img3;
  var img4RecupererModif = img4;
  var img5RecupererModif = img5;
  var img6RecupererModif = img6;
  var proprietaireRecupererModif = proprietaire;
  //console.log(idRecupererModif + " " + nomRecupererModif + " " + descRecupererModif + " " + prixRecupererModif + " " + lieuRecupererModif + " " + img1RecupererModif + " " + img2RecupererModif + " " + img3RecupererModif + " " + img4RecupererModif + " " + img5RecupererModif + " " + img6RecupererModif + " " + proprietaireRecupererModif);


  localStorage.setItem('idRecupererModif', id);
  var idRecupererModif = localStorage.getItem('idRecupererModif');
  console.log(idRecupererModif);

  localStorage.setItem('nomRecupererModif', nom);
  var nomRecupererModif = localStorage.getItem('nomRecupererModif');
  console.log(nomRecupererModif);

  localStorage.setItem('descRecupererModif', desc);
  var descRecupererModif = localStorage.getItem('descRecupererModif');
  console.log(descRecupererModif);

  localStorage.setItem('prixRecupererModif', prix);
  var prixRecupererModif = localStorage.getItem('prixRecupererModif');
  console.log(prixRecupererModif);

  localStorage.setItem('lieuRecupererModif', lieu);
  var lieuRecupererModif = localStorage.getItem('lieuRecupererModif');
  console.log(lieuRecupererModif);

  localStorage.setItem('img1RecupererModif', img1);
  var img1RecupererModif = localStorage.getItem('img1RecupererModif');
  console.log(img1RecupererModif);

  localStorage.setItem('img2RecupererModif', img2);
  var img2RecupererModif = localStorage.getItem('img2RecupererModif');
  console.log(img2RecupererModif);

  localStorage.setItem('img3RecupererModif', img3);
  var img3RecupererModif = localStorage.getItem('img3RecupererModif');
  console.log(img3RecupererModif);

  localStorage.setItem('img4RecupererModif', img4);
  var img4RecupererModif = localStorage.getItem('img4RecupererModif');
  console.log(img4RecupererModif);

  localStorage.setItem('img5RecupererModif', img5);
  var img5RecupererModif = localStorage.getItem('img5RecupererModif');
  console.log(img5RecupererModif);

  localStorage.setItem('img6RecupererModif', img6);
  var img6RecupererModif = localStorage.getItem('img6RecupererModif');
  console.log(img6RecupererModif);

  localStorage.setItem('proprietaireRecupererModif', proprietaire);
  var proprietaireRecupererModif = localStorage.getItem('proprietaireRecupererModif');
  console.log(proprietaireRecupererModif);
}



function entiteDataModif() {
  var getIDModif = localStorage.getItem('idRecupererModif');
  var getNomModif = localStorage.getItem('nomRecupererModif');
  var getDescModif = localStorage.getItem('descRecupererModif');
  var getPrixModif = localStorage.getItem('prixRecupererModif');
  var getLieuModif = localStorage.getItem('lieuRecupererModif');
  var getImg1Modif = localStorage.getItem('img1RecupererModif');
  var getImg2Modif = localStorage.getItem('img2RecupererModif');
  var getImg3Modif = localStorage.getItem('img3RecupererModif');
  var getImg4Modif = localStorage.getItem('img4RecupererModif');
  var getImg5Modif = localStorage.getItem('img5RecupererModif');
  var getImg6Modif = localStorage.getItem('img6RecupererModif');
  var getProprietaireModif = localStorage.getItem('proprietaireRecupererModif');

  console.log(getIDModif);
  
  document.getElementById("idModif").value = getIDModif;
  
}

function redirectModif() {
  window.location = "ModifEntite.php";
}