<?PHP
include "../core/evenementC.php";
$evenementC=new EvenementC();
if (isset($_POST["id"])){
	$evenementC->supprimerEvenement($_POST["id"]);
	header('Location: backoffice/afficherEvenement.php');
}

?>