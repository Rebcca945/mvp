<?php
session_start();
include('conn.php');
if(isset($_GET['product_id'])){
    $get_id=$_GET['product_id'];

    // sql to delete a record
    $sql = "Delete from product_table where product_id = '$get_id'";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    header('location:product_table.php');

}
else if(isset($_GET['catagory_id'])){
    $get_id=$_GET['catagory_id'];

    // sql to delete a record
    $sql = "Delete from catagory_table where catagory_id = '$get_id'";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    header('location:categories_table.php');

}


else if(isset($_GET['customer_id'])){
    $get_id=$_GET['customer_id'];

    // sql to delete a record
    $sql = "Delete from customer_table where customer_id = '$get_id'";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    header('location:customer_table.php');

}
else if(isset($_GET['admin_id'])){
    $get_id=$_GET['admin_id'];

    // sql to delete a record
    $sql = "Delete from user_table where admin_id = '$get_id'";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    header('location:admin_table.php');

}

?>