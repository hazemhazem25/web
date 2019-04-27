
function test2()
{


var nom=f.nameee.value;
var date=f.dateee.value;
var remise=f.reme.value;
var num=f.nume.value;
var dat=new Date();
var des=f.desce.value;
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

if(nom.length==0 || date.length==0 ||  remise.length==0 || des.length==0 || num.length==0)
{
	alert("Veuillez s'il vous plait remplir tout le champs");

}
else
{ if(remise>100 || remise<0)
{alert("remise doit etre entre 1 et 99 %");}


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


