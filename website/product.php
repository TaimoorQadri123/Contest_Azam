<?php
include("php/query.php");
include("components/header.php");
?>


<style>

    .packages-img img {
    height: 400px;          /* Fixed height */
    width: 100%;            /* Full width */
    object-fit: cover;      /* Crop & center */
    border-radius: 8px 8px 0 0; /* Optional rounded top corners */
}

</style>

<div class="container-fluid bg-breadcrumb">
                <h3 class="text-white display-3 mb-4 text-center">Products</h1>


</div>


    <!-- Packages Start -->
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Packages</h5>
                    <h1 class="mb-0">Awesome Packages</h1>
                </div>
                <div class="packages-carousel owl-carousel">

                <?php
                
                            if(isset($_GET['cId'])){
                $categoryId= $_GET['cId'];
                $query = $pdo->prepare("select * from products where c_id = :cId");
                $query->bindParam(':cId', $categoryId);
                $query->execute();
                $products = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($products as $product){

                



                ?>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img height="400px" src="AdminPanel/images/<?php echo $product['image'] ?>" class="img-fluid w-100 rounded-top" alt="Image">
                            <!-- <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                            </div> -->
                            <div class="packages-price py-2 px-4"><?php echo $product['price'] ?></div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                            <a  href="product-detail.php?pId=<?php echo $product['id']?>">  <?php echo $product['name'] ?></a>    
                            
                              
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                   <a href="product-detail.php?pId=<?php echo $product['id']?>" class="btn-hover btn text-white py-2 px-4">Book Now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                 <?php
                }
            }
                 
                 ?>
                </div>
            </div>
        </div>
        <!-- Packages End -->






        <?php
        include("components/footer.php");
        ?>