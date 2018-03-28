<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php
include "storescripts/connect_to_mysql.php";
include "mysql_trans.php";
$dynamicList = "";
$sql = mysql_query("SELECT * FROM products ORDER BY date_added DESC LIMIT 5");
$productCount = mysql_num_rows($sql);
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){
             $id = $row["id"];
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
			 $dynamicList .= '<table width="100%" border="0" cellspacing="0" cellpadding="6">
        <tr>
          <td width="17%" valign="top"><a href="product.php?id=' . $id . '"><img style="border:#666 1px solid;" src="inventory_images/' . $id . '.jpg" alt="' . $product_name . '" width="77" height="102" border="1" /></a></td>
          <td width="83%" valign="top">' . $product_name . '<br />
            Rs.' . $price . '<br />
            <a href="product.php?id=' . $id . '" class = "myButton">View Product Details</a></td>
        </tr>
      </table>';
    }
} else {
	$dynamicList = "We have no products listed in our store yet";
}
mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Store Home Page</title>
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
</head>
<body>
<div align="center" id="mainWrapper">
  <?php include_once("template_header.php");
  	if (isset($_GET['success'])){
			echo "Successful Registration.";
	}
  	if (isset($_GET['userloginsuccess'])){
			echo "Successful Login.";
	}
	if (isset($_GET['resetsuccess'])){
			echo "Password Successfully Changed.";
	}
  ?>
  <div id="pageContent">
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="32%" valign="top"><h3>About HighBuy!</h3>
      <p>HighBuy is a big shopping site with over 150 companies and 5,000 employees including retailers, developers and other staff. It has lakhs of satisfied customers.<br />
      <p>HighBuy is designed by Saurabh Bhole and Sarvesh Samvedi. <br /></p></td>
    <td width="35%" valign="top"><h3>Latest Designer Fashions</h3>
      <p><?php echo $dynamicList; ?><br />
        </p>
      <p><br />
      </p></td>
    <?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();
if(!isset($_SESSION['user']))
{
 ?>
     <td width="33%" valign="top"><h3><a href="http://localhost/SoftwareP/user_registration.php" class = "myButton">New User? Register Here!!</a></h3>
      <p>Already a HighBuy Customer? Well come <a href="http://localhost/SoftwareP/user_login.php">login</a> and shop from our exclusive products.</p>
<a href="http://localhost/SoftwareP/user_login.php">Login Now</a>






      <p></p></td>
<?php } ?>

  </tr>
</table>

  </div>
  <?php include_once("template_footer.php");?>
</div>
</body>
</html>
