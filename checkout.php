<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Checkout | Markham BookStore</title>
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
      <table width="790" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <?php
		  echo"";
		  include("session.php");
          ?></td>
        </tr>
      </table>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="550" valign="top"><p><img src="images/nav_checkout.jpg" width="400" height="40" /></p>
            <table width="455" border="0" align="center" cellpadding="4" cellspacing="3">
            <tr>
              <td width="461"><p align="left"><?php
               
                if(!isset($_SESSION["username"]))
                {
                  header('Location: ./register.php');
                }
				
				 ///////////////////////////////////////////////////////////////////////////////////////////////
				  ///// Connects to database    //////
				                                                                  //////////////
				  //////////////////////////////////////////////////////////////////////////////////////////////
				  
				include('dbconnect.php');
            if ($DBConnect !== FALSE)
{
	$total = $_SESSION['total'];
  $uname = $_SESSION['uname'];
    
  $SQLstring = "SELECT * from users where username = '$uname' "; 
  $QueryResult = @mysql_query($SQLstring, $DBConnect)or die(mysql_error());

				$clientrecord = mysql_fetch_row($QueryResult);
      }
			
                
				?>&nbsp;<strong>Use this page to process your payment</strong></p>
                <form method="post" action="">
                <table width="414" align="center" cellpadding="5" cellspacing="5">
                  <tr align="left">
                    <td>Full Name:<br/></td>
                    <td><input name="txtUsername" type="text" id="txtUsername" size="30" readonly="readonly" value="<?php echo $clientrecord[3]; echo "&nbsp;"; echo $clientrecord[4]; ?>"/></td>
                  </tr>
                  <tr align="left">
                    <td>Address:<br/></td>
                    <td><input name="txtPassword" type="text" id="txtPassword" size="30" readonly="readonly" value="<?php echo $clientrecord[5]; ?>"/></td>
                  </tr>
                  <tr align="left">
                    <td>Amount: <br/></td>
                    <td><input name="txtDate" type="text" id="txtDate" size="30" readonly="readonly" value="<?php echo "$"; echo $total; ?>"/></td>
                  </tr>
                  <tr align="left">
                    <td> Enter Credit No:</td>
                    <td><input name="txtName" type="text" id="txtName" size="30" placeholder="Enter Credit Card #"/></td>
                  </tr>
                  <tr align="left">
                    <td>&nbsp;</td>
                    <td><input type="image" src="images/paynow.png" />&nbsp;</td>
                  </tr>
                </table></form>
                <p align="left">&nbsp;</p></td>
            </tr>
          </table></td>
          <td width="250" valign="top"><p><img src="images/shoppingcart.jpg" width="300" height="300" /></p></td>
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