function teste()
{
var numero=f.num.value;
var mail=f.mail.value;
var ajout=f.ajout.value;

if(numero.length==0 || mail.length==0 || ajout.length==0)
{

	alert("Veuillez remplir tout le champs");
}
else if(mail.indexOf("@hotmail.com")==-1 || mail.indexOf("@yahoo.fr")==-1 || mail.indexOf("@gmail.com")==-1 )

{
	alert("mail incorrecte");
	
}

else 
{ for(var i=0; i<= numero.length; i++)
	{
		
              if( numero[i]<"1" || numero[i]>"9")
			{alert("Veuillez saisir un chiffre");
        break;
	  }
		
	}
} 
}