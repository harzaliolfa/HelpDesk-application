<?php

if (isset($_POST['go'])){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	 if(!(isset($_POST['go']) && isset($_POST['mpass']))&& isset($_POST['cin']))
{
    
   echo "<script>alertify.success('*Identifiant ou Mot de passe incorrecte(s)!!!');</script>";
}
else
{
    if((isset($_POST['go']) && isset($_POST['mpass']))&& isset($_POST['cin']))
    {

        $iden=$_POST['cin'];
        $pas=$_POST['mpass'];
		$test=False;
		 $tab=$conn->query("SELECT Logi,Mot_de_passe,type_user,Confidentialite ,nom,prenom,email,num FROM $table ORDER BY Logi;");
		 foreach($tab as $ligne)
            {
                if ($ligne['Logi']==$iden && $ligne['Mot_de_passe']==$pas)
                {$test=True;
                $type=$ligne['type_user'];
                $Confidentialite=$ligne['Confidentialite'];
                $nom=$ligne['nom'];
                $prenom=$ligne['prenom'];
                $email=$ligne['email'];
                $num=$ligne['num'];
				}
            }
            if($test ==False)
				{echo "<script>alertify.success('*Identifiant ou Mot de passe incorrecte(s)!!!');</script>";}
			else 
				{
            if(!isset($_SESSION)) session_start();
            $_SESSION['id']=$_POST['cin'];
            $_SESSION['mot']=$pas;
            $_SESSION['ouvert']=0;
            $_SESSION['type']=$type;
			$_SESSION['Confidentialite']=$Confidentialite;
			$_SESSION['msg']="Bienvenu dans votre espace de travaille";
            $_SESSION['nom']=$nom;
            $_SESSION['prenom']=$prenom;
            $_SESSION['email']=$email;
            $_SESSION['num']=$num;
            // ici je vais virifier pour connaitre vers quelle page je vais deriger mon application
         if($type=="admin"){
            header("Refresh:0; url=home2.php");}
         else {header("Refresh:0; url=home1.php");}
         /////// 
        }
		
		
	}
}}
catch(PDOException $e)
    {
		
    echo '<script>alertify.success("Il ya quelques problèmes!!!Essayer une autre fois);</script>';	
        
        echo $e->getMessage();
   
}}
?>
