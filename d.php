<?php
require_once('connect.php');
if (isset($_GET['id']))
{
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0)
    {
        header('Location: a.php');
    }
    $product = mysqli_fetch_assoc($result);
}
else
{
    header('Location: a.php');
}
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
        <h1>Delete product</h1>
        <!-- info -->
        <div class="row">
            <div class="col">
                <h3>Name: <?=$product['name'];?></h3>
                <p>Description: <?=$product['description'];?></p>
                <p>Price: <?=$product['price'];?></p>
                <img src="<?=$product['image'];?>" alt="product image">
                <form action="code.php" method="post">
                    <input type="text" name="id" hidden value="<?=$product['id'];?>">
                    <button type="submit" name="btn-delete" class="btn btn-danger" >Confirm delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>