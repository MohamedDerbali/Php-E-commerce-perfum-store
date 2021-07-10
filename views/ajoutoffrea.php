<?PHP
include "../entities/offre.php";
include "../core/offre.php";


if ( isset($_POST['ajouter'])){
$offre1=new Offre($_POST['nom'],$_POST['type'],$_POST['description'],$_POST['date']);

$offre2=new OffreC();
$offre2->ajouterOffre($offre1);
header('Location: backoffice/AfficherOfre.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>