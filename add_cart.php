<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Products | Markham BookStore</title>
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
          <td width="550" valign="top"><p><img src="images/nav_add-product.jpg" width="400" height="40" /></p>
            <table width="455" border="0" align="center" cellpadding="4" cellspacing="3">
            <tr>
              <td width="461"><p align="left"><?php
                $id = $_GET['id'];
				$qtys = $_POST['qty'];
				
				//Query the product table to get the details of the selected product  //
				include('dbconnect.php');
						if ($DBConnect !== FALSE)
						{
						$query = "select * from product where productid = '$id'";
						$result = mysql_query($query) or die(mysql_error());
						
						while($row = mysql_fetch_array($result))
						{
							//Pass the required values into variable  //
							
							$bookid = $row['productid'];
							$bookName = $row['product_name'];
							$author = $row['author'];
							$year = $row['year'];
							$quantity = $_POST['qty'];
							$price = $row['price'];
							$totalprice = $price * $qtys;


					/*	$_SESSION['bookid'] = "$bookid";
						$_SESSION['productname'] = "$bookName";
						$_SESSION['author'] = "$author";
						$_SESSION['year'] = "$year";
						$_SESSION['qty'] = "$quantity";
						$_SESSION['price'] = "$price";
						$_SESSION['totalprice'] = "$totalprice";
						*/
						
						}
						}
						
						
						if($result)
						{

$new_product = array(array('productid'=>$bookid, 'bookname'=>$bookName, 'author'=>$author, 'year'=>$year, 'qty'=>$quantity, 'price'=>$price));

if(isset($_SESSION["products"])) //if we have the session
        {
            $found = false; //set found item to false
           
            foreach ($_SESSION["products"] as $cart_itm) //loop through session array
            {
                if($cart_itm["productid"] == $bookid){ //the item exist in array

                    $product[] = array('productid'=>$cart_itm["productid"], 'bookname'=>$cart_itm["bookname"], 'author'=>$author, 'year'=>$year, 'qty'=>$quantity, 'price'=>$cart_itm["price"]);
                    $found = true;
                }else{
                    //item doesn't exist in the list, just retrive old info and prepare array for session var
                    $product[] = array('productid'=>$cart_itm["productid"], 'bookname'=>$cart_itm["bookname"], 'author'=>$author, 'year'=>$year, 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
                }
            }
           
            if($found == false) //we didn't find item in array
            {
                //add new user item in array
                $_SESSION["products"] = array_merge($product, $new_product);
            }else{
                //found user item in array list, and increased the quantity
                $_SESSION["products"] = $product;
            }
           
        }else{
            //create a new session var if does not exist
            $_SESSION["products"] = $new_product;
        }
       
    
							
						echo "<b style='color:red';><h2>Book Successfully added to cart</h2></b><br>";      
						echo  "<b><h3>$bookName</h3></b> Added to cart successfully.<br><br>";
						echo "<b>Qty is $qtys</b>";
						}
						
						else
						{
							echo "Error adding item to Your Shopping Cart.<br><br>";
						}
						
						
				?>&nbsp;</p></td>
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