<?php
session_start();
session_destroy();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="refresh" CONTENT="4;URL=index.php">
<title>Logout | Markham BookStore</title>
<style type="text/css">
body {
	background-color: #A29259;
}
</style>
	
	
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FFFFFF"><table width="800" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="images/logo.jpg" width="800" height="150" alt="Markham BookStore" /></td>
      </tr>
    </table>
      <table background="images/nav_bg.jpg" width="800" height="40" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><?php
		  echo"";
		  include("nav.php");
          ?>&nbsp;</td>
        </tr>
      </table>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><img src="images/example/004.jpg" width="800" height="300" /></td>
        </tr>
      </table>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="550" valign="top"><p><img src="images/nav_logout.jpg" width="400" height="40" /></p>
            <table width="385" border="0" align="right" cellpadding="4" cellspacing="3">
            <tr>
              <td width="461"><p align="left"><strong>You have been logged out of the system.</strong></p>
                <p align="left"><strong>You will be redirected in 4 seconds</strong></p>
                <p align="left"><strong>Thank you!</strong></p>
                <p align="justify">&nbsp;</p>
                <p align="justify">&nbsp;</p></td>
            </tr>
          </table></td>
          <td width="250"><img src="images/logout-button.jpg" width="400" height="300" /></td>
        </tr>
    </table>
    <br /></td>
  </tr>
</table>
<p><table width="800px" border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td class="white">&nbsp;&nbsp;&nbsp;&nbsp;<strong><span class="black">All Rights Reserved &copy; 2014, Tolu  &amp; Newton</span></strong></td>
        <td></td>
        <td align="right"><a href="http://www.facebook.com" target="_blank"><img src="images/facebook.png"></a>&nbsp;<a href="#"><img src="images/twitter.png"></a>&nbsp;<a href="#"><img src="images/google.png"></a>&nbsp;<a href="#"><img src="images/mail.png"></a>&nbsp;<a href="#"><img src="images/linkedin.png"></a>&nbsp;<a href="#"><img src="images/skype.png"></a>&nbsp;<a href="#"><img src="images/youtube.png"></a>&nbsp;&nbsp;&nbsp;</td>
      </tr>
  </tr>
</table>
</body>
</html>