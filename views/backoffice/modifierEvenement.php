<?php

include_once "header.php";

include "../../entities/evenement.php";
include "../../core/evenementC.php";
if (isset($_GET['id'])){
	$evenementC=new EvenementC();
    $result=$evenementC->recupererEvenement($_GET['id']);
	foreach($result as $row){
		
		$nom=$row['nom'];
		$heure_deb=$row['heure_deb'];
		$heure_fin=$row['heure_fin'];
		$image=$row['image'];
?>

<section id="main-content">
      <section class="wrapper site-min-height">
 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Evenement</a>
        </li>
        <li class="breadcrumb-item active">Affichage des Evenements</li>
      </ol>
      <!-- Example DataTables Card-->
    <div class="card card-register mx-auto mt-5">
      <div class="card-header custom">La listes des Evenements</div>
      <div class="card-body" style="padding:40px;">

<form method="POST">
<table>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Heure debut</td>
<td><input type="text" name="heure_deb" value="<?PHP echo $heure_deb?>"></td>
</tr>
<tr>
<td>Heure fin</td>
<td><input type="number" name="heure_fin" value="<?PHP echo $heure_fin ?>"></td>
</tr>
<tr>
<td>Image</td>
<td><input type="text" name="image" value="<?PHP echo $image ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$evenement=new Evenement($_POST['nom'],$_POST['heure_deb'],$_POST['heure_fin'],$_POST['image']);
	$evenementC->modifierEvenement($evenement,$_POST['id_ini']);
	//echo $_POST['id_ini'];
	//header('Location: afficherEvenement.php');
}
?>
</div>
</div>
</div>
