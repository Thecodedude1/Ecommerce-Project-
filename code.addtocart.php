<?php
session_start();

if (isset($_GET["id"])) {
    $item_id = $_GET["id"];
} else {
    echo "no id in the url";
    exit();
}


include "code.isLoggedIn.php";


include "connection.php";


$sql = "INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `cart_item_added`, `cart_item_quantity`, `cart_item_status`) 
    VALUES (NULL, '$user_id', '$item_id', current_timestamp(), '1', 'cart');";

if (mysqli_query($conn, $sql)) {
    $_SESSION["alert"] = "Item added to cart";

    header("location: cart.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
