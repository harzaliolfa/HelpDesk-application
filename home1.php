<?php
include "modules/test_session.php"
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Page Style -->
   <!--Confirm -->
   <script src="modules/deconnex.js"></script>
    <!-- AlertifyJS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .alertify-notifier .ajs-message.ajs-success {
            background: green;
            color: white;
        }
        
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #222222;
  color: white;
  text-align: center;
  border-radius: 7px;
  height:4%;
}
.diva{
width:50%;
float:center;
margin-left:43%;

}
    </style>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" style="padding-left:0;margin-left:0;">
      <img src="img\logo_inpackt2.png" style="height:50px;padding-left:0;margin-right:10px;">
    </div>
    <ul class="nav navbar-nav" >
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Filtrer par <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="filtretier.php">Tiers</a></li>
          <li><a href="filtrearticle.php">Article</a></li>
        </ul>
      </li>
      <li><a href="Selection.php">Selection précise</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      <li><a href="#" onclick='confirm()'><span class="glyphicon glyphicon-log-out"></span> Deconnecter</a></li>
    </ul>
  </div>
</nav>
<?php
$table= "mouv";
include "modules/config.php";
include "modules/affiche2.php";

if($_SESSION['msg']!="")
echo "<script>alertify.success('".$_SESSION['msg']."');</script>"; 
$_SESSION['msg']="";

?>

  

      
   <div class="footer">
  <p>Tous les droits sont réservés pour inpackt Tunisie</p>
</div> 
</body>

</html>