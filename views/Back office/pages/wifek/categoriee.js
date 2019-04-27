function test(){
	var x=f.id_categorie.value;
	var y=f.nom_categorie.value;

	if(y.length==0 || x.length==0 )
	{
		alert("Il faut remplir Tout les champs!");
		return false;
		
	}
	if(y=="lunettes" || y=="montre" || y=="lentilles")
	{
		alert("Veuillez entrer lunettes ou montre ou lentilles");
		document.f.nom_categorie.focus();

	}


}