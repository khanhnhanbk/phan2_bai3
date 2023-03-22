<?php
session_start();
require_once('connect.php');

if (isset($_POST['add']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);

    $sql = "INSERT INTO products(name, description, price, image) VALUES('$name', '$description', '$price', '$image')";
    if (mysqli_query($conn, $sql))
    {
        $_SESSION['message'] = 'Product added successfully';
        header('Location: a.php');
    }
    else
    {   
        echo 'query error: ' . mysqli_error($conn);
    }

}
if (isset($_POST['edit']))
{
    
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);

    $sql = "UPDATE products SET name = '$name', description = '$description', price = '$price', image = '$image' WHERE id = $id";
    if (mysqli_query($conn, $sql))
    {
        $_SESSION['message'] = 'Product edited successfully';
        header('Location: a.php');
    }
    else
    {   
        echo 'query error: ' . mysqli_error($conn);
    }
}
if (isset($_POST['btn-delete']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "DELETE FROM products WHERE id = $id";
    if (mysqli_query($conn, $sql))
    {
        $_SESSION['message'] = 'Product deleted successfully';
        header('Location: a.php');
    }
    else
    {   
        echo 'query error: ' . mysqli_error($conn);
    }
}