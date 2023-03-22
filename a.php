<?php
session_start();
require_once('connect.php');
// get all products
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container-fluid">
    <h1>Read product</h1>
        <div class="row">
            <div class="col-md-3">
                <a class="btn btn-primary" href="b.php">Create new product</a>
            </div>
        </div>
    <?php
    if (isset($_SESSION['message']))
    {
        echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
        unset($_SESSION['message']);
    }
    ?>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($products as $product):
                            ?>
                            <tr>
                                <td><?=$product['id']?></td>
                                <td><?=$product['name']?></td>
                                <td><?=$product['description']?></td>
                                <td><?=$product['price']?> VND</td>
                                <td>
                                    <div class="btn bg-light">Read</div>
                                    <!-- edit button -->
                                    <a class="btn btn-primary" href="c.php?id=<?=$product['id']?>">Edit</a>
                                    <!-- delete button -->
                                    <a class="btn btn-danger" href="d.php?id=<?=$product['id']?>">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>