<?php
include "../../../../core/commandeC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les commandes </h1>
		<table >
		<tr>

														   <th>num commandes</th>
                                                <th>total commandes</th>
                                                <th>adresse livraison</th>
                                                <th>état</th>
                                                
													</tr>
													
		<?php
	$comm=new commandeC();
$listC=$comm->affichercommandes();
		foreach($listC as $row) {
			?>
		  <tr>
												      	<td><?PHP echo $row['numC']; ?></td>
													<td><?PHP echo $row['totalC']; ?></td>
													<td><?PHP echo $row['adresseC']; ?></td>
													<td><?PHP echo $row['etatC']; ?></td>
												      
												              
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
$pdf->Output('LesCommande.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>