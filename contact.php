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
	
  ?>
  <div id="pageContent">
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="86%" valign="top"><h3>Contact us at:</h3>
      <p>HighBuy<br />
        VIT Software Dept<br />
        Vellore, Tamil Nadu,<br />
         </p>
      <p>+919047922278 </p>
      <p>email us at - saurabh.smartest@gmail.com </p>
      <p>Saurabh Bhole,<br />
        <a href="mailto:saurabh.smartest@gmail.com">saurabh.smartest@gmail.com</a>,<br />
        9047922278</p>
      <p>Sarvesh Samvedi,<br />
        <a href="mailto:sarveshsamvedi@gmail.com">sarveshsamvedi@gmail.com</a>,<br />
        9818897777<br />
</p></td>
    <td width="4%" valign="top"><p><br />
        </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();
if(!isset($_SESSION['user']))
{
 ?>
     <td width="10%" valign="top"><h3>&nbsp;</h3>
<p></p></td>
<?php } ?>
   
  </tr>
</table>

  </div>
  <?php include_once("template_footer.php");?>
</div>
</body>
</html>