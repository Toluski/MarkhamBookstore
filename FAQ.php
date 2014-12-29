<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="mb.css" />
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FAQ | Markham BookStore</title>
<style type="text/css">
body {
	background-color: #A29259;
}
</style>
	

<script src="jquery.js" type="text/javascript"></script>

<script type="text/javascript" src="animatedcollapse.js"></script>

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
          <td><img src="images/faq.jpg" width="800" height="300" /></td>
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
          <td width="550"><p><img src="images/nav_faq.jpg" width="400" height="40" /></p>
            <table width="487" border="0" cellpadding="4" cellspacing="3">
            <tr>
              <td width="461"><p><strong>Click on a question to reveal its answer.</strong> </p>
                <p><script type="text/javascript">
//animatedcollapse.addDiv('photo', 'fade=1,speed=400,hide=1')
animatedcollapse.addDiv('faq1', 'fade=1,speed=200,hide=1')

animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
                  <a href="javascript:animatedcollapse.toggle('faq1')" class="medium blu zapfont nodecor">
                    <strong> HOW DO I PURCHASE A BOOK ON YOUR WEBSITE? <span class="graay">[+]</span></strong><span class="graay"></span>
                    </a> 
                <div speed="200" fade="1" id="faq1" style="margin-top: 5px; border: 1px solid rgb(239, 239, 239); line-height: 20px; padding: 6px; background: none repeat scroll 0% 0% rgb(242, 242, 242); display: none;">
              You can pay for them using the stores standard payment method(s). Once purchased the value of the product(s) will be added to your own personal cart.              
 </div></p><script type="text/javascript">
//animatedcollapse.addDiv('photo', 'fade=1,speed=400,hide=1')
animatedcollapse.addDiv('faq2', 'fade=1,speed=200,hide=1')

animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
 <a href="javascript:animatedcollapse.toggle('faq2')" class="medium blu zapfont nodecor"><strong> HOW DO I MAKE PAYMENT? <span class="graay">[+]</span></strong><span class="graay"></span>
              </a> 
    		  <div speed="200" fade="1" id="faq2" style="margin-top: 5px; border: 1px solid rgb(239, 239, 239); line-height: 20px; padding: 6px; background: none repeat scroll 0% 0% rgb(242, 242, 242); display: none;">
              We have various way of making payment. This can be either by Credit Cards or Cheques or through VPP..              </div>
                <p><script type="text/javascript">
//animatedcollapse.addDiv('photo', 'fade=1,speed=400,hide=1')
animatedcollapse.addDiv('faq3', 'fade=1,speed=200,hide=1')

animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
              <a href="javascript:animatedcollapse.toggle('faq3')" class="medium blu zapfont nodecor">
			  <strong> I CANNOT CHECKOUT PRODUCTS IN MY CART <span class="graay">[+]</span><span class="graay"></span></strong>
              </a> 
    		  <div speed="200" fade="1" id="faq3" style="margin-top: 5px; border: 1px solid rgb(239, 239, 239); line-height: 20px; padding: 6px; background: none repeat scroll 0% 0% rgb(242, 242, 242); display: none;">
               You can only checkout products in your cart if you are a registered customer and not just a guest.              </div>
    		  <strong>
    		  </p>
    		  <script type="text/javascript">
//animatedcollapse.addDiv('photo', 'fade=1,speed=400,hide=1')
animatedcollapse.addDiv('faq4', 'fade=1,speed=200,hide=1')

animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
              </script>
    		  <a href="javascript:animatedcollapse.toggle('faq4')" class="medium blu zapfont nodecor"> WHEN WILL MY PRODUCT BE DISPATCHED TO ME?  <span class="graay">[</span></a></strong><a href="javascript:animatedcollapse.toggle('faq4')" class="medium blu zapfont nodecor"><span class="graay"><strong>+]</strong></span></a><strong><a href="javascript:animatedcollapse.toggle('faq4')" class="medium blu zapfont nodecor"><span class="graay"></span></a></strong>
              <div speed="200" fade="1" id="faq4" style="margin-top: 5px; border: 1px solid rgb(239, 239, 239); line-height: 20px; padding: 6px; background: none repeat scroll 0% 0% rgb(242, 242, 242); display: none;">
                Once your payment has been confirmed, you get your product shipped to your address. </div>
                <p><script type="text/javascript">
//animatedcollapse.addDiv('photo', 'fade=1,speed=400,hide=1')
animatedcollapse.addDiv('faq5', 'fade=1,speed=200,hide=1')

animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
              &nbsp;</td>
            </tr>
          </table></td>
          <td width="250"><img src="images/faq.png" width="304" height="285" /></td>
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