<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Registration | Markham BookStore</title>
<style type="text/css">
body {
	background-color: #A29259;
}
</style>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
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
          <td><img src="images/example/004.jpg" width="800" height="300" /></td>
        </tr>
      </table>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="550"><p><img src="images/nav_register.jpg" width="400" height="40" /></p>
            <table width="539" border="0" cellpadding="4" cellspacing="3">
            <tr>
              <td width="461"><p align="left"><strong>Fill the form below to complete registration.</strong></p>
                <form action="register_validation.php" method="post" name="form1" id="form1" onsubmit="MM_validateForm('txtUsername','','R','pwd','','R','comPwd','','R','tstFirstName','','R','txtLastName','','R','txtEmail','','RisEmail','txaAddress','','R');return document.MM_returnValue">
                  <table width="400" border="0" align="center" cellpadding="4" cellspacing="3">
                    <tr>
                      <td>Username:</td>
                      <td><label for="txtUsername"></label>
                        <input type="text" name="txtUsername" id="txtUsername" /></td>
                    </tr>
                    <tr>
                      <td>Password:</td>
                      <td><label for=""></label>
                        <input name="pwd" type="password" id="pwd" /></td>
                    </tr>
                    <tr>
                      <td>Confirm Password:</td>
                      <td><label for="comPwd"></label>
                        <input type="password" name="comPwd" id="comPwd" /></td>
                    </tr>
                    <tr>
                      <td>First Name:</td>
                      <td><label for="txtFirstName"></label>
                        <input type="text" name="txtFirstName" id="tstFirstName" /></td>
                    </tr>
                    <tr>
                      <td>Lastname:</td>
                      <td><label for="txtLastName"></label>
                        <input type="text" name="txtLastName" id="txtLastName" /></td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td><label for="txaAddress"></label>
                        <textarea name="txaAddress" id="txaAddress" cols="25" rows="3"></textarea></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td><label for="txtEmail"></label>
                        <input type="text" name="txtEmail" id="txtEmail" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="image" src="images/submit.jpg" />&nbsp;</td>
                    </tr>
                  </table>
                </form>
                <hr noshade="noshade" color="#996600" />
                &nbsp;
                <table width="480" border="0">
                  <tr>
                    <td><strong>
                    <input type="radio" name="radio" id="radio" value="radio" />
                    <label for="radio"></label>
I am a returning customer, Login Here</strong></td>
                    <td><strong><a href="index.php"><img src="images/login-button.jpg" alt="Account Login" width="166" height="35" border="0" /></a></strong></td>
                  </tr>
              </table></td>
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