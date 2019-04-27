<?php
include "C:/wamp/www/tryyyy/core/produitC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les produits </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

														  <th scope="col">id produits</th>
													      <th scope="col">type produits</th>
													      <th scope="col">quantités</th>
													      <th scope="col">disponibilité</th>
													      <th scope="col">id catégorie</th>
													      <th scope="col">marque</th>
													      <th scope="col">pour</th>
													      <th scope="col">prix</th>
													      <th scope="col">description</th>
													      <th scope="col">image</th>
													</tr>
													
		<?php
	$prodc=new produitC();
	$listeprod=$prodc->afficherProduits();
		foreach($listeprod as $produit) {
			?>
		  <tr>
												      <td> <?php  echo $produit['id_produit']; ?> </td> 
												      <td> <?php echo $produit ['type_produit']; ?> </td>
												      <td> <?php echo $produit ['quantite']; ?> </td>
												      <td> <?php echo $produit ['disponibilite']; ?> </td>
												      <td> <?php echo $produit ['id_categorie']; ?> </td>
												      <td> <?php echo $produit ['marque']; ?> </td>
												      <td> <?php echo $produit ['pour']; ?> </td>
												      <td> <?php echo $produit ['prix']; ?> </td>
												      <td> <?php echo $produit ['description']; ?> </td>
												      <td> <img  style="width: 20px;height: 20px;" src="productimg/<?php echo $produit ['image']; ?>"> </td>
												              
												    </tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>