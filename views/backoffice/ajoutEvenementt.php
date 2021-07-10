<?php 

include "header.php";


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
        <li class="breadcrumb-item active">Ajouter Evenement</li>
      </ol>
      <!-- Example DataTables Card-->
    <div class="card card-register mx-auto mt-5">
      <div class="card-header custom">Ajouter Evenement</div>
      <div class="card-body customDiv">
<form method="POST" action="../ajoutEvenement.php">
<table cellpadding="6" cellspacing="6">
<caption></caption>

<tr>
<td>Nom: &nbsp;</td>

<td><input type="text" name="nom"></td>
</tr>
<tr



>
<td>Heure début: &nbsp;</td>
<td><input type="number" name="heure_deb"></td>
</tr>
<tr>
<td>heure fin: &nbsp;</td>
<td><input type="number" name="heure_fin"></td>
</tr>
<tr>
<td>Image: &nbsp;</td>
<td><input type="text" name="image"></td>
</tr>
<tr>
<td></td>
<td>
<br>
  <input type="submit" name="ajouter" class="btn btn-primary" value="ajouter"></td>
</tr>
</table>
</form>

      </div>
    </div>
      
    </div>
    
