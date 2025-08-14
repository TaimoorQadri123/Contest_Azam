<?php
include("php/query.php");
include("components/header.php");
if(!isset($_SESSION['adminEmail'])){
    echo "<script>location.assign('../login.php')</script>";
    }
?>


<!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-dark rounded mx-0">
                    <div class="col-md-6 ">
                    <!-- <div class="col-sm-12 col-xl-6"> -->
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Gallery Form</h6>
                            <form method ="post"  enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label text-white">Gallery Name</label>
                                    <input value="<?php echo $GalleryName?>" name="cName" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        <small class="text-danger"><?php echo $GalleryNameErr?></small>
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-white" >Gallery Description</label>

                                          <textarea name="cDes" class="form-control" type="text" id=""><?php echo $GalleryDes?></textarea>
                                        <small class="text-danger"><?php echo $GalleryDesErr?></small>

                                    <!-- <input type="text" class="form-control" id="exampleInputPassword1"> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-white" >Gallery Image</label>

                                    <small class="text-danger"><?php echo $GalleryImageNameErr?></small>

                                    <input type="file" class="form-control" name ="cImage">
                                    <!-- <input type="text" class="form-control" id="exampleInputPassword1"> -->
                                </div>
                                <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                <button name="addGallery" type="submit" class="btn btn-primary">Add Gallery</button>
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