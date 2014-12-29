<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback Confirmation | Markham BookStore</title>
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
          <td width="550"><p><img src="images/nav_contact.jpg" width="400" height="40" /></p>
            <table width="539" border="0" cellpadding="4" cellspacing="3">
            <tr>
              <td width="461"><p align="left">&nbsp;</p>
                <table width="400" border="0" cellpadding="4" cellspacing="3">
                  <tr>
                    <td>
  <?php

	$email = "";
	$errors = 0;
	$email = $_POST['email'];
	$phone = $_POST['phone'];
  $msg = $_POST['message']; 
  $name  = $_POST['name'];


	//add the validation part
	include("dbconnect.php");
	$TableName = "feedback";
	
	if ($errors > 0){
	echo"<p><a href='contact.php'><b>Click Here</b></a> to return " 
	. " to the form and fix the errors indicated.</p>\n";
	}

	else if ($errors == 0){

	$SQLstring = "INSERT INTO $TableName " .
	" (date, name, email, phone, message) ".
	" VALUES(now(), '$name', '$email', '$phone', '$msg')";

	$QueryResult = @mysql_query($SQLstring, $DBConnect);
	mysql_close($DBConnect);
	//userName = $first . " " . $last;
	echo "<p style='color:red;'><b>Thank you, $name. </b></p>\n";
	echo "<b>We have received your request. \n We will get back to you shortly.</b>";
 	}
 	?>&nbsp;</td>
                  </tr>
                </table>
                <p align="left">&nbsp;</p>
                <p align="justify">&nbsp;</p>
                <p align="justify">&nbsp;</p></td>
            </tr>
          </table></td>
          <td width="250"><img src="images/contact-confirmation.jpg" width="241" height="274" /></td>
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