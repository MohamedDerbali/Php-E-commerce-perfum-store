<?PHP
include "../core/offre.php";
$offre=new offreC();
if (isset($_POST["id"])){
	$offre->supprimerOffre($_POST["id"]);
	header('Location: backoffice/AfficherOfre.php');
}

?>