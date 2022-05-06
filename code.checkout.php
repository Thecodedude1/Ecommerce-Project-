<?php
session_start();



//echo json_encode(["error" => "Something went wrong"]);
//exit();



//1. check if user is logged in
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
} else {
    //echo "no user id found";
    // header("location: login.php");
    exit();
}




//2. get cart information
include "code.viewcart.php";


//check if cart is empty (IMPORTANT CHANGE)
if (empty($cart)) {
    //echo "cart is empty";
    exit();
}

//3. get cart total and subtotal


//4. generate receipt code
$receipt_code = "abcde"; //generate random number

//5. insert receipt
include "connection.php";

$sql = "INSERT INTO `receipts` (`receipt_id`, `user_id`, `receipt_code`, `receipt_subtotal`, `receipt_total`, `receipt_date`) 
VALUES (NULL, '$user_id', '$receipt_code', '$subtotal', '$total', current_timestamp());";

if (mysqli_query($conn, $sql)) {
    $receipt_id = mysqli_insert_id($conn);
    //echo "New record created successfully. Last inserted ID is: " . $receipt_id;
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//insert user points
$points = $total * 0.05;
$sql = "";
$sql .= "UPDATE `users` SET `points` = `points`+'$points' WHERE `users`.`user_id` = $user_id;";

if (mysqli_query($conn, $sql)) {
    //echo "New records created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}







//6. insert purchases and update cart
$sql = "";
foreach ($cart as $key => $item) {
    $item_id = $item["item_id"];
    $cart_id = $item["cart_id"];
    $item_price = $item["item_price"];


    $sql .= "INSERT INTO `purchases` (`purchase_id`, `item_id`, `purchase_item_price`, `purchase_item_quantity`, `purchase_date`, `receipt_id`) VALUES (NULL, '$item_id', '$item_price', '1', current_timestamp(), '$receipt_id');";

    $sql .= "UPDATE `cart` SET `cart_item_status` = 'purchased' WHERE `cart`.`cart_id` = $cart_id;";
}





if (mysqli_multi_query($conn, $sql)) {
    //echo "New records created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




//7. stripe payment
include "code.stripe2.php";
