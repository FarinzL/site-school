<!DOCTYPE html>
<html>
<title>Calcio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--background: url('images/calcio.jpg');-->
	<head>
	<style>
	body,h1 {font-family: "Raleway", sans-serif}
	body, html {height: 100%}
	
	   
	#test {
		padding: 200px;
		background: url('images/t.gif');
		background-repeat: no-repeat;
		background-size: 1200px;
		background-position: center;
	}
		
	body {
		font-family: "Lato", sans-serif;
		transition: background-color .5s;
	}

	.sidenav {
		height: 100%;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #111;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 60px;
	}

	.sidenav a {
		padding: 8px 8px 8px 32px;
		text-decoration: none;
		font-size: 25px;
		color: #818181;
		display: block;
		transition: 0.3s;
	}

	.sidenav a:hover {
		color: #f1f1f1;
	}

	.sidenav .closebtn {
		position: absolute;
		top: 0;
		right: 25px;
		font-size: 36px;
		margin-left: 50px;
	}

	#main {
		transition: margin-left .5s;
		padding: 16px;
	}

	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
	
hr {
    background-color:#999;
    border-width:0;
    color:#999;
    height:1px;
    line-height:0;
    margin: 0.5em 0;
    text-align: center;
}

hr:after {
    content:"☯";
    font-size:1.25em;
    position: relative;
    left: -0.5em;
}​
	</style>
	<div id="mySidenav" class="sidenav">
	  <img src="images/c.gif" height="120" width="240"> 
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="../Sito_serio/index.php">Home</a>
	  <a href="../Sito_serio/info.php">Informazioni</a>
	  <a href="../Sito_serio/progetti.php">Progetti</a>
	  <a href="../Sito_serio/contatti.php">Contatti</a>
	  <a href="../Sito_serio/gioco/index.php" >Gioco T-Rex</a>
	  <li><a href data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	</div>

	<div id="main">
	  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
	  <ul class="nav navbar-nav navbar-right">
			<!--MODAL-->
				<div class="main">
				  <!-- Trigger the modal with a button -->
				  <h3><a type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</h3></a>

				  <!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
					
					  <!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Login</h4>
							</div>
							<div class="modal-body">
								<form method="POST" action="..\Sito_serio\controlla_user.php">
									<p><b><td>Username:</td></b></p>
									<p><td><input type="text" class="form-control"  placeholder="Username" name="username" ></td></p>
									<p><b><td>Password:</td></b></p>
									<p><td><input type="password" class="form-control"  placeholder="Password" name="password" ></td></p>
							</div>
							<div class="modal-footer">
									<input type="submit" class="btn btn-default" value="Login">
								</form>
							</div>
						</div>
					</div>
				  </div>
				  
				</div>
		  </ul>	
	</div>
</head>
<body>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>



