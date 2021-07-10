<?php 

include_once "header.php";


include "../../core/offre.php";
$evenement1C=new OffreC();
$listeEvenements=$evenement1C->afficherOffre();

//var_dump($listeEvenements->fetchAll());
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
        <li class="breadcrumb-item active">Affichage des offres</li>
      </ol>

      <div class="card-header custom">La listes des Offres</div>
      <div class="card-body" style="padding:40px;">

<table class="table" border="1">
	<thead class="thead-dark" style="background-color: gray;color: white;">
<tr><td>Nom</td>
<td>Description</td>
<td>Type</td>
<td>Date</td>
<td>supprimer</td>
<td>modifier</td>
</tr>
</thead>
<tbody>
<?PHP
foreach($listeEvenements as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><form method="POST" action="../supprimerOffre.php">
	<input type="submit" class="btn btn-danger" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a class="btn btn-primary" href="modifierOffre.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?></tbody>
</table>

      </div>
    </div>
      


    


