<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理者登入</title>
<style>
:root{
   --blue:#3498db;
   --red:#e74c3c;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --grey:#DCDCDC;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
   --border:2px solid var(--black);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}

*::-webkit-scrollbar{
   width: 10px;
   height: 5px;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--grey);
}

body{
    background-color: #D6FFF6;
}
    
.message{
   position: sticky;
   top:0; left:0; right:0;
   padding:15px 10px;
   background-color: var(--white);
   text-align: center;
   z-index: 1000;
   box-shadow: var(--box-shadow);
   color:var(--black);
   font-size: 20px;
   text-transform: capitalize;
   cursor: pointer;
}

.btn,
.delete-btn,
.option-btn{
   display: inline-block;
   padding:10px 30px;
   cursor: pointer;
   font-size: 18px;
   font-family: "標楷體";
   color:var(--white);
   border-radius: 5px;
   text-transform: capitalize;
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
    background-color: var(--black);
    text-align: center;
}

.btn{
   background-color: var(--blue);
   margin-top: 10px;
}

.delete-btn{
   background-color: var(--red);
}

.option-btn{
   background-color: var(--orange);
}

.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:10px;
   padding-bottom: 40px;
}

.form-container form{
   width: 400px;
   border-radius: 5px;
   border:var(--border);
   padding:10px;
   text-align: center;
   background-color: var(--white);
}

.form-container form .box{
   width: 100%;
   border-radius: 5px;
   border:var(--border);
   padding:12px 14px;
   font-size: 18px;
   margin:10px 0;
}

.form-container form p{
   margin-top: 20px;
   font-size: 20px;
   color:var(--black);
}

.form-container form p a{
   color:var(--red);
}

.form-container form p a:hover{
   text-decoration: underline;
}

.style6 {
	font-size: large;
	font-weight: bold;
	color: #000000;
	font-family: "標楷體";
}
    
.style9 {
    font-size: 28px;
    font-weight: bold;
    color: #000000;
    font-family: "標楷體";
}
    
.style4 {
	font-size: large;
	color: #FFFFFF;
	font-family: "標楷體";
    background: var(--blue);
    border-width:2px;
    padding:8px 10px;
    border-style:hidden;
}

.style2 {
	border-color:black;
    border-width:2px;
    padding:8px 10px;
    border-style:solid;
}

.font{
    font-size: large;
	font-weight: bold;
	color: #000000;
	font-family: "標楷體";
}
.style18 {font-size: x-large; font-family: "標楷體"; font-weight: bold; }

</style>
</head>

<body>
<a href="index.html"><img src="toptop.png" alt="" width="100%" height="300"></a>
<div align="center">
  <table width="100%" style="#000000 solid;" border="0" bgcolor="#64B5D2">
    <tr>
      <td width="5%" height="47" ><img src="new" width="50" height="43"/></td>
      <td width="20%" height="47"><div align="center" class="style18"><a href="index.html" style="text-decoration:none;"><font face="標楷體" color="#000000">最新商品</font><br></a></div></td>
      <td width="20%"><div align="center" class="style18"><a href="category1.html" style="text-decoration:none;" ><font face="標楷體" color="#000000">居家電器</font><br></a></div></td>
      <td width="20%"><div align="center" class="style18"><a href="category2.html" style="text-decoration:none;"><font face="標楷體" color="#000000">個人護理電器</font><br></a></div></td>
      <td width="20%"><div align="center" class="style18"><a href="category3.html" style="text-decoration:none;" ><font face="標楷體" color="#000000">空氣清潔電器</font><br></a></div></td>
      <td width="15%" height="47" align="right"><a href="loginform.html" target="mainFrame"><img src="MemberImage" width="50" height="43" align="baseline" /></a><img src="cart" width="50" height="43" align="baseline" /><img src="search" width="50" height="43" /></td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
<div align="center">
<?php
   $accid=$_POST["T1"];
   $accpd=$_POST["T2"];


   $link = mysqli_connect('localhost','a0434','pwd0434');
   mysqli_select_db($link, 'a0434');
   
   
   $sqlstr = "SELECT * FROM MANAGER WHERE name='".$accid."' AND name='".$accpd."';";
   $result = mysqli_query($link, $sqlstr);

   if( mysqli_num_rows($result)== 1)
   {
   echo "<center>";  
   echo "登入成功!<br>";
   echo '<a href="index.html">回首頁</a><br>';
   echo '<a href="report1.php">客群報表</a><br>';
   echo '<a href="report2.php">銷售報表</a><br>';
   echo '<a href="report3.php">庫存報表</a><br>';}
	   
   else
   {
   echo "<center>";
   echo "帳密錯誤!<br>";
   echo '<a href="maloginform.html">重新登入</a><br>';}

   mysqli_free_result($result);
   mysqli_close($link);
?>
</div>
</body>
</html>
