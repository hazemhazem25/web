function verif()
{
   var x=f.id_produit.value;
   var y=f.type_produit.value;
   var z=f.quantite.value;
   var d=f.id_categorie.value;
   var t=f.marque.value;
   var a=f.pour.value;
   var b=f.prix.value;
   var g=f.description.value;
   var i=f.image.value;

	if(y.length==0 || x.length==0 || z.length==0 || d.length==0 || t.length==0 || a.length==0 || b.length==0 || g.length==0 || i.length==0 )
	{
		alert("Il faut remplir Tout les champs!");
		return false;
		
	}
}
