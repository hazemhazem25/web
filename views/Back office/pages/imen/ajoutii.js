// SELECTING ALL TEXT ELEMENTS
var adresse = document.forms['f']['mail'];

/*date-*/


// SELECTING ALL ERROR DISPLAY ELEMENTS
var adresse = document.getElementById('adresse_erreur');

// SETTING ALL EVENT LISTENERS

// validation function
function Validate() {
  // id produit
 if (adresse.value == "") {
    adresse.style.border = "1px solid red";
    document.getElementById('adresse_div').style.color = "red";
    adresse_erreur.textContent = "Veuillez remplir le champs";
    id.focus();
    return false;
  }
  // id produit
  
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
