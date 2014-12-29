<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="refresh" CONTENT="4;URL=cart.php">

<title>Update Cart | Markham BookStore</title>
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
          <td width="550" valign="top"><p><img src="images/nav_book.jpg" width="400" height="40" /></p>
            <table width="455" border="0" align="center" cellpadding="4" cellspacing="3">
            <tr>
              <td width="461"><p align="left"><?php
              //update item from shopping cart
if(isset($_GET["updatep"]) && isset($_SESSION["products"]))
{

    $product_code   = $_GET["updatep"]; //get the product codeand stored in $product_code

    $found = false; //set found item to false
           
            foreach ($_SESSION["products"] as $cart_itm) //loop through session array
            {
                if($cart_itm["productid"] == $product_code){ //the item exist in array

                    $product[] = array('productid'=>$cart_itm["productid"], 'bookname'=>$cart_itm["bookname"], 'author'=>$cart_itm["author"], 'year'=>$cart_itm["year"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
                    $found = true;
                }
            }

            /*if($found !== false) //we didn't find item in array
            {
                 $_SESSION["products"] = $product;
            }
            */
    
   
}
			  ?>&nbsp;</p>
                <p align="left"><strong>The book has been Updated successfully.</strong></p>
                <p align="left"><strong>You will be redirected in 4 seconds</strong></p>
                <p align="left"><strong>Thank you!</strong></p></td>
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