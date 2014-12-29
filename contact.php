<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us | Markham BookStore</title>
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
          <td><img src="images/contact.jpg" width="800" height="300" /></td>
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
      <p><img src="images/nav_contact.jpg" width="400" height="40" /></p>
      <table width="780" border="0" align="center" cellpadding="3" cellspacing="2">
        <tr>
          <td valign="top"><b>Contact Information</b><br/>
            <br/>
            <b>Office Address:</b><br/>
            <br/>
            265 Yorkland Blvd, North York, Toronto, ON M2J 1S5<br/>
            info@markhambookstore.com | 647-384-9454<br/>
            <br/>
            <b>Newton Osinowo </b><i>(Help and Support)</i><br/>
            647-384-9454<br/>
            <br/>
            <b>Antonio Tolulope </b><i>(System Analyst)</i><br/>
            647-785-9939 </td>
          <td><b>Fill the Form Below</b><br/>
            <br/>
            <form action="contact_validation.php" method="post" name="contactForm" onsubmit="MM_validateForm('nameid','','R','emailid','','RisEmail','phoneid','','R','msgid','','R');return document.MM_returnValue">
              <table width="400" cellpadding="4" cellspacing="3">
                <tr>
                  <td>Name:</td>
                  <td><input type="text" name="name" id="nameid" placeholder="Enter Full Name" /></td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td><input type="text" name="email" id="emailid" placeholder="Enter Your Email" /></td>
                </tr>
                <tr>
                  <td>Phone:</td>
                  <td><input type="text" name="phone" id="phoneid" placeholder="Enter Your Phone #" /></td>
                </tr>
                <tr>
                  <td>Message:</td>
                  <td><textarea name="message" id="msgid" placeholder="Enter Your Message"></textarea></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Send" /></td>
                </tr>
              </table>
          </form></td>
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