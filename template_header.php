<div id="pageHeader"><table width="100%" border="0" cellspacing="0" cellpadding="12">
  <tr>
    <td width="32%"><a href="http://localhost/SoftwareP/index.php"><img src="logo.jpg" alt="Logo" width="252" height="36" border="0" /></a></td>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();
if(!isset($_SESSION['user']))
{
 ?>


    <td width="68%" align="right"> <a href="http://localhost/SoftwareP/user_login.php" class = "myButton">Login</a> | <a href="http://localhost/SoftwareP/forgetpass.php" class = "myButton">Reset Your Password</a></td>
<?php } ?>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();
if(isset($_SESSION['user']))
{
 ?>


    <td width="68%" align="right"> You are logged in as: <?php echo $_SESSION["user"] ?> <a href="http://localhost/SoftwareP/logout.php" class = "myButton">Logout</a> | <a href="http://localhost/SoftwareP/cart.php" class = "myButton">Your Cart</a> | <a href="http://localhost/SoftwareP/user_profile.php" class = "myButton">Edit profile</a></td>
<?php } ?>
	</tr>
  <tr>
    <td colspan="2"><a href="http://localhost/SoftwareP/index.php" class = "myButton">Home</a> &nbsp; &middot; &nbsp; <a href="http://localhost/SoftwareP/list_all_products.php" class = "myButton">Products</a> &nbsp; &middot; &nbsp; <a href="http://localhost/SoftwareP/help.php" class = "myButton">Help</a> &nbsp; &middot; &nbsp; <a href="http://localhost/SoftwareP/contact.php" class = "myButton">Contact</a></td>
    </tr>
  </table>
</div>
