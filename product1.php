<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<?php
   if(isset($_POST['button'])){
   $product_quantity = $_POST['product_quantity'];
    
   include 'loginform.html';
   include 'login.php';{
       
   $user_id = $_SESSION['mid'];
   }
   
   $link = mysqli_connect('localhost','a0434','pwd0434');
    
   $select_cart = mysqli_query($link, "SELECT * FROM CART,PRODUCT WHERE MEMBER.mid = '$user_id' AND PROUDCT.pname = '一級能效變頻冷暖分離式冷氣'") or die('query failed');
   
   echo "select_cart";
   if(mysqli_num_rows($select_cart) == 1){
      echo "該商品已經在購物車咯！";
   }else{
      mysqli_query($link, "INSERT INTO CART(pno, pname, unitprice, quantity) VALUES('a0001', '一級能效變頻冷暖分離式冷氣', '22500', '$product_quantity')") or die('query failed');
      echo "已加入購物車";
   }
   mysqli_free_result($result);
   mysqli_close($link);
   
   }
?>
</body>
</html>