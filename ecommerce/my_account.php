<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
include("includes/db.php");

?>

<html>
	<head>
	<title>My Online Shop</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	</head>
	
<body>
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
	
	<div class="header_wrapper">
	<!--click the logo top left corner and direct to homepage-->
	<a href="index.php"><img id="logo" src="images/logo.png"/></a>
	<div id="form">
			<form method="get" action="results.php" enctype="mutlpart/form-data">
				<input type="text" name="user_query" placeholder="Search for a Product"/>
				<input type="submit" name="search" value="Search"/>
			</form>
		</div><!--end of form div-->
	</div>
	<!--Header ends here-->
	<!--Navigation bar starts here-->
	<div class="menubar">
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="all_products.php">All Products</a></li>
			<li><a href="my_account.php">My Account</a></li>
			<li><a href="customer_register.php">Sign Up</a></li>
			<li><a href="cart.php">Shopping Carts</a></li>
			<li><a href="wish.php">Wish List</a></li>
			<li><a href="friends.php">Find Friends</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		
	</div><!--navigation bar ends-->
	
<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				<div id="sidebar_title">My Account:</div>
				
				<ul id="cats">
				<?php 
				//echo "<script>window.open('index.php','_self')</script>";
				//$user = $_SESSION['customer_email'];
				
				//$get_img = "select * from customers where customer_email='$user'";
				
				//$run_img = mysqli_query($con, $get_img); 
				
				//$row_img = mysqli_fetch_array($run_img); 
				
				//$c_name = $row_img['customer_name'];
				
				//echo "<p style='text-align:center;'><img src='customer_images/$c_image' width='150' height='150'/></p>";
				
				?>
				<li><a href="my_account.php?my_orders">My Orders</a></li>
				<li><a href="my_account.php?edit_account">Edit Account</a></li>
				<li><a href="my_account.php?change_pass">Change Password</a></li>
				<li><a href="my_account.php?delete_account">Delete Account</a></li>
				<li><a href="logout.php">Logout</a></li>
				
				<ul>
				
				</div>
					
		
			<div id="content_area">
			
			<?php cart(); ?>
			
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:17px; padding:5px; line-height:40px;">
					
					<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] ;
					
					}
					else{
						echo"please login";
					}
					?>
					
					
					<?php 
					if(!isset($_SESSION['customer_email'])){
					
					echo "<a href='checkout.php' style='color:orange;'>Login</a>";
					
					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}
					
					
					
					?>
					
					
					
					</span>
			</div>
			
				<div id="products_box">
				
				
				
				<?php 
				if(!isset($_GET['my_orders'])){
					if(!isset($_GET['edit_account'])){
						if(!isset($_GET['change_pass'])){
							if(!isset($_GET['delete_account'])){
							
				echo "
				<b>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></b>";
				}
				}
				}
				}
				?>
				
				<?php 
				if(isset($_GET['edit_account'])){
				include("edit_account.php");
				}
				if(isset($_GET['change_pass'])){
				include("change_pass.php");
				}
				if(isset($_GET['delete_account'])){
				include("delete_account.php");
				}
				
				
				?>
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
	<div id="footer">
	<h2 style="text-align:center;padding-top:30px;">&copy; 2017 for Database Programing Final Project</h2>
	</div>
	
	</div><!--Main Container ends here-->
	
</body>
</html>