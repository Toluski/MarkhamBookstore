<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
	<!-- Skitter Styles -->
	<link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Markham BookStore | Welcome</title>
<style type="text/css">
body {
	background-color: #A29259;
}
</style>
	
	<!-- Skitter JS -->
	<script type="text/javascript" language="javascript" src="js/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>
	
	<!-- Init Skitter -->
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers_align: 'center',
				progressbar: true, 
				dots: true, 
				preview: true
			});
		});
	</script>
    
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
          <td><div id="content">
			<div class="border_box">
				<div class="box_skitter box_skitter_large">
					<ul>
						<li><a href="#"><img src="images/example/001.jpg" class="cube" /></a><div class="label_text"><p>Welcome to Markarm Online Bookstore</p></div></li>
						<li><a href="#"><img src="images/example/002.jpg" class="cubeRandom" /></a><div class="label_text"><p>Children Books Now Available </p></div></li>
						<li><a href="#"><img src="images/example/003.jpg" class="block" /></a><div class="label_text"><p>Get The Best deals you can imagine</p></div></li>
						<li><a href="#"><img src="images/example/004.jpg" class="cubeStop" /></a><div class="label_text"><p>Check out our latest products</p></div></li>	
					</ul>
				</div>
			</div>
		</div>&nbsp;</td>
        </tr>
      </table>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><?php
$DisplayForm = TRUE;
$errors = 0;

//if(isset($_POST['loginForm'])){

if(isset($_POST['uname']) && isset($_POST['pass'])) {
  include("dbconnect.php");
  if($DBConnect !== FALSE){
    $SQLstring = "SELECT userid, username, first_name, last_name FROM users WHERE username ='".
    $_POST['uname']. "' and password = '".md5($_POST['pass'])."'";
    $DisplayForm = FALSE;
    $QueryResult = @mysql_query($SQLstring, $DBConnect);
    echo mysql_error();
    if (mysql_num_rows($QueryResult)=== 0){
      echo "<p style='color:red;'><b>&nbsp;&nbsp;&nbsp;Username/password " . 
      " combination is not valid.</b></p>\n";
      ++$errors;
      $DisplayForm = TRUE;
    }
    else
    {
      $DisplayForm = FALSE;
    }
    
}

} 

if ($DisplayForm)
    {?>

<div id="wrap">
<form id="form1" name="loginForm" method="post" action="index.php">
  <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="93" bgcolor="#DACFAF"><strong> &nbsp;&nbsp;&nbsp;Username:</strong></td>
      <td width="149" bgcolor="#DACFAF"><label for="textfield"></label>
      <input type="text" name="uname" id="textfield" /></td>
      <td width="76" bgcolor="#DACFAF"><strong>Password:</strong></td>
      <td width="150" bgcolor="#DACFAF"><label for="textfield2"></label>
      <input type="password" name="pass" id="pass" /></td>
      <td width="196" bgcolor="#DACFAF"><input type="image" name="login" src="images/login.jpg" />&nbsp;</td>
      <td width="68" bgcolor="#DACFAF">&nbsp;</td>
      <td width="68" bgcolor="#DACFAF"><strong><a href="register.php">Register</a></strong></td>
    </tr>
  </table>
</form>
</div>

<?php }
else {
        $Row = mysql_fetch_assoc($QueryResult);
      $userID = $Row['userid'];
      $uname = $Row['username'];
      $userName = $Row['first_name']. " ". $Row['last_name'];
      

      echo "<table width=780px border=0px >";
                  echo "<tr>";
                  echo "<td style='color:red;'>";
                  echo "<b>&nbsp;&nbsp;&nbsp;Welcome: $userName!</b>";
                  echo "</td>";
                  echo"<td align='right'>";
                  echo "<form method='POST' action='logout.php'>";
                  echo "<input type='submit' name='submit' value='logout'>";
                  echo "</form>";
                  echo "</td>";
                  echo "</tr>";
                  echo "</table>";


                  $_SESSION['username'] = "$userName";
                  $_SESSION['uname'] = "$uname";

      }

    

?>&nbsp;</td>
  </tr>
</table>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="550"><p><img src="images/nav_home.jpg" width="400" height="40" /></p>
            <table width="400" border="0" cellpadding="4" cellspacing="3">
            <tr>
              <td><p><strong>Welcome Guest!</strong> Would you like to check out <strong><a href="listing.php">Latest books?</a></strong><a href="listing.php"></a></p>
                <p align="justify"><strong>Markham Online Bookstore</strong> is unique dreams come true.   Established as a virile platform   to provide an essential opportunity where   people can have access to   products anytime from anywhere around the world.</p>
                <p align="justify">We sell wide range of books collections, so you don't have any option going to super   markets to get you products. Here you can buy your products and get it   delivered to your door-step. Customer loyalty is our concern. you can   checkout out FAQ to learn more.</p>
                <p align="justify">The clarity of the mental picture   which we nurture at <strong>Markham Online Bookstore </strong>is a colourful vista of   Total Quality Service encapsulated in a professionally feasible   nutshell: <a href="about.php"><strong>Learn more</strong></a><strong></strong></p></td>
            </tr>
          </table></td>
          <td width="250"><img src="images/book-monster.jpg" width="394" height="394" /></td>
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