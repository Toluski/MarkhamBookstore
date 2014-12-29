<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products | Markham BookStore</title>
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
          <td width="550" valign="top"><p><img src="images/nav_product.jpg" width="400" height="40" /></p>
            <table width="455" border="0" align="center" cellpadding="4" cellspacing="3">
            <tr>
              <td width="461"><p align="left"><strong>Below are our available products.</strong></p>
                <p align="left"><?php
						
						include('dbconnect.php');
						if ($DBConnect !== FALSE)
{
	$SQLstring = "SELECT * from product LIMIT 10";
	$QueryResult = @mysql_query($SQLstring, $DBConnect)or die(mysql_error());						
						
						while($row = mysql_fetch_array($QueryResult))
								{
									//Pass URL of the images
									$image = $row['product_image'];
									
									echo "<table width=400px border=0px >";
									echo "<tr>";
									echo "<td>";
									echo "<img src=$image height='200' width='130'/><br><br>";
									echo "</td>";
									echo"<td>";
									echo "<b>$row[product_name]</b><br>";
									echo "<b>Price: $</b>$row[price]<br><br>";
									echo "<b>Author:</b><br>";
									echo "$row[author]<br><br>";
									echo "<b>Publication Year:</b><br>";
									echo "$row[year]<br><br>";
									echo "Enter Quantiy of books needed";
									echo "<form name = 'formqty' method = 'post' action ='add_cart.php?id=$row[productid]'>";
									//echo "<input type = 'text' name = 'qty' value = '1'/>";
									echo "<select name = 'qty' id = 'qty'>";
						  			echo "<option value='1'>1</option>";
									echo "<option value='2'>2</option>";
									echo "<option value='3'>3</option>";
									echo "<option value='4'>4</option>";
									echo "<option value='5'>5</option>";
									echo "<option value='6'>6</option>";
									echo "<option value='7'>7</option>";
									echo "<option value='8'>8</option>";
									echo "<option value='9'>9</option>";
                  					echo "</select>";
									echo "<br><input type = 'image' src='images/add-cart.png' />";
									echo "</form>";
									echo "</td>";
									echo "</tr>";
									echo "</table>";
									//echo "<a href=add_cart.php?id=$row[productno]>Add To Cart</a><br>";
									echo "<var><br>";


					
	
								}
								
								
								if(mysql_num_rows($QueryResult)<1)
								{
									echo "";
								}

								
}				
						


				?></p></td>
            </tr>
          </table></td>
          <td width="250" valign="top"><p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><img src="images/girl-books.jpg" width="307" height="535" /></p></td>
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