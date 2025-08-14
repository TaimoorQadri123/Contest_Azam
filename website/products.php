<?php
include("php/query.php");
include("components/header.php");
?>
     

     <div class="container-fluid bg-breadcrumb">
                <h3 class="text-white display-3 mb-4 text-center">Products</h1>


</div>

      <!-- Products Start -->
        <div class="container-fluid destination py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Destination</h5>
                    <h1 class="mb-0">Popular Destination</h1>
                </div>
                <div class="tab-class text-center">




                

                       <?php 
                        $query = $pdo->query("SELECT * FROM categories");
                       $allCategories = $query->fetchAll(PDO::FETCH_ASSOC);
                           ?>

                         <!-- All Button -->
                   <button class="btn btn-primary" data-filter="*">All</button>

                       <?php foreach($allCategories as $category){ ?>
                            <button class=" btn btn-primary " data-filter=".cat-<?php echo $category['id'] ?>">
                          <?php echo $category['name'] ?>
                      </button>
    
                   <?php } ?>


                    <!-- <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">All</span>
                            </a>
                        </li>
                  
                    </ul> -->
                    <div class="tab-content pt-5">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                              
                            <?php
                $query = $pdo->query("select * from products");
				$allProducts = $query->fetchAll(PDO::FETCH_ASSOC);
				foreach($allProducts as $product){
                            
                            
                            ?>
                                 <div class="col-lg-4 cat <?php echo $product['c_id'] ?>">

                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100"  src="AdminPanel/images/<?php echo $product['image']?>" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">	<?php echo $product['name'] ?></h4>
                                            <span class="stext-105 cl3 text-white">
								                	$<?php echo $product['price'] ?><br>
								            </span>
                                            <a href="product-detail.php?pId=<?php echo $product['id']?>" class="btn-hover text-white">View <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-4.jpg" data-lightbox="destination-4"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>

                             <?php
                                   }
                             ?>   
                            
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- Products End -->



        <?php
        include("components/footer.php");
        ?>