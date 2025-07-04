<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>購物車</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="eCommerceAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
    background-color: #FFE2E3;
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
	<div id="mainWrapper">
    <!-- This is the header content. It contains Logo and links -->
		<div style="margin-left: 50% ; margin-right: 20% ;">
			<h1>購物車</h1>
		</div>
</div>
	
	<?php
	$link = mysqli_connect("localhost", "a0418", "pwd0418");
	mysqli_select_db($link, "a0418");
	mysqli_query($link, "SET NAMES UTF8") ;

	$sqlstr = "SELECT pName, unitprice,quantity FROM CART WHERE mid='A00001'; " ;
	$result = mysqli_query($link, $sqlstr) ;
	$num = mysqli_num_rows($result) ;
	
	$i = 1 ;
	echo "<table align='center' border='1'>" ;
	echo "<tr>" ; 
		echo "<td>商品名稱</td>" ;
		echo "<td>價格</td>" ;
		echo "<td>數量</td>" ;
	echo "</tr>" ;
	
	
	while($i <= $num)
	{
		$record = mysqli_fetch_object($result) ;
		echo "<tr>";
		echo "<td>$record->pName</td>" ;
		echo "<td>$record->unitprice</td>" ;
		echo "<td>$trecord->quantity</td>" ;
		echo "</tr>" ;
		$i++ ;
	}
	echo "<table>" ;
	
	?>
	<br><br><br>
	
	<form method="post" action="Buy.php" target="_blank">
		<center><input type ="submit" value="購買"></input></center>
	</form>
	<form method="post" action="Delete.php" target="_blank">
	<center><input type ="submit" value="刪除"></input></center>
	</form>	
	<br><br><center><input type ="button" onClick="window.close()" value="關閉"></input></center>
</body>
</html>