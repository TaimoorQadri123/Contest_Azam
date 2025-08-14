<?php 
include('php/query.php');
include('components/header.php');

?>


  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded  mx-0" >
                  
                
              

                <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">View Gallery</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Gallery Name</th>
                                            <th scope="col">Gallery Description</th>
                                            <th scope="col">Gallery Image</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                       $query = $pdo->query("select * from Gallery");
                                       $allGallery = $query->fetchAll(PDO::FETCH_ASSOC);
                                       foreach($allGallery as $Gallery){
                                       ?>
                                        <tr>
                                            <th scope="row"></th>
                                            <td><?php echo $Gallery['name'] ?></td>
                                            <td><?php echo $Gallery['description'] ?></td>
                                            <td><img height="100px" width="150px" src="images/<?php echo $Gallery['image'] ?>"alt=""> </td>

                                            <td><a href="editGallery.php?cId=<?php echo $Gallery['id'] ?>" class="btn btn-info">Edit</a></td>
                                            <td><a href="?GalleryId=<?php echo $Gallery['id']?>" class="btn btn-danger">Delete</a></td>
                                            
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

              
            </div>
            <!-- Blank End -->

<?php 
include('components/footer.php')
?>