<? include ("../../../_require.php");
		  				require_once('../../../includes/simple_bb_code.php');
	function allhtmlentities($string) {
    if ( strlen($string) == 0 ) 
        return $string;
    $result = '';
    $string = htmlentities($string, HTML_ENTITIES);
    $string = preg_split("//", $string, -1, PREG_SPLIT_NO_EMPTY);
    $ord = 0;
    for ( $i = 0; $i < count($string); $i++ ) {
        $ord = ord($string[$i]);
        if ( $ord > 127 ) {
            $string[$i] = '&#' . $ord . ';';
        }
    }
    return implode('',$string);
}

		  		$articlepid=$_GET['articlepid'];
//display results
		   	$query="SELECT * FROM news WHERE articlepid='$articlepid' LIMIT 1";
			$result=mysql_db_query ($dbname, $query, $link);
				$row=mysql_fetch_array ($result);
				$date=date(jS, strtotime($row[articledate]))." ".date(F, strtotime($row[articledate]))." ".date(Y, strtotime($row[articledate]));
				$articletitle=$row['articletitle'];
				$articlesubtitle=$row['articlesubtitle'];
				$articletext=$row['articletext'];
				
				$articlesubtitle=allhtmlentities($articlesubtitle);
				$articletitle=allhtmlentities($articletitle);
				$articletext=allhtmlentities($articletext);
				
		$bb = new Simple_BB_Code();
		$articlesubtitle = $bb->parse($articlesubtitle);
		$articletitle = $bb->parse($articletitle);
		$articletext = $bb->parse($articletext);
		 
		
		  ?>
          <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><!-- #BeginTemplate "/Templates/hotsite.dwt.php" --><!-- DW6 -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- #BeginEditable "doctitle" -->
<title>Viva! Media Release - <? print strip_tags($articletitle); ?></title>
<style type="text/css">
<!--
/* mediadates */



#col-mediadates ul {
	margin-left: 7px;
	padding-left: 10px;
	margin-top: 0;
	list-style-type: disc;
}

#col-mediadates li {
	margin-bottom: 8px;
	font: bold 13px Arial, Helvetica, sans-serif;
}




#col-mediadates li a:link, #col-right li a:visited {
}

#col-mediadates li a:hover, #col-left li a:active {
	text-decoration: underline;
}
-->
</style>
<!-- #EndEditable -->
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
<!-- #BeginEditable "head" --><!-- #EndEditable -->
</head>

<body>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr valign="top">
          <td width="41" height="41" bgcolor="#990099" class="bgleft"><img src="/campaigns/hot/images/bgtl.jpg" alt="" width="41" height="41"></td>
          <td class="bgtop"><?php include '../../campaigns/hot/includes/menu.php'; ?></td>
          <td width="41" height="41" class="bgright"><img src="/campaigns/hot/images/bgtr.jpg" alt="" width="41" height="41"></td>
        </tr>
      </table>
   </td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="15" class="bgleft">&nbsp;</td>
        <td valign="top" bgcolor="#FFFFFF"><!-- #BeginEditable "banner" --><img src="/campaigns/hot/images/banner01.jpg" alt="" width="724" height="249"><!-- #EndEditable -->
          <div id="content"><!-- #BeginEditable "content" -->
          

          
          <h1>Media Release</h1>
          <?
		   	
				
print "<p>$date</p><h1>$articletitle</h1>";
if ($articlesubtitle){
print "<h2>$articlesubtitle</h2>";
}
print "<p>$articletext</p>";
			
             
	?>
             <?
		mysql_close($link);
		  ?>
		  
          <!-- #EndEditable -->
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
<!-- #EndTemplate --></html>
