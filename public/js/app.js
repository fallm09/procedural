/*var test=document.forms["inscription"];
console.log(test);
*/
/*document.forms["inscription"].addEventListener("submit", function(e) {
 
	var erreur;
 
	var inputs = document.getElementsByTagName("input");
	for (var i=0; i< inputs.length; i++) {
		console.log(inputs[i]) ;
	if (inputs [i].value=="") {
		erreur="Veuillez renseigner les champs";
		}
	}

    if(erreur) {
        e.preventDefault();
		  document.getElementById("erreur").innerHTML = erreur;
		  return false;
}   else {
           alert('Formulaire envoyé !') ;
}
 
	
});*/


/*var boutonpourcacher=document.getElementById("n");
boutonpourcacher.addEventListener("click",seck);
function seck(e){


var leformulaireacacher=document.getElementById("container");
leformulaireacacher.style.display="none";


var leformulaireacacher=document.getElementById("wrapper1");
leformulaireacacher.style.display="none";

var leformulaireacacher=document.getElementById("menu");
leformulaireacacher.style.display="none";


var leformulaireacacher=document.getElementById("physique");
leformulaireacacher.style.display="none";

}

var boutonpourafficher=document.getElementById("n");
boutonpourafficher.addEventListener("click",malik);
function malik(e){

var leformulaireacacher=document.getElementById("container");
leformulaireacacher.style.display="";
}*/

var nom=document.getElementById("name");
var prenom=document.getElementById("Prenom");
var adresse=document.getElementById("adresse");
var email=document.getElementById("email");
var telephone=document.getElementById("telephone");
var entreprise=document.getElementById("entreprise");
var raisonSocial=document.getElementById("raisonSocial");
var envoyer=document.getElementById("envoyer");
var nom1=document.getElementById("name1");
var prenom1=document.getElementById("prenom1");
var adresse1=document.getElementById("adresse1");
var email1=document.getElementById("email1");
var telephone1=document.getElementById("telephone1");
var salaire1=document.getElementById("salaire1");
var compte1=document.getElementById("compte1");
var profession1=document.getElementById("profession1");
var envoyer1=document.getElementById("envoyer1");
var name2=document.getElementById("name2");
var prenom2=document.getElementById("prenom2");
var adresse2=document.getElementById("adresse2");
var telephone2=document.getElementById("telephone2");
var envoyer2=document.getElementById("envoyer2"); 
var name3=document.getElementById("name3");
var prenom3=document.getElementById("prenom3");
var adresse3=document.getElementById("adresse3");
var telephone3=document.getElementById("telephone3");
var CNI=document.getElementById("CNI");
var email3=document.getElementById("email3");
var envoyer3=document.getElementById("envoyer3");
var nomManquant=document.getElementById("nom_manquant");
var prenomManquant=document.getElementById("Prenom_manquant");
var adressemanquant=document.getElementById("adresse_manquant");
var emailManquant=document.getElementById("email_manquant");
var telephoneManquant=document.getElementById("telephone_manquant");
var entrepriseManquant=document.getElementById("entreprise_manquant")
var socialManquant=document.getElementById("social_manquant");
var nom1Manquant=document.getElementById("name1_manquant");
var prenom1Manquant=document.getElementById("prenom1_manquant");
var adresse1Manquant=document.getElementById("adresse1_manquant");
var email1Manquant=document.getElementById("email1_manquant");
var telephone1Manquant=document.getElementById("telephone1_manquant");
var salaire1Manquant=document.getElementById("salaire1_manquant");
var compte1Manquant=document.getElementById("compte1_manquant");
var profession1Manquant=document.getElementById("profession1_manquant");















//permet d'indiquer que si l'information n'est pas bien traité son action ne peu pas etre prise en compte
envoyer.addEventListener('click',f_valide);
function f_valide(e){

if(nom.value==""){
	e.preventDefault();
	nomManquant.textContent="remplir ce champ";
	nomManquant.style.color="red";
	
}

if(Prenom.value=="") {
	e.preventDefault();
	prenomManquant.textContent="Veuillez remplir ce  champ";
	prenomManquant.style.color="red";
}


if (adresse.value==""){
	e.preventDefault();
	adressemanquant.textContent="remplir l'adresse";
	adressemanquant.style.color="red";
	}

if(email.value==""){
	e.preventDefault();
	emailManquant.textContent="remplir ce champ";
	emailManquant.style.color="red";
	}
	

if(telephone.value==""){
	e.preventDefault();
	telephoneManquant.textContent ="remplir ce champ";
	telephoneManquant.style.color="red";
}

if(entreprise.value==""){
	e.preventDefault();
	entrepriseManquant.textContent="remplir ce champ";
	entrepriseManquant.style.color="red";
}
if(raisonSocial.value==""){
	e.preventDefault();
	socialManquant.textContent="remplir ce champ";
	socialManquant.style.color="red";	
}
if(nom1.value==""){
	e.preventDefault();
	nom1Manquant.textContent="remplir ce champ";
	nom1Manquant.style.color="red"
}
if(prenom1.value==""){
	e.preventDefault();
	prenom1Manquant.textContent="remplir ce champ";
	prenomManquant.style.color="red"
}
if(adresse1.value=""){
	e.preventDefault();
	adresse1Manquant.textContent="remplir ce champ";
	adresse1Manquant.style.color="red";
}
if(salaire1.value=""){
	salaire1Manquant.textContent="remplir ce champ";
	salaire1Manquant.style.color="red";

}
if(email.value=""){
	e.preventDefault();
	email1Manquant.textContent="remplir ce champ";
	email1Manquant.style.color="red";
}
if(telephone1.value=""){
	e.preventDefault();
	telephone1Manquant.textContent="remplir  ce champ";
	telephone1Manquant.style.color="red";
}
if(compte1.value=""){
	e.preventDefault();
	compte1Manquant.textContent="remplir ce champ";
	compte1Manquant.style.color="red";
}
if(profession1.value=""){
	e.preventDefault();
	profession1Manquant.textContent="remplir ce champ";
	profession1Manquant.style.color="red";

}



































}












/*var btn_moral=document.getElementById("btn_moral");
var btn_salarie=document.getElementById("btn_salarie");
var btn_non_salarie=document.getElementById("btn_non_salarie");
var btn_physique=document.getElementById("btn_physique");

var client_moral=document.getElementById("client_moral");
var client_salarie=document.getElementById("client_salarie");
var non_salarie=document.getElementById("non_salarie");
var physique=document.getElementById("physique");*/è



/*function seck_moral(){
	client_moral.style.display="block";
    client_salarie.style.display="none";
	non_salarie.style.display="none";
	physique.style.display="none";
}
 window. onload =function() {
	client_moral.style.display="none";
    client_salarie.style.display="none";
	non_salarie.style.display="none";
	physique.style.display="none";
}  



function seck_salaire(){
	client_moral.style.display="none";
    client_salarie.style.display="block";
	non_salarie.style.display="none";
	physique.style.display="none";
}


function seck_non_salaire(){
	client_moral.style.display="none";
    client_salarie.style.display="none";
	non_salarie.style.display="block";
	physique.style.display="none";
}

function seck_physique(){
	client_moral.style.display="none";
    client_salarie.style.display="none";
	non_salarie.style.display="none";
	physique.style.display="block";
}*/




