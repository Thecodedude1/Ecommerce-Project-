<?php
session_start();


if (isset($_GET["id"])) {
    $cart_id = $_GET["id"];
} else {
    echo "no id in the url";
    exit();
}


include "code.isLoggedIn.php";
include "connection.php";

// sql to delete a record
$sql = "DELETE FROM `cart` WHERE `cart`.`cart_id` = $cart_id";



if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";


    header("location: cart.php");
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
