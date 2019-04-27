


function verifier_pseudo(input_pseudo)
        {
              
            if(input_pseudo.value.length < 4 || input_pseudo.value.length > 25)
            {
                document.getElementById("pseudoerror").style.display = 'block';
                document.getElementById('pseudoerror').innerHTML = "Vous n'avez pas entré correctement votre pseudo";
                 document.getElementById("pseudoerror").style.opacity=100.0;
            }
            else
            {
                document.getElementById("pseudoerror").style.display = 'none';
            }
        }

function test()
{


var id=f.idee.value;
var nom=f.namee.value;
var date=f.datee.value;
var remise=f.rem.value;
var num=f.num.value;
var dat=new Date();
var des=f.desc.value;
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

if(id.length==0 || nom.length==0 || date.length==0 ||  remise.length==0 || des.length==0 || num.length==0)
{
	alert("Veuillez s'il vous plait remplir tout le champs");

}
else
{ if(remise>100 || remise<0)
{alert("remise doit etre entre 1 et 99 %");}

else if(id[0]!='#')
{
	alert("identifiant d'un produit doit commencer par #");
} 
else if (date<real) {

	alert(" date d'ajout :une date passé");
} else if(y!=year)
{
	alert("Veuillez saisir l'année courante");
}
else
{

for (var i = 0; i <= nom.length; i++) 
{
	if(nom[i]<"a" || nom[i]>"z")
	{
		alert("titre promotion :Veuillez saisir un nom valide");
	} break;
}
for (var i = 0; i <= num.length; i++) {
	if(num[i]<"1" || num[i]>"9")
	{

		alert("numero promotion :Veuillez saisir un chiffre");
	}break;




}


}

}


}