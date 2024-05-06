<!-- include header.php -->
<?php include 'includes/header.php'; ?>
<?php 
// include 'includes/slider.php'; ?>

<div class="advertisement">
	<div class="adver-avatar">
		<img src="images/adver1.jpg" alt="Logo">
	</div>
	<div class="adver-caption">
		<div class="adver-container">
			<div class="adver-infor-cap">
				<h3>RE-ORDER NOW</h3>
				<h2>KAWASAKI ZX-4R</h2>
				<div class="greenSpacer"></div>
				<h3>Price: 240.000.000vnd</h3>
			</div>
		</div>
	</div>
</div>

 <div class="homeVehicles">
    <div class="container">
		<div class="container-header">
			<h3 style="background-color: #53c68c; padding: 20px;">KAWASAKI NINJA</h3>
		</div>

		<div class="flex-container">
			<?php
				$product_ninja = $product->getproduct_ninja();
				if($product_ninja){
					while($result_ninja=$product_ninja->fetch_assoc()){
			?>
			<div class="card">
				<a href="productdetail.php?productId=<?php echo $result_ninja['productId']?>" style="color: inherit; text-decoration: none;">
					<img src="<?php echo $result_ninja['productImage'] ?>" class="card-img-top" alt="Product Image">		
					<div class="card-body">
						<h5 class="p3"><?php echo $result_ninja['productName']; ?></h5>
						<div class="cart-greenSpacer"></div>
						<p class="card-text">Price: <?php echo number_format($result_ninja['productPrice'], 0, '.', ','); ?>đ</p>
						<!-- <a href="#" class="btn btn-primary">Buy now</a> -->
					</div>
				</a>
			</div>
			<?php 
					}
				}
				?>
        </div>
	</div>

    <div class="container">
		<div class="container-header">
			<h3 style="background-color: #53c68c; padding: 20px;">KAWASAKI Z</h3>
		</div>

		<div class="flex-container">
			<?php
				$product_z = $product->getproduct_z();
				if($product_z){
					while($result_z=$product_z->fetch_assoc()){
			?>
			<div class="card">
				<a href="productdetail.php?productId=<?php echo $result_z['productId']?>" style="color: inherit; text-decoration: none;">
					<img src="<?php echo $result_z['productImage'] ?>" class="card-img-top" alt="Product Image">		
					<div class="card-body">
						<h5 class="p3"><?php echo $result_z['productName']; ?></h5>
						<div class="cart-greenSpacer"></div>
						<p class="card-text">Price: <?php echo number_format($result_z['productPrice'], 0, '.', ','); ?>đ</p>
					</div>
				</a>
			</div>
			<?php 
					}
				}
				?>
        </div>
	</div>

    <div class="container">
		<div class="container-header">
			<h3 style="background-color: #53c68c; padding: 20px;">KAWASAKI VULCAN</h3>
		</div>

		<div class="flex-container">
			<?php
				$product_vulcan = $product->getproduct_vulcan();
				if($product_vulcan){
					while($result_vulcan=$product_vulcan->fetch_assoc()){
			?>
			<div class="card">
				<a href="productdetail.php?productId=<?php echo $result_vulcan['productId']?>" style="color: inherit; text-decoration: none;">
					<img src="<?php echo $result_vulcan['productImage'] ?>" class="card-img-top" alt="Product Image">		
					<div class="card-body">
						<h5 class="p3"><?php echo $result_vulcan['productName']; ?></h5>
						<div class="cart-greenSpacer"></div>
						<p class="card-text">Price: <?php echo number_format($result_vulcan['productPrice'], 0, '.', ','); ?>đ</p>
					</div>
				</a>
			</div>
			<?php 
					}
				}
				?>
        </div>
	</div>
 </div>

<!-- //////// FOOTER ///////// -->
<?php include 'includes/footer.php'; ?>

