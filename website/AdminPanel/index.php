<?php
include("php/query.php");
include("components/header.php");
if(!isset($_SESSION['adminEmail'])){
echo "<script>location.assign('../login.php')</script>";
}

?>
            
                

    <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="text-center">
        <?php 
        if (isset($_SESSION['adminEmail'])) {
            echo "<h1>Hi " . htmlspecialchars($_SESSION['adminName']) . "<br>Have a Nice Day</h1>";
        }
        ?>
    </div>
</div>


        

<?php
include("components/footer.php");
?>
