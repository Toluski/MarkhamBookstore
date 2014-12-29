<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Validation | Markham BookStore</title>
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
          <td width="550"><p><img src="images/nav_register.jpg" width="400" height="40" /></p>
            <table width="539" border="0" cellpadding="4" cellspacing="3">
            <tr>
              <td width="461"><p align="left">&nbsp;</p>
                <table width="400" border="0" cellpadding="4" cellspacing="3">
                  <tr>
                    <td>
  <?php

	$email = "";
	$errors = 0;
	$registered = 0;
	$email = $_POST['txtEmail'];
	$password = $_POST['pwd'];
  $compass = $_POST['comPwd']; 


	//add the validation part
	include("dbconnect.php");
	$TableName = "users";
	if ($errors == 0){
	$SQLstring = "SELECT count (*) FROM $TableName". "WHERE email = $email";
	$QueryResult = @mysql_query ($SQLstring, $DBConnect);
	if ($QueryResult !== FALSE){
	$Row = mysql_fetch_row($QueryResult);
	
  if ($Row[0]>0){ 
    echo"<p>The email addrress entered (" .$email . ") is already registered.
	</p>\n";
	++$registered;}
	}
 

	}
	
	if ($errors > 0){
	echo"<p><a href='register.php'><b>Click Here</b></a> to return " 
	. " to the form and fix the errors indicated.</p>\n";
	}

  if ($password !== $compass){
    echo "<p>Password do not match</p>";
    echo"<p><a href='register.php'><b>Click Here</b></a> to return " 
  . " to the form and fix the errors indicated.</p>\n";
  }


	else if ($registered == 0 && $errors == 0){
	$first  = $_POST['txtFirstName'];
	$last = $_POST['txtLastName'];
  $add = $_POST['txaAddress'];
  $uname = $_POST['txtUsername'];
	$SQLstring = "INSERT INTO $TableName " .
	" (username, password, first_name, last_name, address, email) ".
	" VALUES('$uname', " .
	" '" . md5($password) . "', '$first', '$last', '$add', '$email')";

	$QueryResult = @mysql_query($SQLstring, $DBConnect);
	$clientID = mysql_insert_id($DBConnect);
	mysql_close($DBConnect);
	$userName = $first . " " . $last;
	echo "<p>Thank you, $userName. ";
	echo " Your new User ID is <strong>" . $clientID . "</strong>.</p>\n";
 	}
 	?>&nbsp;</td>
                  </tr>
                </table>
                <p align="left">&nbsp;</p>
                <p align="justify">&nbsp;</p>
                <p align="justify">&nbsp;</p></td>
            </tr>
          </table></td>
          <td width="250"><img src="images/user-registration.jpg" width="240" height="240" /></td>
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