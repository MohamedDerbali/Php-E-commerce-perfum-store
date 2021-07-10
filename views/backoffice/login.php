<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>JI-LINE BACKOFFICE</title>

  <!-- Favicons -->
  <link href="img/logoicon.png" rel="icon">
  <link href="img/logoicon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="modifierpromotion.php">
        <h2 class="form-login-heading">Se Connecter</h2>
1        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Identifiant" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="Mot de passe">
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> enregistrer 
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> mdp oublié ?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" href="modifierpromotion.php" type="submit"><i class="fa fa-lock"></i>Se Connecter</button>
          <hr>
        
          <div class="registration">
            Tu n'as pas encore de compte?<br/>
            <a class="" href="#">
              Créer un compte
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Mdp oublié ?</h4>
              </div>
              <div class="modal-body">
                <p>Entrez votre adresse mail pour rénitialiser votre mdp.</p>
                <input type="text" name="email" placeholder="Votre mail" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Supprimer</button>
                <button class="btn btn-theme" type="button">Envoyer</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/fondlogin.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
