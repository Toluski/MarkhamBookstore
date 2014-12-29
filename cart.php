<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Cart | Markham BookStore</title>
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
          <td width="550" valign="top"><p><img src="images/nav_cart.jpg" width="400" height="40" /></p>
            <table width="455" border="0" align="center" cellpadding="4" cellspacing="3">
            <tr>
              <td width="461"><p align="left">&nbsp;</p>
                <p align="left"><?php
                
						//Pass the required values from the session into variable 
               
            if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li>';
        echo '<h3>'.$cart_itm["bookname"].'</h3>';
        echo '<div><b>Book ID :</b> '.$cart_itm["productid"].'</div>';
        echo '<div><b>Author :</b> '.$cart_itm["author"].'</div>';
        echo '<div><b>Published Year :</b> '.$cart_itm["year"].'</div>';
        echo "<form name = 'formqty' method = 'post' action ='update_cart.php?updatep=$cart_itm[productid]'>";
        echo "<table width=200px border=0px cellpadding='0' cellspacing='0'>";
        echo "<tr>";
        echo "<td>";
        echo '<b>Quantity : </b><input type = "text" size="1" maxlength="1"name = "qty" value = '.$cart_itm["qty"].'>';
        echo "</td>";
        echo "<td>";
        echo "<input type = 'image' src='images/update.gif' value = 'Add To Cart' />";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";
        echo '<div><b>Price :</b> $'.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
        echo "<b>Subtotal :</b> $$subtotal<br/>";
        echo '<a class="red" href="delete_book.php?removep='.$cart_itm["productid"].'">&times; Remove Item</a>';

         $_SESSION['total'] = $total;
    }
    echo '</ol>';
    echo "<table width=400px border=0px >";
    echo "<tr>";
    echo "<td>";
    echo "<h2 style='color:red';><strong>Grand Total : $$total</strong></h2>";
    echo "</td>";
    echo "<td>";
    echo "<a href='checkout.php'><img src='images/checkout_now.png'/></a>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    //echo '<span><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo "<h2 style='color:red';>Your Cart is empty</h2>";
    echo "<h2 style='color:red';>You have not added any book to cart yet</h2>";
}

         /*    if (isset($_SESSION['bookid'])) {
						$bookid = $_SESSION['bookid'];
						$bookName = $_SESSION['productname'];
						$author = $_SESSION['author'];
						$year = $_SESSION['year'];
						$quantity = $_SESSION['qty'];
						$price = $_SESSION['price'];
						$totalprice = $_SESSION['totalprice'];

           echo  "Book Id: $bookid<br/>";
            echo  "Book Name: $bookName<br/>";
            echo  "Authors Name: $author<br/>";
            echo  "Published Year: $year<br/>";
            echo  "Quantity: $quantity<br/>";
            echo  "Price: $$price<br/>";
            echo  "Total Price: $$totalprice<br/>";
            */
	
				?>&nbsp;</p>
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