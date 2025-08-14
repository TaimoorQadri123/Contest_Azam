<?php
include('php/query.php');

include('components/header.php');
?>


 <style>
.product-detail-img {
    width: 100%;
    height: 450px;
    object-fit: cover;
    border-radius: 10px;
}
.product-thumbnails img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border: 2px solid #ddd;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
}
.product-thumbnails img:hover {
    border-color: #007bff;
}
</style>


<div class="container-fluid bg-breadcrumb">
                <h3 class="text-white display-3 mb-4 text-center">Products Detail Page</h1>


</div>
	<!-- breadcrumb -->
	<div class="container">
		<!-- <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
				Men
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Lightweight Jacket
			</span>
		</div> -->
	</div>
		
      <?php  
	 if(isset($_GET['pId'])){
		$productId=$_GET['pId'];
		$query =$pdo->prepare("select * from products where id = :pId");
		$query->bindparam('pId',$productId);
		$query->execute();
		$product = $query->fetch(PDO::FETCH_ASSOC);
	 } 
	  ?>
	<!-- Product Detail -->
	




   
<div class="container my-5">
    <div class="row">
        <!-- Left Side: Images -->
        <div class="col-md-6">
            <img id="mainImage" src="AdminPanel/images/<?php echo $product['image'] ?>" class="product-detail-img mb-3" alt="<?php echo $product['name'] ?>">

            <div class="d-flex product-thumbnails">
                <img onclick="changeImage(this)" src="AdminPanel/images/<?php echo $product['image'] ?>" alt="Thumbnail">
                <img onclick="changeImage(this)" src="AdminPanel/images/<?php echo $product['image2'] ?? $product['image'] ?>" alt="Thumbnail">
                <img onclick="changeImage(this)" src="AdminPanel/images/<?php echo $product['image3'] ?? $product['image'] ?>" alt="Thumbnail">
            </div>
        </div>

        <!-- Right Side: Details -->
        <div class="col-md-6">
            <h2><?php echo $product['name'] ?></h2>
            <h4 class="text-primary">$<?php echo $product['price'] ?></h4>
            <h4 class="text-primary">$<?php echo $product['location'] ?></h4>

            <p><?php echo $product['description'] ?></p>

            <form action="shoping-cart.php" method="post">
                <input type="hidden" name="pId" value="<?php echo $product['id'] ?>">
                <input type="hidden" name="pName" value="<?php echo $product['name'] ?>">
                <input type="hidden" name="pPrice" value="<?php echo $product['price'] ?>">
                <input type="hidden" name="pImage" value="<?php echo $product['image'] ?>">
                <input type="hidden" name="pLocation" value="<?php echo $product['location'] ?>">


                <button name="addToCart" class="btn btn-primary btn-lg mt-3">Add to Cart</button>
            </form>
        </div>
    </div>
</div>

<script>
function changeImage(element) {
    document.getElementById("mainImage").src = element.src;
}
</script>


		

	<?php
	include('components/footer.php')
	?>