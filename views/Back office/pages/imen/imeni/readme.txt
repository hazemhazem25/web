Statistique graphique (composant artichow)------------------------------------------
Url     : http://codes-sources.commentcamarche.net/source/47171-statistique-graphique-composant-artichowAuteur  : crazygogoDate    : 03/08/2013
Licence :
=========

Ce document intitulé « Statistique graphique (composant artichow) » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

Une librairie tr&egrave;s int&eacute;ressante pour les statistiques: <a href='ht
tp://www.artichow.org' target='_blank'>http://www.artichow.org</a>
<br />Mais j
e n'ai rien trouv&eacute; de &quot;pr&ecirc;t &agrave; l'emploi&quot; pour cette
 librairie, donc je m'y suis mis, pour l'instant je ne g&egrave;re que les camem
berts et les courbes mais il est tr&egrave;s simple d'&eacute;tendre le syst&egr
ave;me aux autres types de graphique (d&egrave;s que je le fais je mettrais &agr
ave; jour la source).
<br />
<br />Normalement il vous suffit de mettre l'incl
ude et vous pouvez cr&eacute;er un graphique avec preload en quelques lignes de 
code !!! Dans les exemples les tableaux de donn&eacute;es sont en dur mais ils p
euvent tr&egrave;s bien provenir d'une base de donn&eacute;es !!
<br />
<br />
Attention le dossier 'cache' situ&eacute; dans le dossier 'artichow-1.1.0' doit 
avoir les droits d'&eacute;criture (c'est la que les png sont g&eacute;n&eacute;
r&eacute;s)
<br />
<br />Certains vont dire que ma source est pas propre, que 
j'aurais du faire de l'objet, du PHP5 etc...etc... en fait j'ai fais ce que j'ai
 pu avec ce que j'avais (limit&eacute; &agrave; PHP 4.3) par contre je prends to
utes les critiques constructives et les propositions d'am&eacute;lioration !
<b
r /><a name='source-exemple'></a><h2> Source / Exemple : </h2>
<br /><pre clas
s='code' data-mode='basic'>
&lt;?php
session_start();
?&gt;
&lt;html&gt;
&l
t;head&gt;
&lt;title&gt;Exemple MyArtiChow&lt;/title&gt;
&lt;/head&gt;
&lt;bo
dy&gt;
&lt;a href=&quot;index2.php&quot;&gt;Version sans anti-alias&lt;/a&gt;

&lt;?php
// Permet de lancer un traitement lorsque toutes les images sont charg
ées...
$checkStatImagesOnAllComplete = 'alert(&quot;Toutes les images sont char
gées !&quot;);';

// Include avec toutes mes fonctions qui vont bien...
inclu
de('artichow-1.1.0/statistiques_include.php');

/*****************************
************************* LES CAMEMBERTS ***************************************
**************/

/*********   EXEMPLE 1 (simple)   **********/

// Titre du 
camembert
$title = &quot;EXEMPLE 1 (simple) :&quot;;

// Largeur du camembert

$width = 750;

// Hauteur du camembert
$height = 400;

// Tableau des lég
endes
$legend = array('Titi','Toto','Tata','Les autres');

// Tabeau des vale
urs
$data = array(38,28,7,37);

// On crée l'image
insertStatImage(1,$width,
$height,$title,$legend,$data,'');

echo'&lt;/br&gt;&lt;/br&gt;';

/*********
   EXEMPLE 2 (mise en forme des légendes)   **********/

// Titre du camembert

$title = &quot;EXEMPLE 2 (mise en forme des légendes) :&quot;;

// Largeur d
u camembert
$width = 750;

// Hauteur du camembert
$height = 400;

// Tabl
eau des légendes
$legend = array('ABCDEF','GHIJKL','MNOPQRS','TUVWXYZ');

// 
Tabeau des valeurs
$data = array(110,25,86,42);

// On met en forme les légen
des
foreach($legend as $key =&gt; $value){
	if(strlen($value)&gt;30){
		$lbl 
= substr($value,0,27).'...';
	}
	else{
		$lbl = str_pad($value,30,'.');
	}

	$legends[] = str_pad($lbl,35-strlen($data[$key]),'.').$data[$key];
	$datas[] =
 $data[$key];
}

// On crée l'image
insertStatImage(1,$width,$height,$title,
$legends,$datas,'');

echo'&lt;/br&gt;&lt;/br&gt;';

/*********   EXEMPLE 3 
(tri par ordre décroissant)   **********/

// Titre du camembert
$title = &qu
ot;EXEMPLE 3 (tri par ordre décroissant) :&quot;;

// Largeur du camembert
$w
idth = 750;

// Hauteur du camembert
$height = 400;

// Tableau des légende
s
$legend = array('Titi','Toto','Tata','Les autres');

// Tabeau des valeurs

$data = array(16,25,2,34);

// Tri par ordre décroissant
array_multisort($da
ta, SORT_DESC, $legend, SORT_ASC);

// On crée l'image
insertStatImage(1,$wid
th,$height,$title,$legend,$data,'');

