<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/hotsite.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Viva! HOT! Campaign</title>
<!-- InstanceEndEditable -->
<link href="/campaigns/hot/includes/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/campaigns/hot/includes/ddtabmenu.css">
<script type="text/javascript" src="/campaigns/hot/includes/ddtabmenu.js">

/***********************************************
* DD Tab Menu script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script type="text/javascript">

//SYNTAX: ddtabmenu.definemenu("tab_menu_id", integer OR "auto")
ddtabmenu.definemenu("ddtabs1", "auto") //initialize Tab Menu #1 with 1st tab selected
</script>
<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript">
<!--
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
//-->
</script>
<!-- InstanceEndEditable -->
</head>

<body>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr valign="top">
          <td width="41" height="41" bgcolor="#990099" class="bgleft"><img src="/campaigns/hot/images/bgtl.jpg" alt="" width="41" height="41"></td>
          <td class="bgtop"><?php include '../../../campaigns/hot/includes/menu.php'; ?></td>
          <td width="41" height="41" class="bgright"><img src="/campaigns/hot/images/bgtr.jpg" alt="" width="41" height="41"></td>
        </tr>
      </table>
   </td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="15" class="bgleft">&nbsp;</td>
        <td valign="top" bgcolor="#FFFFFF"><!-- InstanceBeginEditable name="banner" --><img src="/campaigns/hot/images/banner04.jpg" alt="Get Involved and Save the World!" width="724" height="249"><!-- InstanceEndEditable -->
          <div id="content"><!-- InstanceBeginEditable name="content" -->
            <h1><strong>Get Involved and Save the World!</strong></h1>
<p>            <?
			if (isset($_POST['Submit'])) { 

		  
//captcha///////////////////////////
		  
		  require_once('../../../vivapeakchallenge/recaptchalib.php');
$privatekey = "6LcdhwsAAAAAANHKz21lpKTZpMvsPPZ8eQUpflnk";
$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
  die ("<h2>Please try again, thank you for your patience</h2><p>The reCAPTCHA we use to protect us against spam donations wasn't entered correctly.<br><br><b>Please use the back button on your browser to go back and try it again.</b><br><br>Other ways to get in touch with us:
<br><br>
<b>By phone:</b> 0117 944 1000 (Mon-Fri, 9am-6pm)<br>
<b>By email:</b> liam@viva.org.uk<br>
<b>By post:</b> Viva! Vegetarians International Voice for Animals 8 York Court, Wilder Street, Bristol BS2 8QH, UK<br>
");
}
//captcha///////////////////////////


			$Name =trim($_POST['Name']);
$Name = strip_tags($Name);
$Name = str_replace("\"","'",$Name);

$Address =trim($_POST['Address']);
$Address = strip_tags($Address);
$Address = str_replace("\"","'",$Address);

$Address2 =trim($_POST['Address2']);
$Address2 = strip_tags($Address2);
$Address2 = str_replace("\"","'",$Address2);

$Town =trim($_POST['Town']);
$Town = strip_tags($Town);
$Town = str_replace("\"","'",$Town);

$County =trim($_POST['County']);
$County = strip_tags($County);
$County = str_replace("\"","'",$County);

$Postcode =trim($_POST['Postcode']);
$Postcode = strip_tags($Postcode);
$Postcode = str_replace("\"","'",$Postcode);

$Email =trim($_POST['Email']);
$Email = strip_tags($Email);
$Email = str_replace("\"","'",$Email);

$Telephone =trim($_POST['Telephone']);
$Telephone = strip_tags($Telephone);
$Telephone = str_replace("\"","'",$Telephone);

$Other_Comments =trim($_POST['Other_Comments']);
$Other_Comments = strip_tags($Other_Comments);
$Other_Comments = str_replace("\"","'",$Other_Comments);

$dl =str_replace("\"","'",strip_tags(trim($_POST['dl'])));
$a5 =str_replace("\"","'",strip_tags(trim($_POST['a5'])));
$posters =str_replace("\"","'",strip_tags(trim($_POST['posters'])));

$emailbody="Order Details:
DL Leaflets: $dl
A5 Leaflets: $a5
Posters: $posters

Name: $Name
Address: $Address
$Address2
$Town
$County
$Postcode

$Email
$Telephone

$Other_Comments";
mail ("liam@viva.org.uk","HOT Order", $emailbody);
print "<h2>Thanks you for your order.</h2>";


			};
			?></p>
            <p>To get banners and leaflets contact Liam at <a href="mailto:liam@viva.org.uk">liam@viva.org.uk</a> and he'll send you some.</p>
            <p>Viva! have produced two fantastic new leaflets, and a poster, we can send you for free. The best thing for showing your friends, work colleagues and family that there’s no such thing as a meat eating environmentalist! In turn they can send off for a free pack with all the tips for living a lip smacking, animal protecting and planet saving vegan diet!</p>
            <p>The DL (small) leaflet is ideal for door-dropping in your local neighbourhood. Even just half an hour of your time can make a world of difference – and take this planet saving message to a receptive audience who might not have otherwise heard it.</p>
            <p>Our larger A5 leaflet has more in-depth information on how meat and dairy consumption are at the heart of most of the world’s current problems – and offers practical advice on what each individual can do to readdress the balance. These are not suitable for door-dropping (as they are relatively expensive), but are ideal for giving out to people at meetings, at school or at work.</p>
            <p>We’ve also produced some very eye-catching "Meaty you're making me HOT!" posters, which will make a splash wherever they’re displayed.</p>
            <p>Order your FREE materials below and start saving the planet today! Please note: we regret we cannot send leaflets outside of the UK</p>
            <?
			if (isset($_POST['Submit'])) { 



			}else{// form not submitted so show form
			?>
            <form method="post" action="index.php" onSubmit="return isReady(this)">
              <table border="0" cellspacing="0" cellpadding="5">
                <tr>
                  <td><h3>Material</h3></td>
                  <td><h3>Quantity</h3></td>
                </tr>
                <tr>
                  <td>DL Leaflets</td>
                  <td><select name="dl" id="dl">
                    <option>Choose quantity</option>
                    <option>0</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="150">150</option>
                  </select>                  </td>
                </tr>
                <tr>
                  <td>A5 Leaflets</td>
                  <td><select name="a5" id="a5">
                    <option>Choose quantity</option>
                    <option>0</option>
                    <option value="5">5</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                                                      </select></td>
                </tr>
                <tr>
                  <td>Posters</td>
                  <td><select name="posters" id="posters">
                    <option>Choose quantity</option>
                    <option>0</option>
                    <option value="2">2</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                                                      </select></td>
                </tr>
              </table>
              <br>
              <table border="0" cellspacing="0" cellpadding="3">
                <tr>
                  <td>Name*:</td>
                  <td><input name="Name" type="text" id="Name" size="25"></td>
                </tr>
                <tr>
                  <td valign="top">Address*: </td>
                  <td><input name="Address" type="text" id="Address" value="" size="25">
                      <br>
                      <input name="Address2" type="text" id="Address2" value="" size="25">                  </td>
                </tr>
                <tr>
                  <td>Town</td>
                  <td><input name="Town" type="text" id="Town" value="" size="25"></td>
                </tr>
                <tr>
                  <td>County</td>
                  <td><input name="County" type="text" id="County" value="" size="25"></td>
                </tr>
                <tr>
                  <td>Postcode*</td>
                  <td><input name="Postcode" type="text" id="Postcode" value="" size="25"></td>
                </tr>
                <tr>
                  <td>Email address:</td>
                  <td><input name="Email" type="text" id="Email" size="25"></td>
                </tr>
                <tr>
                  <td>Telephone no:</td>
                  <td><input name="Telephone" type="text" id="Telephone" size="25"></td>
                </tr>
                <tr>
                  <td>Other comments:</td>
                  <td><input name="Other_Comments" type="text" id="Other_Comments" size="25"></td>
                </tr>
              </table>
              <p align="center"><?php
require_once('../../../vivapeakchallenge/recaptchalib.php');
$publickey = "6LcdhwsAAAAAAK8GnE76rTXnNbgcNt6O2INNehT9"; // you got this from the signup page
echo recaptcha_get_html($publickey);
?><input name="Submit" type="submit" onClick="MM_validateForm('Name','','R','Address','','R','Postcode','','R');return document.MM_returnValue"  value="Submit">
              </p>
            </form>
            <?
			}//show form only if form not been submitted
			?>
            
          <!-- InstanceEndEditable -->
            <div align="center" class="smalltext"><b>Viva!</b> Vegetarians International Voice for 
              Animals<br>
              8 York Court, Wilder Street, Bristol BS2 8QH, UK<br>
              T: 0117 944 1000 F: 0117 924 4646 E: <a href="mailto:info@viva.org.uk">info@viva.org.uk</a></div>
          </div></td>
        <td width="15" class="bgright">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="/campaigns/hot/images/bgbottom.jpg" alt="" width="754" height="41"></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
