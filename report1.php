<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body bgcolor=#BCE0FF>
<?php
	 echo"<center>";
	 $link = mysqli_connect("localhost","a0434","pwd0434");
     mysqli_select_db($link,"a0434");
     mysqli_query($link,"SET NAMES UTF8");
 
     $sqlstr = "SELECT Age,COUNT(*) AS 'Total'  
                FROM
                ( 
                    SELECT CASE
                    WHEN age BETWEEN 11 AND 20 THEN '11-20'
                    WHEN age BETWEEN 21 AND 30 THEN '21-30'
                    WHEN age BETWEEN 31 AND 40 THEN '31-40'
                    WHEN age BETWEEN 41 AND 50 THEN '41-50'
                    WHEN age BETWEEN 51 AND 60 THEN '51-60'
                    ELSE '60 & Above'
                    END AS Age
                    FROM MEMBER
                ) a 
               GROUP BY Age;";
			   
     $result = mysqli_query($link,$sqlstr);

     $num = mysqli_num_rows($result);
     echo"<div style='font-size:40px'><u><b>客群報表</b></u><BR>";
	 echo"<div style='font-size:30px'>年齡層<BR>";
 
     $i = 1;
     echo"<table border='1' width='500' height='300' style='font-size:20px'>";
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo"<th>Age</th> ";
     echo"<th>Total</th>";
     echo"</tr>";
     while ($i <= $num)
     {
     $record = mysqli_fetch_object($result);
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo"<th>$record->Age</th>";
     echo"<th>$record->Total</th>";
     echo"</tr>";
     $i++;
     }
     echo"</table><BR>";
	 
	 $sqlstr = "SELECT MEMBER.sex AS 'Sex', COUNT(*) AS 'Total' FROM MEMBER GROUP BY MEMBER.sex";
			   
     $result = mysqli_query($link,$sqlstr);

     $num = mysqli_num_rows($result);
     echo"<div style='font-size:30px'>性別<BR>";
 
     $i = 1;
     echo"<table border='1' width='400' height='150' style='font-size:20px'>";
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo"<th>Sex</th> ";
     echo"<th>Total</th>";
     echo"</tr>";
     while ($i <= $num)
     {
     $record = mysqli_fetch_object($result);
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo"<th>$record->Sex</th>";
     echo"<th>$record->Total</th>";
     echo"</tr>";
     $i++;
     }
     echo "</table><BR>";
	
	 $sqlstr = "SELECT mid,name,COUNT(*) AS purchase_count FROM MEMBER,TRANSACTION WHERE MEMBER.mid = TRANSACTION.transmid GROUP BY MEMBER.mid ORDER BY sex,purchase_count DESC; ";
			   
     $result = mysqli_query($link,$sqlstr);

     $num = mysqli_num_rows($result);
     echo "<div style='font-size:30px'>購買次數<BR>";
 
     $i = 1;
     echo"<table border='1' width='800' height='700' style='font-size:20px'>";
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo"<th>mId</th> ";
     echo"<th>name</th>";
	 echo"<th>purchase_count</th>";
     echo"</tr>";
     while ($i <= $num)
     {
     $record = mysqli_fetch_object($result);
     echo "<tr align='center' valign='center' style='font-size:20px'>";
     echo"<th>$record->mid</th>";
     echo"<th>$record->name</th>";
     echo"<th>$record->purchase_count</th>";
     echo"</tr>";
     $i++;
     }
     echo "</table><BR>";
 
     mysqli_free_result($result);
     mysqli_close($link);
	 echo"</center>";
?>	
</body>
</html>