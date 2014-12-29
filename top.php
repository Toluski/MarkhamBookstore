<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Top</title>
  <link rel="stylesheet" href="mb.css" />
</head>

<body>

<?php
$DisplayForm = TRUE;
$errors = 0;

if(isset($_POST['loginForm'])){
  include("dbconnect.php");
  if($DBConnect !== FALSE){
    $SQLstring = "SELECT userid, first_name, last_name FROM users WHERE username ='".
    $_POST['uname']. "' and password = '".md5($_POST['pass'])."'";
    $DisplayForm = FALSE;
    $QueryResult = @mysql_query($SQLstring, $DBConnect);
    echo mysql_error();
    if (mysql_num_rows($QueryResult)=== 0){
      echo "<p>The email address/password " . 
      " combination is not valid.</p>\n";
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


<form id="form1" name="loginForm" method="post" action="top.php">
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

<?php }
else {
        $Row = mysql_fetch_assoc($QueryResult);
      $userID = $Row['userid'];
      $userName = $Row['first_name']. " ". $Row['last_name'];
      echo "<p>Welcome back, $userName!</p>\n";
      }
    

?>
</body>
</html>