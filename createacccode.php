<?php 
$servername="localhost";
$username="root";
$password="";
$database="pfa";
//créer la connexion
$conn= mysqli_connect($servername,$username,$password,$database);
if( !$conn){
    die("coo
    nction failed".mysqli_connect_error());
}
else{
  echo "connection " ;  
   
}



if (isset($_POST['submit'])){
    //get data
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
     $streetname=$_POST['streetname'];
     $streetnumber=$_POST['streetnumber'];
     $city=$_POST['city'];
     $country=$_POST['country'];

    
    $sql="insert into account ( 'firstname','lastname','streetname','streetnumber','city','country') values 
    ($firstname,$lastname,$streetname,$streetnumber,$city, $country)";

    if (mysqli_query($conn,$sql)){
        header('Location: createacc.php');
    }
    else {
        echo "error".mysqli_error($conn);
    }
}