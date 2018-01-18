<?php
	include 'db_conf.php';
	
	//echo $_POST["password"];
	//echo $_POST["username"]
	session_start();
	
	$query_login="SELECT password FROM User WHERE username=\"".$_POST["username"]."\"";
    
     // scrivo sul DB questi valori
                
	$result = $db -> query($query_login);
	
	if($result->num_rows==0){
	 header('location:login.php?nessuna corrispondenza'); 				// se le prime condizioni non vanno bene entra in questo ramo else
	die();
   }
	  $row=mysqli_fetch_object($result);
	  $password = $row->password;
	  
	if($password == $_POST["password"])
		{
		  $_SESSION["utente"]="si";
		  $_SESSION["logged"]=true; //restituisci vero alla chiave logged in SESSION
		  $_SESSION["login"]["username"]=$_POST["username"];
		  header("location:aggiungi.php");
		}else{
			$_SESSION["utente"]="no";
			header('location:login.php?Password errata'); // se le prime condizioni non vanno bene entra in questo ramo else
	   }
	   $db->close();
?>
