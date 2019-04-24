var ALERT_TITLE = "Oops!";
var ALERT_BUTTON_TEXT = "Ok";

if(document.getElementById) {
    window.alert = function(txt) {
        createCustomAlert(txt);
    }
}

function createCustomAlert(txt) {
    d = document;

    if(d.getElementById("modalContainer")) return;

    mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
    mObj.id = "modalContainer";
    mObj.style.height = d.documentElement.scrollHeight + "px";

    alertObj = mObj.appendChild(d.createElement("div"));
    alertObj.id = "alertBox";
    if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
    alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
    alertObj.style.visiblity="visible";

    h1 = alertObj.appendChild(d.createElement("h1"));
    h1.appendChild(d.createTextNode(ALERT_TITLE));

    msg = alertObj.appendChild(d.createElement("p"));
    //msg.appendChild(d.createTextNode(txt));
    msg.innerHTML = txt;

    btn = alertObj.appendChild(d.createElement("a"));
    btn.id = "closeBtn";
    btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
    btn.href = "#";
    btn.focus();
    btn.onclick = function() { removeCustomAlert();return false; }

    alertObj.style.display = "block";


}

function removeCustomAlert() {
    document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}

function test(){
var mail = connexion.mail.value;
var pwd = connexion.pwd.value;
var a = "@";
var pt = ".";
if( mail.length== 0 || pwd.length== 0)
{

alert(" Vérifier votre login et votre de mot de passe");
}
else{
var prenom = mail.substring(0,mail.indexOf(pt) );
var nom = mail.substring(mail.indexOf(pt) + 1,mail.indexOf(a));
//alert('Bienvenue ' + prenom + " " + nom ) ;
//alertBox.display="block";
window.location="clients.html";
//alertBox.display="none";

}
}