echo'&lt;/br&gt;&lt;/br&gt;';

/******
***   EXEMPLE 4 (couleurs personnalisées)   **********/

// Titre du camembert

$title = &quot;EXEMPLE 4 (couleurs personnalisées) :&quot;;

// Largeur du c
amembert
$width = 750;

// Hauteur du camembert
$height = 400;

// Tableau
 des légendes
$legend = array('Titi','Toto','Tata','Les autres');

// Tabeau 
des valeurs
$data = array(16,25,2,34);

// Tabeau des couleurs
$color = arra
y('#92DDF3','#5C69AA','#A35E9E','#DF6C6C');

// On met en forme les légendes

foreach($legend as $key =&gt; $value){
	if(strlen($value)&gt;30){
		$lbl = sub
str($value,0,27).'...';
	}
	else{
		$lbl = str_pad($value,30,'.');
	}
	$leg
ends2[] = str_pad($lbl,35-strlen($data[$key]),'.').$data[$key];
	$datas2[] = $d
ata[$key];
	$colors2[] = $color[$key];
}

// Tri par ordre décroissant
arra
y_multisort($datas2, SORT_DESC, $legends2, SORT_ASC, $colors2);

// On crée l'
image
insertStatImage(1,$width,$height,$title,$legends2,$datas2,$colors2);

e
cho'&lt;/br&gt;&lt;/br&gt;';

/*********   EXEMPLE 5 (on passe une seule coule
ur et il s'occupe du dégradé)   **********/

// Titre du camembert
$title = &
quot;EXEMPLE 5 (dégradé de couleurs) :&quot;;

// Largeur du camembert
$width
 = 750;

// Hauteur du camembert
$height = 400;

// Tableau des légendes
$
legend = array('Titi','Toto','Tata','Les autres');

// Tabeau des valeurs
$da
ta = array(38,28,7,37);

// On met en forme les légendes
foreach($legend as $
key =&gt; $value){
	if(strlen($value)&gt;30){
		$lbl = substr($value,0,27).'..
.';
	}
	else{
		$lbl = str_pad($value,30,'.');
	}
	$legends3[] = str_pad($l
bl,35-strlen($data[$key]),'.').$data[$key];
	$datas3[] = $data[$key];
}

// 
Tabeau des couleurs (on passe la couleur de base, il va créer un dégradé)
$colo
r = array('#5C69AA');

// Tri par ordre décroissant
array_multisort($datas3, 
SORT_DESC, $legends3, SORT_ASC);

// On crée l'image
insertStatImage(1,$width
,$height,$title,$legends3,$datas3,$color);

echo'&lt;/br&gt;&lt;/br&gt;';

/
****************************************************** LES COURBES *************
****************************************/

/*********   EXEMPLE 1 (Courbe simp
le...)   **********/

// Tableau des légendes
$legend = array('Titi','Toto');


// Tabeau des valeurs
$data2[] = array(5,11,10,8,12,0);
$data2[] = array(3
0,25,28,29,34,25);

// Tabeau des couleurs
$color2 = array('#5C69AA','#DF6C6C
');

$title = &quot; EXEMPLE 1 (Courbe simple...)&quot;;
$width = 750;
$heig
ht = 500;

insertStatImage(2,$width,$height,$title,$legend,$data2,$color2);


echo'&lt;/br&gt;&lt;/br&gt;';

/*********   EXEMPLE 2 (Des belles courbes...)
   **********/

// Tableau des légendes
$legend = array('Titi','Toto','Tata',
'Les autres');
// Mise en forme des légendes
foreach($legend as $key =&gt; $va
lue){
	if(strlen($value)&gt;15){
		$lbl = substr($value,0,14).'.';
	}
	else{

		$lbl = str_pad($value, 15 , ' ');
	}
	$legend[$key] = $lbl;
}

// Tabea
u des valeurs
$data3[] = array(0,9,8,0,5,15);
$data3[] = array(12,16,18,25,28,
20);
$data3[] = array(5,11,10,8,12,0);
$data3[] = array(30,25,28,29,34,25);


// Tabeau des couleurs
$color3 = array('#92DDF3','#5C69AA','#A35E9E','#DF6C6C'
);

// Tableau des libelles de l'axe des abcisses
$lblAbs = array('01/2008','
02/2008','03/2008','04/2008','05/2008','06/2008');

$title = &quot; EXEMPLE 2 
(Des belles courbes...)&quot;;
$width = 750;
$height = 500;

insertStatImage
(2,$width,$height,$title,$legend,$data3,$color3,$lblAbs);

echo'&lt;/br&gt;&lt
;/br&gt;';

?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<br /><a name='conclu
sion'></a><h2> Conclusion : </h2>
<br />Attention le dossier 'cache' situ&eacu
te; dans le dossier 'artichow-1.1.0' doit avoir les droits d'&eacute;criture (c'
est la que les png sont g&eacute;n&eacute;r&eacute;s)
<br />
<br />Tout est da
ns le zip !
