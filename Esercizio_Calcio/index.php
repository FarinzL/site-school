<?php
  include 'headerCalcio.php';
  include 'db_conf.php';
?>


<div style="display:none">
   <embed src="song/uefa.mp3"/> 
</div> 
	
<div id="test">
  <h1></h1>
  <p></p> 
</div>
<form method="POST" action="index.php">
	<div class="container">
	  <h1><hr width=”200px” size=”3″ color=”black” align=”center“ /></h1>
	  <br>
	  <div class="row">
		  <font size = "3" face = "Bedrock">Scegli la query da svolgere:</font>
		  <select class="w3-select" name="s">
		  <option value="" disabled selected>Scegli la query da svolgere:</option>
		  <option value="a">Determinare il nome, il ruolo e la data di nascita dei calciatori che hanno  militato nella Roma nel 2000.</option>
		  <option value="b">Determinare  il  nome  e  ruolo  dei  calciatori  che  hanno  militato  nella  squadra  che  nel  2005  ha vinto lo scudetto.</option>
		  <option value="c">Determinare il nome, il ruolo e il totale delle reti realizzate in quel ruolo da ogni giocatore nel corso della sua carriera agonistica in serie A</option>
		  <option value="d">Individuare matricola e goal di chi ha realizzato in carriera il maggior numero di reti in serie A.</option>
		  <option value="e">Determinare il nome dei calciatori che in carriera abbiano giocato sia nel Milan che nell’Inter ma non nel Napoli</option>
		  <option value="f">Fornire l’albo d’oro del campionato ovvero una lista che in ordine cronologico mostri per ogni anno la sigla della squadra vincitrice ed il punteggio riportato. </option>
		  <option value="g">Determinare la matricola dei calciatori che abbiano vinto almeno due scudetti</option>
		</select> 
		<input type="submit" class="btn btn-default" value="Vai">
	  </div>
	</div>
