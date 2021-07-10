<?PHP
include "../../core/produitC.php";
include_once "../../entities/Produit.php";

if (isset( $_GET['id_produit'])){
	echo $_GET['stock'];
    $produitC=new produitC();
	$produitC->valableProduit($_GET['id_produit'],$_GET['stock']);

	header('Location: afficherProduit.php');
}

?>
