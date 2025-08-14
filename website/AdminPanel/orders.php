    <?php
    include('components/header.php');
    include('php/query.php'); // database connection

    $query = "SELECT * FROM orders ORDER BY datetime DESC";

    try {
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Recent Orders</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Date</th>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Location</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($orders) {
                            foreach ($orders as $row) {
                                echo "<tr>
                                        <td><input class='form-check-input' type='checkbox'></td>
                                        <td>" . $row['datetime'] . "</td>
                                        <td>ORD-" . $row['id'] . "</td>
                                        <td>" . $row['u_name'] . "</td>
                                        <td>" . $row['location'] . "</td>
                                        <td>$" . number_format($row['p_price'], 2) . "</td>
                                        <td>" . $row['status'] . "</td>
                                        <td><a class='btn btn-sm btn-primary' href='detail.php?id=" . $row['id'] . "'>Detail</a></td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8'>No orders found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include('components/footer.php'); ?>
