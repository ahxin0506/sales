<?php
session_start();

if(isset($_SESSION['mid'])&&isset($_SESSION['pid'])&&isset($_SESSION['name'])){
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<style>
:root{
   --blue:#3498db;
   --red:#e74c3c;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
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
   background-color: var(--blue);
}

body{
   background-color: #D7F9F4;
}
    
.btn,
.delete-btn,
.option-btn{
   display: inline-block;
   padding:10px 30px;
   cursor: pointer;
   font-size: 18px;
   color:var(--white);
   border-radius: 5px;
   text-transform: capitalize;
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   background-color: var(--black);
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

.shopping-cart{
   padding:20px 0;
}

.shopping-cart table{
   width: 100%;
   text-align: center;
   border:var(--border);
   border-radius: 5px;
   box-shadow: var(--box-shadow);
   background-color: var(--white);
}

.shopping-cart table thead{
   background-color: var(--black);
}

.shopping-cart table thead th{
   padding:10px;
   color:var(--white);
   text-transform: capitalize;
   font-size: 20px;
}

.shopping-cart table .table-bottom{
   background-color: var(--light-bg);
}

.shopping-cart table tr td{
   padding:10px;
   font-size: 20px;
   color:var(--black);
}

.shopping-cart table tr td:nth-child(1){
   padding:0;
}

.shopping-cart table tr td input[type="number"]{
   width: 80px;
   border:var(--border);
   padding:12px 14px;
   font-size: 20px;
   color:var(--black);
}


.shopping-cart .cart-btn{
   margin-top: 10px;
   text-align: center;
}

.shopping-cart .disabled{
   pointer-events: none;
   background-color: var(--red);
   opacity: .5;
   user-select: none;
}

@media (max-width:1200px){
   .container .shopping-cart{
      overflow-x: scroll;
   }

   .container .shopping-cart table{
      width: 1200px;
   }
}

@media (max-width:450px){
   .container .heading{
      font-size: 30px;
   }
   .container .products .box-container .box img{
      height: 200px;
   }
} 

.style1{color:red;}
</style>
</head>
<body>

			<div class="shopping-cart">
				<h1 class="heading" align="left">結賬</h1>
                 <table>
      <thead>
         <th>名稱</th>
         <th>單價</th>
         <th>數量</th>
         <th>總額</th>
         <th>動作</th>
      </thead>
      <tbody>
          <?php
                                $servername = "localhost";
                                $username = "a0434";
                                $password = "pwd0434";
                                $database = "a0434";

                                $conn = new mysqli($servername, $username, $password, $database);
                                $conn->set_charset("utf8");///////////

                                // 檢查連接是否成功
                                if ($conn->connect_error) {
                                    die("連接失敗: " . $conn->connect_error);
                                }

                                // 查询数据库中的商品数据
                                $sql = "SELECT * FROM `{$_SESSION['mid']}`";
                                $result = $conn->query($sql);

                                
                                if ($result->num_rows > 0) {
                                      // 遍历查询结果，生成相应数量的行
                                      while ($row = $result->fetch_assoc()) {
                                        $name = $row['name'];
                                        $price = $row['price'];
                                        ?>
         <tr>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>NT$<?php echo $fetch_cart['price']; ?>/-</td>
            <td>
                <?php
                                $servername = "localhost";
                                $username = "a0434";
                                $password = "pwd0434";
                                $database = "a0434";

                                $conn = new mysqli($servername, $username, $password, $database);
                                $conn->set_charset("utf8");///////////

                                // 檢查連接是否成功
                                if ($conn->connect_error) {
                                    die("連接失敗: " . $conn->connect_error);
                                }

                                // 查询数据库中的商品数据
                                $sql = "SELECT * FROM `{$_SESSION['mid']}`";
                                $result = $conn->query($sql);

                                
                                if ($result->num_rows > 0) {
                                      // 遍历查询结果，生成相应数量的行
                                      while ($row = $result->fetch_assoc()) {
                                        $quantity = $row['quantity'];
                                        ?>
               <form action="" method="post">
                  <input type="number" min="2" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                  <input type="submit" name="update_cart" value="更新" class="option-btn">
               </form>
            </td>
            <td>NT$<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="index.php?remove=<?php echo $fetch_cart['id']; ?>" class="style1" onclick="return confirm('remove item from cart?');">Remove</a></td>
         </tr>
      <?php
         $grand_total += $sub_total;
            {
         }else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
         }
      ?>
      <tr class="table-bottom">
         <td colspan="3">累計：</td>
         <td>$<?php echo $grand_total; ?>/-</td>
         <td><a href="index.php?delete_all" onclick="return confirm('delete all from cart?');" class="style1 <?php echo ($grand_total > 1)?'':'disabled'; ?>">Delete All</a></td>
      </tr>
   </tbody>
   </table>
			<!-- TITLE ENDS -->
			
			<div class="container padtop50 padbot10">
				<div class="row">
				<!-- MAIN CONTENT BEGINS -->
				<div class="col-md-12">
					<div id="edd_checkout_wrap">
						<form id="edd_checkout_cart_form" method="post">
							<div id="edd_checkout_cart_wrap">
								<table width=100% id="edd_checkout_cart" class="ajaxed">
								<thead>
								<tr class="edd_cart_header_row">
									<th class="edd_cart_item_name">
										商品名稱
									</th>
									<th class="edd_cart_item_price">
										商品價格
									</th>
									<th class="edd_cart_actions">
										
									</th>
								</tr>
								</thead>
								<tbody>
								<?php
								//session_start();
                                // 连接数据库
                                $servername = "localhost";
                                $username = "a0437";
                                $password = "pwd0437";
                                $database = "a0437";

                                $conn = new mysqli($servername, $username, $password, $database);
                                $conn->set_charset("utf8");///////////

                                // 檢查連接是否成功
                                if ($conn->connect_error) {
                                    die("連接失敗: " . $conn->connect_error);
                                }

                                // 查询数据库中的商品数据
                                $sql = "SELECT * FROM `{$_SESSION['ID']}`";
                                $result = $conn->query($sql);

                                
                                if ($result->num_rows > 0) {
                                      // 遍历查询结果，生成相应数量的行
                                      while ($row = $result->fetch_assoc()) {
                                        $productName = $row['name'];
                                        $price = $row['price'];
                                        ?>
								<!-- cart item 1 -->
								<tr class="edd_cart_item">
									<td class="edd_cart_item_name">
										<span class="edd_checkout_cart_item_title">
                                            <?php echo $productName; ?>
                                        </span>
									</td>
									<td class="edd_cart_item_price">
                                        <?php echo $price; ?>
									</td>
									<td class="edd_cart_actions">
										<a class="edd_cart_remove_item_btn" href="#">Remove</a>
									</td>
								</tr>
                                <?php
                                      }
                                    } else {
                                      echo "<tr><td colspan='3'>沒有找到商品數據</td></tr>";
                                    }
                                    $conn->close();
                                    ?>			
								</tbody>
								<tfoot>
								<?php
                                // 连接数据库
                                $servername = "localhost";
                                $username = "a0437";
                                $password = "pwd0437";
                                $database = "a0437";

                                $conn = new mysqli($servername, $username, $password, $database);
                                $conn->set_charset("utf8");///////////

                                // 檢查連接是否成功
                                if ($conn->connect_error) {
                                    die("連接失敗: " . $conn->connect_error);
                                }

                                // 查询数据库中的商品数据
                                $sql = "SELECT SUM(price) FROM `{$_SESSION['ID']}`";
                                $result = $conn->query($sql);

								if ($result->num_rows > 0) {
									// 遍历查询结果，生成相应数量的行
									while ($row = $result->fetch_assoc()) {
									  $total = $row['SUM(price)'];
									  ?>
								<tr class="edd_cart_footer_row">									
									<td>
									Total: <span class="edd_cart_amount" data-subtotal="50.5" data-total="50.5">$<?php echo $total; ?></span>
									</td>
								</tr>
								<?php
                                      }
                                    } else {
                                      echo "<tr><td colspan='3'>沒有找到商品數據</td></tr>";
                                    }
                                    $conn->close();
                                    ?>
								</tfoot>
								</table>
							</div>
						</form>
						<div id="edd_checkout_form_wrap" class="edd_clearfix">
							<form id="edd_purchase_form" class="edd_form" action="#" method="POST">
								<fieldset id="edd_checkout_user_info">
									<p id="edd-email-wrap">
										<label class="edd-label" for="edd-email">
										電子郵件 <span class="edd-required-indicator">*</span>
										</label>
										<span class="edd-description">我們會將交易明細寄送至此電子郵件</span>
										<input class="edd-input required" type="email" name="edd_email" placeholder="Email address" id="edd-email" value=""/>
									</p>
									<p id="edd-first-name-wrap">
										<label class="edd-label" for="edd-first">
										姓氏 <span class="edd-required-indicator">*</span>
										</label>
										<span class="edd-description"></span>
										<input class="edd-input required" type="text" name="edd_first"  id="edd-first" value=""/>
									</p>
									<p id="edd-last-name-wrap">
										<label class="edd-label" for="edd-last">
										名字 </label>
										<span class="edd-description"></span>
										<input class="edd-input" type="text" name="edd_last" id="edd-last"  value=""/>
									</p>
								</fieldset>
								<fieldset id="edd_purchase_submit">
									<p id="edd_final_total_wrap">
										<strong>總共購買金額:</strong>
										<span class="edd_cart_amount" data-subtotal="50.5" data-total="50.5">$50.50</span>
									</p>
									<input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Pay with PayPal"/>
								</fieldset>
							</form>
						</div>
					</div>
				</div>				
				<!-- MAIN CONTENT ENDS -->
					
				</div>				
			</div>
		</div>		
</body>
</html>
<?php
}else{
    header("location:loginform.html");
    exit();
}
?>