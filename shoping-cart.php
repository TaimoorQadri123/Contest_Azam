<?php
// session_start();
include("php/query.php");
include('components/header.php');

// Purane cart items ka fix (location ensure)
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $k => $item) {
        if (!array_key_exists('productLocation', $item)) {
            $_SESSION['cart'][$k]['productLocation'] = 'Not Specified';
        }
        // Agar quantity ka old key ho to remove
        if (isset($_SESSION['cart'][$k]['productQty'])) {
            unset($_SESSION['cart'][$k]['productQty']);
        }
    }
}

// Add to cart with location
if (isset($_POST['addToCart'])) {
    $pLocation = $_POST['pLocation'] ?? 'Not Specified';
    if (isset($_SESSION['cart'])) {
        $productIdsArray = array_column($_SESSION['cart'], 'productId');
        if (in_array($_POST['pId'], $productIdsArray)) {
            echo "<script>alert('Product is already in the cart');location.assign('index.php')</script>";
        } else {
            $_SESSION['cart'][] = [
                "productId"      => $_POST['pId'],
                "productName"    => $_POST['pName'],
                "productPrice"   => $_POST['pPrice'],
                "productImage"   => $_POST['pImage'],
                "productLocation"=> $pLocation
            ];
            echo "<script>alert('Product added to cart');location.assign('index.php')</script>";
        }
    } else {
        $_SESSION['cart'][0] = [
            "productId"      => $_POST['pId'],
            "productName"    => $_POST['pName'],
            "productPrice"   => $_POST['pPrice'],
            "productImage"   => $_POST['pImage'],
            "productLocation"=> $pLocation
        ];
        echo "<script>alert('Product added to cart')</script>";
    }
}

// Remove from cart
if (isset($_GET['prId'])) {
    foreach ($_SESSION['cart'] as $k => $item) {
        if ($item['productId'] == $_GET['prId']) {
            unset($_SESSION['cart'][$k]);
        }
    }
    $_SESSION['cart'] = array_values($_SESSION['cart']); // reindex
    echo "<script>location.href='shoping-cart.php';</script>";
    exit;
}


// Checkout







// Checkout
if(isset($_POST['checkout'])){
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
        $userId = $_SESSION['userId'] ?? 0;
        $userName = $_SESSION['userName'] ?? 'Guest';
        $userEmail = $_SESSION['userEmail'] ?? 'guest@example.com';

        foreach($_SESSION['cart'] as $item){
            $productId = $item['productId'];
            $productName = $item['productName'];
            $productPrice = $item['productPrice'];
            $productLocation = $item['productLocation'] ?? '';

            try {
                $query = $pdo->prepare("INSERT INTO orders (u_id, u_name, u_email, p_id, p_name, p_price, location, datetime, status) 
                                        VALUES (:u_id, :u_name, :u_email, :p_id, :p_name, :p_price, :location, NOW(), 'Pending')");
                $query->bindParam(':u_id', $userId);
                $query->bindParam(':u_name', $userName);
                $query->bindParam(':u_email', $userEmail);
                $query->bindParam(':p_id', $productId);
                $query->bindParam(':p_name', $productName);
                $query->bindParam(':p_price', $productPrice);
                $query->bindParam(':location', $productLocation);
                $query->execute();
            } catch(PDOException $e){
                echo "Insert Error: ".$e->getMessage();
            }
        }

        // Clear cart
        unset($_SESSION['cart']);
        echo "<script>alert('Order placed successfully'); location.href='shoping-cart.php';</script>";
    }
}



?>

<div class="container-fluid bg-breadcrumb">
    <h3 class="text-white display-3 mb-4 text-center">Cart</h3>
</div>

<div class="container mt-4">
    <h2 class="mb-4">Shopping Cart</h2>
    <?php if (!empty($_SESSION['cart'])): ?>
        <form method="POST">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Location</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $value): ?>
                        <tr>
                            <td><img src="AdminPanel/images/<?php echo htmlspecialchars($value['productImage']); ?>" width="60"></td>
                            <td><?php echo htmlspecialchars($value['productName']); ?></td>
                            <td>$<?php echo number_format($value['productPrice'], 2); ?></td>
                            <td><?php echo htmlspecialchars($value['productLocation']); ?></td>
                            <td><a href="?prId=<?php echo $value['productId']; ?>" class="btn btn-danger btn-sm">Remove</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php if (isset($_SESSION['userEmail'])): ?>
                <button name="checkout" class="btn btn-success">Proceed to Checkout</button>
            <?php else: ?>
                <a href="login.php" class="btn btn-primary">Login to Checkout</a>
            <?php endif; ?>
        </form>
    <?php else: ?>
        <div class="alert alert-info">Your cart is empty</div>
    <?php endif; ?>
</div>

<?php include('components/footer.php'); ?>
