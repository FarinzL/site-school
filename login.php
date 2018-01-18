<?php
	include 'header.php';
	session_start();
?>
  
<div class="container-fluid text-center" style="background-color:lightgrey" align="center">    
  <div class="row content">
    <div class="col-sm-8 text-left"> 
      <h1>Login</h1>
      
		<table class="table">
		
		</table>
		<p><h3>Effettua il login per poter aggiungere nuovi siti web!</h3></p>
      <div class="container">
		<h1><hr width=”200px” size=”3″ color=”black” align=”center“ /></h1>
      </div>
		<div class="col-sm-4">
		  <form role="form" method="post" action="controlla_user.php">
			<center><table class="table">
				  <tr>
					<b><td>Username:</td></b>
					<td><input type="text" class="form-control"  placeholder="Username" name="username" ></td>
				  </tr>
				  <tr>
					<b><td>Password:</td></b>
					<td><input type="password" class="form-control"  placeholder="Password" name="password" ></td>
				  </tr>
				  <tr>
					  <?php
						if($_SESSION["utente"]=="no"){
					  ?>
						<div class="alert alert-danger">
							<strong>ATTENZIONE!</strong> nome utente o password sbagliata!.
						</div>
					  <?php
						}
					  ?>
				  </tr>
				  <tr>
					<td></td>
					<td><input type="submit" class="btn btn-default" value="Login"></td>
				  </tr>
			  </table></center>
			  </div>
		</div>
	</div>
</div>
<?php
	include 'footer.php';
?>
</body>
</html>

