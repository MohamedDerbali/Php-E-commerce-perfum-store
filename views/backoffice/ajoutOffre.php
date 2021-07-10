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
      <div class="card-header custom">Ajouter Offre</div>
      <br>
      <div class="card-body customDiv">
<form method="POST" action="../ajoutoffre.php">
<table>
<tr>
<td>Nom</td>
<td><input type="text" name="nom"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="description"></td>
</tr>
<tr>
<td>Type</td>
<td><input type="text" name="type"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="date" name="date"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
</table>
</form>
</div>
</div>
</div>
