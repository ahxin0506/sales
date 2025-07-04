<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<style type="text/css">
body {
    background-color: #FDECEC;
    text-align: center;
    font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 50px;
    color: #FF1A1D;
}
body,td,th {
    color: #CD0002;
}
</style>
</head>

<body style="text-align: center; font-size: 50px; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color: #FF2E31;">
<p>
    <?php
	$link = mysqli_connect("localhost","a0434","pwd0434");
    mysqli_select_db($link,"a0434");
    mysqli_query($link,"SET NAMES UTF8");
 
    $sqlstr ="SELECT pname FROM PRODUCT WHERE pno='c0222';";		   
    $result = mysqli_query($link,$sqlstr);
	$num = mysqli_num_rows($result);
	$record = mysqli_fetch_object($result);
	 echo "<tr>";
     echo "<td>$record->pname</td>";
     echo "</tr>";
     echo "</table><BR>";	
	 echo"<td>成功加入購物車 !</td>";
     echo'<a href="http://120.107.152.110/~a0418/HA/newproduct.html">回首頁</a><br>';
	
	mysqli_free_result($result);
    mysqli_close($link); 
?>
</body>
</html>