</form>
<div class="container">
	
	<?php
	$scelta=$_POST['s'];
	
	if($scelta==a)
	{
		echo "<br>";
		echo "Query: ";
		echo "<br>";
		$query="SELECT Calciatori.nominativo, Calciatore_Squadra.ruolo, Calciatori.data_nascita ";
		$query.="FROM Calciatori, Squadra, Calciatore_Squadra ";
		$query.="WHERE Calciatori.matricola=Calciatore_Squadra.matricola AND ";
		$query.="Squadra.id_squadra=Calciatore_Squadra.id_squadra AND ";
		$query.="Squadra.nome_societa=\"Roma\" AND ";
		$query.="Calciatore_Squadra.Stagione=\"2000\";";
		
		echo $query;
		echo "<br>";
		$result = $db -> query($query);
		
		?>
		<table class="table">
		<?php
		
		$a=1;
		  while($a==1){ 
			 $a=0;
			 echo "<tr>";
			 if($site=mysqli_fetch_array($result))
			 {
			   $a=1;
			   $nome=$site["nominativo"];
			   $ruolo=$site["ruolo"];
			   $data=$site["data_nascita"];
			   echo "<td>".$nome."</td>";
			   echo "<td>".$ruolo."</td>";
			   echo "<td>".$data."</td>";
			 }else{
			 }
		}
	}else if($scelta==b)
	{
		echo "<br>";
		echo "Query: ";
		echo "<br>";
		$query="NON VA";
		
		echo $query;
		echo "<br>";
		$result = $db -> query($query);
		
		?>
		<table class="table">
		<?php
		
		$a=1;
		  while($a==1){ 
			 $a=0;
			 echo "<tr>";
			 if($site=mysqli_fetch_array($result))
			 {
			   $a=1;
			   $nome=$site["nominativo"];
			   $ruolo=$site["ruolo"];
			   $goal=$site["TotaleReti"];
			   echo "<td>".$nome."</td>";
			   echo "<td>".$ruolo."</td>";
			   echo "<td>".$goal."</td>";
			 }else{
			 }
		}
	}else if($scelta==c)
	{
		echo "<br>";
		echo "Query: ";
		echo "<br>";
		$query="SELECT Calciatori.nominativo, Calciatore_Squadra.ruolo, COUNT(Calciatore_Squadra.goal) AS TotaleReti ";
		$query.="FROM Calciatori, Squadra, Calciatore_Squadra ";
		$query.="WHERE Calciatori.matricola=Calciatore_Squadra.matricola AND ";
		$query.="Squadra.id_squadra=Calciatore_Squadra.id_squadra";
		
		echo $query;
		echo "<br>";
		$result = $db -> query($query);
		
		?>
		<table class="table">
		<?php
		
		$a=1;
		  while($a==1){ 
			 $a=0;
			 echo "<tr>";
			 if($site=mysqli_fetch_array($result))
			 {
			   $a=1;
			   $nome=$site["nominativo"];
			   $ruolo=$site["ruolo"];
			   $goal=$site["TotaleReti"];
			   echo "<td>".$nome."</td>";
			   echo "<td>".$ruolo."</td>";
			   echo "<td>".$goal."</td>";
			 }else{
			 }
		}
	}else if($scelta==d)
	{
		echo "<br>";
		echo "Query: ";
		echo "<br>";
		$query="SELECT Calciatori.matricola, MAX(Calciatore_Squadra.goal) AS Totale ";
		$query.="FROM Calciatori, Calciatore_Squadra ";
		$query.="WHERE Calciatori.matricola=Calciatore_Squadra.matricola ";
		
		echo $query;
		echo "<br>";
		$result = $db -> query($query);
		
		?>
		<table class="table">
		<?php
		
		$a=1;
		  while($a==1){ 
			 $a=0;
			 echo "<tr>";
			 if($site=mysqli_fetch_array($result))
			 {
			   $a=1;
			   $matricola=$site["matricola"];
			   $goal=$site["Totale"];
			   echo "<td>".$matricola."</td>";
			   echo "<td>".$goal."</td>";
			 }else{
			 }
		}
	}else if($scelta==e)
	{
		echo "<br>";
		echo "Query: ";
		echo "<br>";
		$query="SELECT Calciatori.nominativo ";
		$query.="FROM Calciatori, Squadra, Calciatore_Squadra ";
		$query.="WHERE Calciatori.matricola=Calciatore_Squadra.matricola AND ";
		$query.="Squadra.id_squadra=Calciatore_Squadra.id_squadra AND ";
		$query.="Squadra.nome_societa=\"Milan\" AND ";
		$query.="Squadra.nome_societa=\"Inter\" AND NOT ";
		$query.="Squadra.nome_societa=\"Napoli\" ";
		
		echo $query;
		echo "<br>";
		$result = $db -> query($query);
		
		?>
		<table class="table">
		<?php
		
		$a=1;
		  while($a==1){ 
			 $a=0;
			 echo "<tr>";
			 if($site=mysqli_fetch_array($result))
			 {
			   $a=1;
			   $nom=$site["nominativo"];
			   echo "<td>".$nom."</td>";
			 }else{
			 }
		}
	}else if($scelta==f)
	{
		echo "<br>";
		echo "Query: ";
		echo "<br>";
		$query="SELECT Campionato.anno, Squadra.nome_societa, MAX(Campionato.punteggio) AS Punti ";
		$query.="FROM Squadra, Campionato ";
		$query.="WHERE Campionato.id_squadra = Squadra.id_squadra ";
		$query.="GROUP BY Campionato.anno ";
		
		echo $query;
		echo "<br>";
		$result = $db -> query($query);
		
		?>
		<table class="table">
		<?php
		
		$a=1;
		  while($a==1){ 
			 $a=0;
			 echo "<tr>";
			 if($site=mysqli_fetch_array($result))
			 {
			   $a=1;
			   $anno=$site["anno"];
			   $nomeS=$site["nome_societa"];
			   $punteggio=$site["Punti"];
			   echo "<td>".$anno."</td>";
			   echo "<td>".$nomeS."</td>";
			   echo "<td>".$punteggio."</td>";
			 }else{
			 }
		}
	}
	else if($scelta==g)
	{
		echo "<br>";
		echo "Query: ";
		echo "<br>";
		$query="SELECT Calciatori.matricola ";
		$query.="FROM Calciatori, Calciatore_Squadra, Squadra, Campionato ";
		$query.="WHERE Calciatori.matricola=Calciatore_Squadra.matricola AND ";
		$query.="Squadra.id_squadra=Calciatore_Squadra.id_squadra AND ";
		$query.="(SELECT MAX(Campionato.punteggio) ";
		$query.="FROM Campionato) ";
		$query.="GROUP BY Campionato.punteggio ";
		$query.="HAVING COUNT(*)>=2 ";
		
		echo $query;
		echo "<br>";
		$result = $db -> query($query);
		
		?>
		<table class="table">
		<?php
		
		$a=1;
		  while($a==1){ 
			 $a=0;
			 echo "<tr>";
			 if($site=mysqli_fetch_array($result))
			 {
			   $a=1;
			   $matricola=$site["matricola"];
			   $goal=$site["goal"];
			   echo "<td>".$matricola."</td>";
			 }else{
			 }
		}
	}
?>
</table>
		
</div>


<?php 
  include "../Sito_serio/footer.php";
?>
