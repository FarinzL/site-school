<?php include 'db_conf.php';
   
  $query = "INSERT INTO MySite(nome,autore,link) VALUES (\"".$_POST['nome']."\", \"".$_POST['autore']."\", \"".$_POST['link']."\")";
  
  $result = $db -> query($query);
    
  header("location: index.php");
?>
