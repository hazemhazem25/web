function reset() {
    document.getElementById("f").reset();
}

function envoyer(){

var verif = 0;

if (f.rep2.value != "" && f.cas.value.length > 0){
alert("Vous ne pouvez pas répondre en même temps aux boutons radio et au champ autres");
}
else{
verif ++;
}

var valueDate = document.getElementById('myDate').value;


if(verif == 1){
if (document.getElementById('q0r1').checked || document.getElementById('q0r2').checked)
{
var an = valueDate.substring(0,valueDate.indexOf("-") );
var courant = "2017";
var calculan = Number(courant) - Number(an);
alert("Vous fumez depuis  " + calculan + "  an(s). Attention à votre santé !");
}
else{
alert("Félicitations, vous êtes un non-fumeur, profitez de la vie !");
}
}


}