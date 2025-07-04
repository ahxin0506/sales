<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php

   //include 'login.php';
   //session_start();
   //$member_id = $_SESSION['mid'];

   //if(!isset($member_id))
   //{
   //   header('location:login.php');
   //};
   
   $link = mysqli_connect('localhost','a0434','pwd0434');
   mysqli_select_db($link, 'a0434');
   
   
   $tno=$_POST["tno"];
   $transmid=$_POST["transmid"];
   $transtime=$_POST["transtime"];
   $method=$_POST["method"];
   $bankid=$_POST["bankid"];
   $bankname=$_POST["bankname"];
   $cardtype=$_POST["cardtype"];
   $cardid=$_POST["cardid"];
   $duedate=$_POST["duedate"];
   
   $sqlstr = "INSERT INTO TRANSACTION (tno, transmid, transtime, method, bankid, bankname, cardtype, cardid, duedate) VALUES      ('$tno','$transmid','$transtime','$method','$bankid','$bankname','$cardtype','$cardid','$duedate');";
   
   $result=mysqli_query($link,$sqlstr);
   
   IF($radio==1)
   {
      echo '<a href="http://120.107.152.110/~a0418/HA/HA.html">creditcard payment success</a><br>';
   }
   ELSE
   {
      echo '<a href="http://120.107.152.110/~a0418/HA/HA.html">atm payment success</a><br>';
   }
   
   
   
   mysqli_free_result($result);
   mysqli_close($link);

?>
</body>
</html>
