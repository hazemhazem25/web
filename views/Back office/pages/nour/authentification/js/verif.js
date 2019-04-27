function test(){
var id = f.id_categorier.value;
var nom = f.nom_categorie.value;
if( id.length== 0 || nom.length== 0)
{
alert("Vérifier votre login et votre de mot de passe");
}
else
{
alert('Catégorie '+ nom + ' avec la référence de ' + id + , 'a été ajouter avec succée!');
} 
}