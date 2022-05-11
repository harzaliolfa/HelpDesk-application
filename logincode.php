<?php 
$servername="localhost";
$username="root";
$password="";
$database="pfa";
//créer la connexion
$conn= mysqli_connect($servername,$username,$password,$database);
if( !$conn){
    die("coonction failed".mysqli_connect_error());
}
else{
    echo "connected";
}




 

 function exist($conn, $username, $pass)
 {
     $sql = "select * from user where pass='$pass' and username='$username';";
     $res=$conn->query($sql);
     
     
         foreach ($res as $ligne) {
             /*echo $ligne['nom']." ";
             echo $ligne['prenom']." ";*/
             if ($username == $ligne['username']) {
                 // vous pouvez initialiser les sessions ici !
                 return $ligne['role'];
             }
         }
     
     return false;
 }

 if (isset($_POST['username']) && isset($_POST['pass'])) {
     $username= $_POST['username'];
     $pass = $_POST['pass'];
     $result = exist($conn, $username, $pass);
     switch ($result) {
         case false:
             echo "<script>alert('verifier votre username');</script>";
             break;

         case 'admin':
             header("Location: admin.php");
             break;
         case 'technicien':
             header("Location: tech.php");
             break;
         case 'utilisateur':
             header("Location: simpluser.php");
             break;
     }
 }

 ?>
 

    
