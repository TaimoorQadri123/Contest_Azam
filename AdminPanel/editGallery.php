<?php
include("php/query.php");
include("components/header.php");
// if(!isset($_SESSION['adminEmail'])){
//     echo "<script>location.assign('../login.php')</script>";
//     }
?>

<?php
if(isset($_GET['pId'])){
    $productId = $_GET['pId'];
    $query = $pdo->prepare("select products.id,products.name as pName ,products.price,products.location,products.description,products.image, Gallery.name as cName ,Gallery.id as cId from products inner join Gallery on products.c_id = Gallery.id where products.id = :pId");
    $query->bindParam(':pId', $productId);
    $query->execute();
    $product = $query->fetch(PDO::FETCH_ASSOC);
    // print_r($Gallery); 
}
?>

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded  rounded mx-0">
                    <div class="col-md-6 ">
                    <!-- <div class="col-sm-12 col-xl-6"> -->
                        <div class="bg-secondary rounded  rounded h-100 p-4">
                            <h6 class="mb-4">Add Product Form</h6>
                            <form method ="post"  enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input value="<?php echo $product['pName']?>" name="pName" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        <small class="text-danger"><?php echo $productNameErr?></small>
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">product Description</label>

                                          <textarea name="pDes" class="form-control" type="text" id=""><?php echo $product['description']?></textarea>
                                        <small class="text-danger"><?php echo $productDesErr?></small>

                                    <!-- <input type="text" class="form-control" id="exampleInputPassword1"> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">product Image</label>


                                    <input type="file" class="form-control" name ="pImage">
                                    <small class="text-danger"><?php echo $productImageNameErr?></small>
                                    <img height ="100"; src="images/<?php echo $product['image']?>" alt="">


                                    <!-- <input type="text" class="form-control" id="exampleInputPassword1"> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">product price</label>
                                    <input value="<?php echo $product['price']?>" name="pPrice" type="text" class="form-control" id="exampleInputEmail1">

                                        <small class="text-danger"><?php echo $productPriceErr?></small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">product Location</label>
                                    <input value="<?php echo $product['location']?>" name="pLocation" type="text" class="form-control" id="exampleInputEmail1">

                                        <small class="text-danger"><?php echo $productPriceErr?></small>
                                </div>
                               
                                <div class="mb-3">
                                 <label for="">Select Gallery</label>
                                 <select class="form-control" name="cId" id="">
                                 <option value="<?php echo $product['cId'] ?>"><?php echo $product['cName']?></option>
                                 <?php 
                                 $query= $pdo->prepare("select * from Gallery where name != :cName");
                                 $query->bindParam(':cName',$product['cName']);
                                 $query->execute();
                                 $allGallery =$query->fetchAll(PDO::FETCH_ASSOC);
                                 foreach ($allGallery as $Gallery) {
                                 ?>
                                  
                                 <option value="<?php echo $Gallery['id']?>"><?php echo $Gallery['name']?></option>
                                     
                                 <?php
                                  }
                                 ?>
   
                                 </select>
                                 <small class="text-danger"><?php echo $GalleryIdErr?></small>

                                </div>


                                <button name="updateProduct" type="submit" class="btn btn-primary">Update Product</button>
                            </form>
                        </div>
                    <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- Blank End -->



<?php
include("components/footer.php")
?>