// SELECTING ALL TEXT ELEMENTS
var id_produit = document.forms['f']['idee'];
var num_promotion = document.forms['f']['num'];
var titre = document.forms['f']['namee'];
var remise = document.forms['f']['rem'];
var date = document.forms['f']['datee'];
var description=document.forms['f']['desc'];
var image=document.forms['f']['image'];
/*date-*/


// SELECTING ALL ERROR DISPLAY ELEMENTS
var id_erreur = document.getElementById('id_erreur');
var num_erreur = document.getElementById('num_erreur');
var titre_erreur = document.getElementById('titre_erreur');
// SETTING ALL EVENT LISTENERS
id_produit.addEventListener('blur', nameVerify, true);
num_promotion.addEventListener('blur', emailVerify, true);
titre.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
  // id produit
 if (id_produit.value == "") {
    id_produit.style.border = "1px solid red";
    document.getElementById('id_div').style.color = "red";
    id_erreur.textContent = "Veuillez remplir le champs";
    id_produit.focus();
    return false;
  }
  // id produit
  if (id_produit.value.length > 5) {
    id_produit.style.border = "1px solid red";
    document.getElementById('id_div').style.color = "red";
    id_erreur.textContent = "ID produit doit comporter 5 caractères";
    id_produit.focus();
    return false;
  } else
   { for(var i=0;i<id_produit.value.length;i++)
if(id_produit.value[i]<'0' || id_produit.value[i]>'9')
    {id_produit.style.border = "1px solid red";
    document.getElementById('id_div').style.color = "red";
    id_erreur.textContent = "caractères invalide";
    id_produit.focus();
    return false;}
  }
  // nuum_promotion
  if (num_promotion.value == "") {
    num_promotion.style.border = "1px solid red";
    document.getElementById('num_div').style.color = "red";
    num_erreur.textContent = "Veuillez remplir le champs";
    num_promotion.focus();
    return false;
  } else
   { for(var i=0;i<num_promotion.value.length;i++)
if(num_promotion.value[i]<'0' || num_promotion.value[i]>'9')
    {id_produit.style.border = "1px solid red";
    document.getElementById('num_div').style.color = "red";
    num_erreur.textContent = "caractères invalide";
    num_promotion.focus();
    return false;}
  }
    if (num_promotion.value.length>5) {
    num_promotion.style.border = "1px solid red";
    document.getElementById('num_div').style.color = "red";
    num_erreur.textContent = "Num promotion ne dépasse pas 5 caractères ";
    num_promotion.focus();
    return false;
  }
  // titre
  if (titre.value == "") {
   titre.style.border = "1px solid red";
    document.getElementById('titre_div').style.color = "red";
    titre.style.border = "1px solid red";
    titre_erreur.textContent = "Veuillez saisir le champs";
    titre.focus();
    return false;
  }
    else
   { for(var i=0;i<titre.value.length;i++)
if(titre.value[i]<'a' || titre.value[i]>'z')
    {titre.style.border = "1px solid red";
    document.getElementById('titre_div').style.color = "red";
    titre_erreur.textContent = "caractères invalide";
    titre.focus();
    return false;}
  }
//remise

if (remise.value == "") {
   remise.style.border = "1px solid red";
    document.getElementById('remise_div').style.color = "red";
   remise.style.border = "1px solid red";
    remise_erreur.textContent = "Veuillez saisir le champs";
    titre.focus();
    return false;
  }
    else
   { for(var i=0;i<remise.value.length;i++)
if(remise.value[i]<'0' || remise.value[i]>'80')
    {remise.style.border = "1px solid red";
    document.getElementById('remise_div').style.color = "red";
    remise_erreur.textContent = "caractères invalide";
    remise.focus();
    return false;}
  }

/**********************************/
/*date*/
if (date.value == "") {
   date.style.border = "1px solid red";
    document.getElementById('date_div').style.color = "red";
    date.style.border = "1px solid red";
    date_erreur.textContent = "Veuillez saisir le champs";
    date.focus();
    return false;}


  var dat=new Date();
var day=dat.getDate().toString();
var year=dat.getFullYear().toString();
var month=dat.getMonth().toString();
var y=date.substr(0,4);
if(month.length==1 )
{ var m=parseInt(month)+1;
  var p=m.toString();
  month="0"+m;
}else if(day.length==1)
{day="0"+day;
}
var real=year+"-"+month+"-"+day;

   if (date<real) {
 date.style.border = "1px solid red";
    document.getElementById('date_div').style.color = "red";
    date.style.border = "1px solid red";
    date_erreur.textContent = "date d'ajout :une date passé";
    date.focus();
    return false;}
    else (y!=year)
    {
 date.style.border = "1px solid red";
    document.getElementById('date_div').style.color = "red";
    date.style.border = "1px solid red";
    date_erreur.textContent = "Veuillez saisir l'année courante";
    date.focus();
    return false;

    }

  }
  // check if the two passwords match
  /*if (titre.value != remise.value) {
    titre.style.border = "1px solid red";
    document.getElementById('remise_div').style.color = "red";
    titre.style.border = "1px solid red";
    titre_erreur.innerHTML = "The two passwords do not match";
    return false;
  }*/

// event handler functions
function nameVerify() {
  if (id_produit.value != "") {
   id_produit.style.border = "1px solid #5e6e66";
   document.getElementById('id_div').style.color = "#5e6e66";
   id_erreur.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (num_promotion.value != "") {
  	num_promotion.style.border = "1px solid #5e6e66";
  	document.getElementById('num_div').style.color = "#5e6e66";
  	num_erreur.innerHTML = "";
  	return true;
  }
}
function passwordVerify() {
  if (titre.value != "") {
  	titre.style.border = "1px solid #5e6e66";
  	document.getElementById('remise_div').style.color = "#5e6e66";
  	document.getElementById('titre_div').style.color = "#5e6e66";
  	titre_erreur.innerHTML = "";
  	return true;
  }
  if (titre.value === titre.value) {
  	titre.style.border = "1px solid #5e6e66";
  	document.getElementById('remise_div').style.color = "#5e6e66";
  	titre_erreur.innerHTML = "";
  	return true;
  }
}