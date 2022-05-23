<?php
include "modules/test_session1.php"
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Page Style -->
  
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
margin-left:20%;

}
input{width:100%;
 box-sizing: border-box;
  border: 2px solid #37edd8;
  border-radius: 20px;
  font-size: 16px;
  background-color: white;
  background-image: url('img/searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  height: 12%;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
}
input[type=text]:focus,input[type=text]:hover {
  border: 2px solid #222222;

}

a:focus{cursor:pointer;}
.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(165, 179, 179, 0.5);
          box-shadow: 0 0 0 0.2rem rgba(165, 179, 179, 0.5);
}
.flex-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .form-box {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 50px;
            margin-top: 10px;
            margin-left:35%;
            width:30%;
            color:black;
            background-color:#f0f7f2;
        }
        
        #annuler {
            background-color: #e4e6eb;
            color: black;
            border-color: #e4e6eb;
        }
    </style>
     <!--Confirm -->
   <script src="modules/deconnex.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
<?php
if($_SESSION['msg']!="")
echo "<script>alertify.success('".$_SESSION['msg']."');</script>"; 
$_SESSION['msg']="";
  ?>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" style="padding-left:0;margin-left:0;">
      <img src="img\logo_inpackt2.png" style="height:50px;padding-left:0;margin-right:10px;">
    </div>
    <ul class="nav navbar-nav" >
      <li class="active"><a href="#">Home</a></li>
      
      <li><a href="ajout.php">Ajouter un compte</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      <li><a href="#"onclick='confirm()'><span class="glyphicon glyphicon-log-out"></span> Deconnecter</a></li>
    </ul>
  </div>
</nav>



<div class ="diva"><input  id="myInput" type="text" placeholder="Search.." ><br><br><br></div>

<?php
$table= "user";
include "modules/config.php";
include "modules/indexa.php";
?>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>
 
      
   <div class="footer">
  <p>Tous les droits sont réservés pour inpackt Tunisie</p>
</div> 

</body>
