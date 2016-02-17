<?php
error_reporting(E_ALL ^ E_DEPRECATED);

include("lib/connect.php");

ob_start();

if(isset($_POST["product"])){
	$Productname = $_POST ["Productname"];
	$Productdescription = $_POST ["Productdescription"];
	$Productprice = $_POST ["Productprice"];
	$Productquantity = $_POST ["Productquantity"];

}
$database = new DB_SQL;
$products = $database->products();
?>
<h2>Products</h2>


<?php


$sql = mysql_query("SELECT * FROM product"); ?> 

<table id='products'width="900"	border="1"	align="center"	cellpadding="0"> 
    <?php 
        while($rows = mysql_fetch_array($products)) { 
    ?>
       <tr>
       	<td width="250"><a href="displayproduct.php"><?php echo $rows['Productname']; ?></a></td>
       	<td width="550"><?php echo $rows['Productdescription']; ?></td>
       	<td width="100"><?php echo $rows['Productprice']; ?></td>
       </tr>

     <?php   
        } 
     ?> 
 </table

?>


<?php
	$page_content = ob_get_contents();
	ob_clean();
	include("masterpage2.php");
?>