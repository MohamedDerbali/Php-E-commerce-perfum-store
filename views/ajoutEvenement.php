<?PHP
include "../entities/evenement.php";
include "../core/evenementC.php";

if ( isset($_POST['nom']) and isset($_POST['heure_deb']) and isset($_POST['heure_fin']) and isset($_POST['image'])){
$evenement1=new Evenement($_POST['nom'],$_POST['heure_deb'],$_POST['heure_fin'],$_POST['image']);
//Partie2
/*
var_dump($evenement1);
}
*/
//Partie3
$evenement1C=new EvenementC();
$evenement1C->ajouterEvenement($evenement1);
header('Location: backoffice/afficherEvenement.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>