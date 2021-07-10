<?php
session_start();
if(count($_GET)>0) {
    $con = mysqli_connect('127.0.0.1:3306','root','','boutique') or die('Unable To connect');
    if(isset($_GET["nom"])){
        $result = mysqli_query($con,"SELECT evenement FROM destination WHERE nom_des='" . ($_GET["nom"]) . "'");
    }else {
        $result = mysqli_query($con, "SELECT nom_des FROM destination WHERE code_des='" . ($_GET["id"] + 0) . "'");
    } echo(mysqli_error($con));
    $row = mysqli_fetch_row($result);

    foreach($row as $i)
        $element=$i;
//var_dump($element);
    $p=mysqli_query($con,"select * from maisondhote where lieu_mais ='".$element."'");
    if(!empty($p)){
        $Melem=mysqli_fetch_all($p);
//var_dump($Melem);
    }



}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/place.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">




    <style>
        .box{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 1.0;  /* for demo purpose  */
        }
        .stack-top{
            z-index: 9;
            margin: 20px; /* for demo purpose  */
        }
        #carouimg{
            width: 82%;
            height: 550px;
            margin-left: 300px;

        }
    </style>
</head>

<body >

<nav class="navbar navbar-default navbar-static-top" style="background: none;border: none;margin-top: auto;" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="sr-only">Toggle navigation</span>
            </button>

            <img src="images/logo.png" style="margin-left:-80px;width: 100px;height: 150px;">
        </div>

        <div class="collapse navbar-collapse"  id="navigation">
            <ul class="nav navbar-nav" style="margin-top: 30px;margin-left: 90px;">
                <li class="tonv"><a href="page.php">ACCUEIL</a></li>
                <li class="tonv"><a href="Destination.php">DESTINATION</a></li>
                <li class="tonv"><a href="maison.php">MAISON D'HOTES</a></li>
                <li class="tonv"><a href="restaurant.php">RESTAURANTS</a></li>

                <li class="tonv"><a href="#contact">CONTACT</a></li>

                <li  style="margin-left:80px;margin-top: -6px;">
                    <a href="Destination.php">   <img src="images/recherche.png" style="height: 45px;width: 70px;">
                    </a>
                </li>
                <li>
                    <?php if(empty($_SESSION)){ ?>
                    <a style="margin-left: 30px;margin-top: -2px;border: 2px solid  #17233D;" class="btn btn1"><span onclick="location.href='login.php';">Se connecter</span></a></li>
                <?php } else
                {
                    ?>
                    <h5 style="margin-top: 25px;">Bonjour , <?php echo $_SESSION["nom_complet"]; ?></h5>
                    <?php
                }
                ?>
            </ul>
            </ul>
        </div>
    </div>
</nav>



<div class="col-lg-12 col-xs-12" style="padding:0px;" >
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" >
            <?php
            $i=0;
            foreach ($Melem as $k){

                if($i==0){
                    ?>

                    <div class="item active">
                        <div class="col-md-2 col-xs-2" style="width: 270px;">
                            <div class="box"  style="background: #d7ced6;height: 280px;width: 270px;margin-top: 100px;margin-left: 155px;">

                            </div>
                            <div class="box stack-top" style="background: #ECECEC;height: 280px;width: 270px;margin-top: 90px;margin-left: 180px;padding:15px;position: absolute;        ">
                                <h1 style="color: #17233D;text-align: left;font-weight: bold;font-family: 'aqum regular';font-size: 40px;">ZOUR BLEDEK  </h1>

                                <p style="font-family: 'Times New Roman';color: #17233D;font-size: 15px;">
                                    <span style="font-weight: bold;">  <?php echo $k[1]; ?></span> votre aventure d'aujourd'hui

                                </p>
                                <a href="#res"> <button  type="submit" class="Btn" onclick="resclick(<?php echo $k[0]; ?>)" value="<?php echo $k[0]; ?>" style="font-weight: bold;">Réserver</button>
                                </a>
                            </div>

                        </div>
                        <img src="img/<?php echo $k[5]; ?>" id="carouimg">

                        <div class="carousel-caption">

                        </div>
                    </div>
                <?php } else{ ?>

                    <div class="item">
                        <div class="col-md-2 col-xs-2" style="width: 270px;">
                            <div class="box"  style="background: #d7ced6;height: 280px;width: 270px;margin-top: 100px;margin-left: 155px;">

                            </div>
                            <div class="box stack-top" style="background: #ECECEC;height: 280px;width: 270px;margin-top: 90px;margin-left: 180px;padding:15px;">
                                <h1 style="color: #17233D;text-align: left;font-weight: bold;font-family: 'aqum regular';font-size: 50px;">ZOUR BLEDEK  </h1>

                                <p style="font-family: 'Times New Roman';color: #17233D;font-size: 15px;">
                                    <span style="font-weight: bold;">  <?php echo $k[1]; ?></span> votre aventure d'aujourd'hui

                                </p>
                                <a href="#res"><button type="submit" class="Btn" onclick="resclick(<?php echo $k[0]; ?>)" value="<?php echo $k[0]; ?>" style="font-weight: bold;">Réserver</button>
                                </a>
                            </div>

                        </div>
                        <img src="img/<?php echo $k[5]; ?>" id="carouimg"  >
                        <div class="carousel-caption">

                        </div>

                    </div>
                <?php }
                $i=$i+1;
            } ?>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" style="background-image: linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%);" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" style="color:#17233D;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" style="background-image: linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%);" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

