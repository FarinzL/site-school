<?php
  include "header.php";	
?>


<!--	
<div id="test">
  <h1></h1>
  <p></p> 
</div>
-->

<div id="demo" class="carousel slide" data-ride="carousel" align="center">

  <!-- Indicators -->
  <ul class="carousel-indicators" align="center">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/calcio_1.jpg" class="img-rounded" alt="Los Angeles" width="304" height="236">
    </div>
    <div class="carousel-item">
      <img src="images/due.jpg" class="img-rounded" alt="Chicago" width="304" height="236">
    </div>
    <div class="carousel-item">
      <img src="images/tre.jpg" class="img-rounded" alt="New York" width="304" height="236">
    </div>
    <div class="carousel-item">
      <img src="images/quattro.jpg" class="img-rounded" alt="New York" width="304" height="236">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container">
	<h1><hr width=”200px” size=”3″ color=”black” align=”center“ /></h1>
</div>

<div id="section1" class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <h3>HTML</h3>                                                               
      <p><iframe src="PDF/html.pdf"></iframe></p>
    </div>
    <div class="col-sm-4">
      <h3>MySQL</h3>                                                               
      <p><iframe src="PDF/mysql.pdf"></iframe></p>
    </div>
    <div class="col-sm-4">
      <h3>PHP</h3>                                                               
      <p><iframe src="PDF/php.pdf"></iframe></p>
    </div>
  </div>
</div>

<div class="container">
	<h1><hr width=”200px” size=”3″ color=”black” align=”center“ /></h1>
</div>


<?php 
  include "footer.php";
?>
