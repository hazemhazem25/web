function test()
{


var id=f.idee.value;
var nom=f.namee.value;




if(id.length==0 || nom.length==0 )
{
	alert("Veuillez s'il vous plait remplir le champs");
}

else if(nom.length>4)
{
	alert("numéro doit être compris entre 1 et 9999");
}
else 
{
for (var i = 0; i <= nom.length; i++) {
	if(nom[i]<"1" || nom[i]>"9")
	{

		alert("Veuillez saisir un chiffre");
	}




}

}

}