</div>

<div class="row" style="width: 500px;margin-top: 600px;margin-left: 450px;">

    <h2 style="margin-left: 100px;color: #11426b;font-weight: bold;font-size: 25px;">Demande de réservation</h2>
    <h6 style="color: #11426b;font-weight: normal;margin-left: 25px;font-size: 15px;">
        Les champs marqués d'un * sont
        <br>obligatoire
    </h6>
    <form  method="post" action="resmd.php" id="res">
        <input type="hidden" id="msn" name="msn">

        <div class="form__group field">
            <input type="text" class="form__field" placeholder="Nombre d'invitées *" name="invite" id='invite' required />
            <label for="invite" class="form__label">Nombre d'invitées *</label>
        </div>
        <div class="form__group field">
            <input type="text" class="form__field" placeholder="Nom Complet" name="Nom" id='Nom' required />
            <label for="Nom" class="form__label">Nom Complet *</label>
        </div>
        <div class="form__group field">
            <input type="text" class="form__field" placeholder="Mot de passe" name="tel" id='tel' required />
            <label for="tel" class="form__label">Tél. *</label>
        </div>
        <div class="form__group field">
            <input type="email" class="form__field" placeholder="Contact" name="Contact" id='Contact' required />
            <label for="Contact" class="form__label">Contact Email</label>
        </div>
        <div class="form__group field">
            <input type="date" class="form__field" placeholder="date" name="date" id='date'  min="2020-02-10" required />
            <label for="date" class="form__label">date*</label>
        </div>
        <br>
        <center><a><button type="submit" class="Btn">Envoyer</button>
            </a></center>
    </form>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<i class="fa fa-facebook-square fa-2x"  style="color:#17233D;text-align: center;margin-left: 1380px;" aria-hidden="true"></i>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4" id="contact" style="background-color: #1e293f;height: 150px;">
    <br>
    <br>

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left" style="background-color: #1e293f;border: none;">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4" style="margin-top: -35px;margin-left: 55px;">

                <!-- Content -->
                <h6 style="color:white;margin-top: 48px;font-size: 17px;">atharnatn@gmail.com</h6>
                <button style="border-radius: 50px;padding-left: 10px;padding-right: 10px;color:white;background:none;width: 170px;height: 30px;">+216 58 337 205</button>
            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-md-6" style="margin-left:-50px;">

                <!-- Links -->


                <h5 style="color: white;text-align: center;font-weight: bold;font-family: 'aqum regular';margin-top: -9px;margin-left: -195px;">
                    RESTE A JOUR
                </h5><br>
                <div  style="bakground:none;" >
                    <i class="fa fa-envelope icon" style="color:white;border-bottom:2px white;margin-left: -60px;position: absolute;margin-top: 9px;"></i>
                    <input  type="text" placeholder="Adresse Email" style="border-top: none;border-right: none;border-left: none;background:none;color:white;padding-left: 25px;width: 150px;margin-left: -60px;" name="email">
                    <button style="border-color: white;background: none;color: white;font-weight: normal;width: 100px; height: 30px;">Abonnée</button>
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->


            <!-- Links -->





            <div class="col-md-2" style="margin-left: -5px;margin-top: -15px;">




                <i class="fa fa-instagram fa-2x" style="color:white;text-align: center;" aria-hidden="true"></i>
                <br>
                <br>

                <i class="fa fa-twitter fa-2x"  style="color:white;text-align: center;" aria-hidden="true"></i>


            </div>

            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->

    <!-- Copyright -->

</footer>

<script>$('.carousel').carousel();</script>

<script src="css/boot/jquery.min.js"></script>
<script src="css/boot/bootstrap.min.js"></script>
<script>
    function resclick(x) {
        document.getElementById("msn").value = x;
        console.log(x);
    }
</script>
<!-- Footer -->
</body>

</html>