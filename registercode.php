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
  echo "connection " ;  
   
}



if (isset($_POST['submit'])){
    //get data
    $username=$_POST['username'];
    
    $email=$_POST['email'];
    $phone=$_POST['phone']; 
     $pass=$_POST['pass'];
    

    
    $sql="insert into register (username,email,phone,pass) values ('$username','$email','$phone','$pass')";

    if (mysqli_query($conn,$sql)){
      // echo "connection";
        header('Location: createacc.php');
    }
    else {
        echo "error".mysqli_error($conn);
    }
}
/*$conn= mysqli_connect($servername,$username,$password,$database);
 $sql="select * from register";
 $result= mysqli_query($conn,$sql); */
 ?> 0
    
    
