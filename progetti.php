<?php
	include 'header.php';
	include 'db_conf.php';
?>

<h1><center><b>Progetti:</b></center></h1>
<div class="container">
	<h1><hr width=”200px” size=”3″ color=”black” align=”center“ /></h1>
</div>

<div class="container">  
<!--</div>--> 
	  <?php
		$query = "SELECT * FROM MySite WHERE 1";
		
		$result = $db -> query($query);
      ?>
      <center>
		<table class="table">
		<thead>
			  <tr>
				<th>Nome</th>
				<th>Autore</th>
				<th>Link</th>
			  </tr>
			</thead>
			<tbody>
				<tr>
					<td>PhpMyAdmin</td>
					<td>***</td>
					<td><b><a href="http://localhost/phpmyadmin/">localhost/phpmyadmin</a></b></td>
                  </tr>
			  <?php
                  $a=1;
                  while($a==1){ 
                     $a=0;
                     echo "<tr>";
                     if($site=mysqli_fetch_array($result))
                     {
                       $a=1;
                       $nome=$site["nome"];
                       $autore=$site["autore"];
                       $link=$site["link"];
                       echo "<td>".$nome."</td>";
                       echo "<td>".$autore."</td>";
                       echo "<td><a href=..".$link.">".$link."</a></td>";
                     }else{
                      //echo "<td></td>";
                     } 
                     
                   }
                  ?>
			</tbody>
		</table>
		</center>
</div>		
<div class="container">
	<h1><hr width=”200px” size=”3″ color=”black” align=”center“ /></h1>
</div>        
<?php
	include 'footer.php';
?>
</body>
</html>

