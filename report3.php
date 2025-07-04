<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body bgcolor=#BCE0FF>
<?php
     echo"<center>";
	 $link = mysqli_connect("localhost","a0434","pwd0434");
     mysqli_select_db($link,"a0434");
     mysqli_query($link,"SET NAMES UTF8");
 
     $sqlstr = "SELECT PRODUCT.pno, PRODUCT.pname, PRODUCT.model, PRODUCT.stock, RECORD.amount, PRODUCT.stock-RECORD.amount AS 'Balance' FROM PRODUCT,RECORD,TRANSACTION WHERE TRANSACTION.transtime BETWEEN '2022-01-01 00:00:00' AND '2022-03-31 23:59:59' AND PRODUCT.pno = RECORD.pno AND RECORD.tno = TRANSACTION.tno;";
			   
     $result = mysqli_query($link,$sqlstr);

     $num = mysqli_num_rows($result);
     echo"<div style='font-size:40px'><u><b>商品庫存</b></u><BR>";
	 echo"<div style='font-size:30px'>第一季度<BR>";
 
     $i = 1;
     echo"<table border='1' width='1000' height='200' style='font-size:20px'>";
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo"<th>Pno</th> ";
     echo"<th>Pname</th>";
	 echo"<th>Model</th> ";
	 echo"<th>Stocl</th> ";
	 echo"<th>Amount</th> ";
	 echo"<th>Balance</th> ";
     echo"</tr>";
     while ($i <= $num)
     {
     $record = mysqli_fetch_object($result);
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo "<th>$record->pno</th>";
     echo "<th>$record->pname</th>";
	 echo "<th>$record->model</th>";
	 echo "<th>$record->stock</th>";
	 echo "<th>$record->amount</th>";
	 echo "<th>$record->Balance</th>";
     echo "</tr>";
     $i++;
     }
     echo "</table><BR>";
	 
	 $sqlstr = "SELECT PRODUCT.pno, PRODUCT.pname, PRODUCT.model, PRODUCT.stock, RECORD.amount, PRODUCT.stock-RECORD.amount AS 'Balance' FROM PRODUCT,RECORD,TRANSACTION WHERE TRANSACTION.transtime BETWEEN '2022-04-01 00:00:00' AND '2022-06-30 23:59:59' AND PRODUCT.pno = RECORD.pno AND RECORD.tno = TRANSACTION.tno;";
			   
     $result = mysqli_query($link,$sqlstr);

     $num = mysqli_num_rows($result);
	 echo"<div style='font-size:30px'>第二季度<BR>";
 
     $i = 1;
     echo"<table border='1' width='1000' height='300' style='font-size:20px'>";
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo"<th>Pno</th> ";
     echo"<th>Pname</th>";
	 echo"<th>Model</th> ";
	 echo"<th>Stock</th> ";
	 echo"<th>Amount</th> ";
	 echo"<th>Balance</th> ";
     echo"</tr>";
     while ($i <= $num)
     {
     $record = mysqli_fetch_object($result);
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo "<th>$record->pno</th>";
     echo "<th>$record->pname</th>";
	 echo "<th>$record->model</th>";
	 echo "<th>$record->stock</th>";
	 echo "<th>$record->amount</th>";
	 echo "<th>$record->Balance</th>";
     echo "</tr>";
     $i++;
     }
     echo "</table><BR>";
	 
	 $sqlstr = "SELECT PRODUCT.pno, PRODUCT.pname, PRODUCT.model, PRODUCT.stock, RECORD.amount, PRODUCT.stock-RECORD.amount AS 'Balance' FROM PRODUCT,RECORD,TRANSACTION WHERE TRANSACTION.transtime BETWEEN '2022-07-01 00:00:00' AND '2022-09-30 23:59:59' AND PRODUCT.pno = RECORD.pno AND RECORD.tno = TRANSACTION.tno;";
			   
     $result = mysqli_query($link,$sqlstr);

     $num = mysqli_num_rows($result);
	 echo"<div style='font-size:30px'>第三季度<BR>";
 
     $i = 1;
     echo"<table border='1' width='1000' height='500' style='font-size:20px'>";
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo"<th>Pno</th> ";
     echo"<th>Pname</th>";
	 echo"<th>Model</th> ";
	 echo"<th>Stock</th> ";
	 echo"<th>Amount</th> ";
	 echo"<th>Balance</th> ";
     echo"</tr>";
     while ($i <= $num)
     {
     $record = mysqli_fetch_object($result);
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo "<th>$record->pno</th>";
     echo "<th>$record->pname</th>";
	 echo "<th>$record->model</th>";
	 echo "<th>$record->stock</th>";
	 echo "<th>$record->amount</th>";
	 echo "<th>$record->Balance</th>";
     echo "</tr>";
     $i++;
     }
     echo "</table><BR>";
	 
	 $sqlstr = "SELECT PRODUCT.pno, PRODUCT.pname, PRODUCT.model, PRODUCT.stock, RECORD.amount, PRODUCT.stock-RECORD.amount AS 'Balance' FROM PRODUCT,RECORD,TRANSACTION WHERE TRANSACTION.transtime BETWEEN '2022-10-01 00:00:00' AND '2022-12-31 23:59:59' AND PRODUCT.pno = RECORD.pno AND RECORD.tno = TRANSACTION.tno;";
			   
     $result = mysqli_query($link,$sqlstr);

     $num = mysqli_num_rows($result);
	 echo"<div style='font-size:30px'>第四季度<BR>";
 
     $i = 1;
     echo"<table border='1' width='1000' height='300' style='font-size:20px'>";
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo"<th>Pno</th> ";
     echo"<th>Pname</th>";
	 echo"<th>Model</th> ";
	 echo"<th>Stock</th> ";
	 echo"<th>Amount</th> ";
	 echo"<th>Balance</th> ";
     echo"</tr>";
     while ($i <= $num)
     {
     $record = mysqli_fetch_object($result);
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo "<th>$record->pno</th>";
     echo "<th>$record->pname</th>";
	 echo "<th>$record->model</th>";
	 echo "<th>$record->stock</th>";
	 echo "<th>$record->amount</th>";
	 echo "<th>$record->Balance</th>";
     echo "</tr>";
     $i++;
     }
     echo "</table><BR>";
 
     mysqli_free_result($result);
     mysqli_close($link); 
	 echo"</center>";
?>

</body>
</html>
