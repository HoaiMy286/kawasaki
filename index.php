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
			<h3>PRODUCTS</h3>
		</div>

		<div class="flex-container">
			<?php
				$product_feathered = $product->getproduct_feathered();
				if($product_feathered){
					while($result_pf=$product_feathered->fetch_assoc()){
			?>
			<div class="card">
				<a href="productdetail.php?productId=<?php echo $result_pf['productId']?>" style="color: inherit; text-decoration: none;">
					<img src="<?php echo $result_pf['productImage'] ?>" class="card-img-top" alt="Product Image">		
					<div class="card-body">
						<h5 class="p3"><?php echo $result_pf['productName']; ?></h5>
						<div class="cart-greenSpacer"></div>
						<p class="card-text">Price: <?php echo number_format($result_pf['productPrice'], 0, '.', ','); ?>đ</p>
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

