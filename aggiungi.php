<?php
	include 'header.php';
?>
  
<div class="container-fluid text-center" style="background-color:lightgrey">    
  <div class="row content">
    <div class="col-sm-8 text-left"> 
      <h1>Aggiungi un nuovo sito web:</h1>
      
		<table class="table">
		
		</table>
		<p><h3></h3></p>
      <hr>
      
      <!--<div class="col-sm-4">-->
		  <form role="form" method="post" action="inserisci.php">
			<table class="table">
				  <tr>
					<b><td>Nome:</td></b>
					<td><input type="text" class="form-control"  placeholder="Username" name="nome" ></td>
				  </tr>
				  <tr>
					<b><td>Autore:</td></b>
					<td><input type="text" class="form-control"  placeholder="Autore" name="autore" ></td>
				  </tr>
				  <tr>
					<b><td>Link: ("/NomeCartella/nomefile.php")	</td></b>
					<td><input type="text" class="form-control"  placeholder="/NomeCartella/nomefile.php" name="link" ></td>
				  </tr>
				  <tr>
					<td></td>
					<td><input type="submit" class="btn btn-default" value="Aggiungi"></td>
				  </tr>
			  </table>
      <!--</div>-->
		</div>    
	</div>	
</div>
<?php
	include 'footer.php';
?>
</body>
</html>

