
<?PHP
include "header.php";
include "../../entities/offre.php";
include "../../core/offre.php";
if (isset($_GET['id'])){
	$evenementC=new offreC();
    $result=$evenementC->recupererOffre($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$description=$row['description'];
		$type=$row['type'];
		$date=$row['date'];
?>

<section id="main-content">
      <section class="wrapper site-min-height">
 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">offre</a>
        </li>
        <li class="breadcrumb-item active">Modification d'un offre</li>
      </ol>
      <!-- Example DataTables Card-->
    <div class="card card-register mx-auto mt-5">
      <div class="card-header custom">Modification</div>
      <div class="card-body" style="padding:40px;">

<form method="POST">
<table>

<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="description" value="<?PHP echo $description?>"></td>
</tr>
<tr>
<td>Type</td>
<td><input type="number" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="date" name="date" value="<?PHP echo $date ?>"></td>
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
	$offre=new Offre($_POST['nom'],$_POST['description'],$_POST['type'],$_POST['date']);
	$evenementC->modifierOffre($offre,$_POST['id_ini']);
}
	?>
</div>
</div>
</div>