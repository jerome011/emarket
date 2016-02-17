<?php
ob_start();
?>
<?php
$mysqli = new mysqli("localhost", "root", "", "emarket");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: wak pasword!!! (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}
$pagetitle= "Home page";
include("../masterpage2.php");
?>

This is the content page index

<?php
	$page_content = ob_get_contents();
	ob_clean();
	
?>



<body>
  <div align="center"id="mainWrapper">
	<div class="container">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">   
	
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" align="center">
      
      <img src="../Images/drone.png" alt="camera">
      
    </div>
    <div class="item" align="center">
      <img src="../Images/Scamera.jpg" alt="camera">
      <div class="carousel-caption">

       <div class="item active" align="center">
      
    
    </div>
        ...
      </div>
    </div>
    ...
  </div>

       <div class="item">
      <img src="..:/Images/Vespa.jpg" alt="Vespa">
      <div class="carousel-caption">
      </div>
    </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">

      <h3 id="featured-title">Featured tems <h3>
        <div class="col-lg-4 item">
        <p><img src="../Images/drone.png" alt="camera">
          We have the best variety of drones on the market</p>
        <a href="#" class="btn btn-danger">View</a>
      </div>
      <div class="col-lg-4  item">
        <p><img src="../Images/Scamera.jpg" alt="camera">
          We have the best variety of drones on the market</p>
        <a href="#" class="btn btn-danger">View</a>
      </div>
      </div>
    </div>
<?php
$res = $mysqli->query("SELECT * FROM products ORDER BY id ASC");
$row = $res->fetch_assoc();

print $row;
?>
</body>