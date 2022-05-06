<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce2020_before";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "SELECT * from items";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $old_products = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo "0 results";
}
mysqli_close($conn);

$sql = "";
foreach ($old_products as $product) {
    $item_title = htmlentities($product["item_title"], ENT_QUOTES);
    $item_description = htmlentities($product["item_description"], ENT_QUOTES);

    $sql .= "INSERT INTO `items` (`item_id`, `item_title`, `item_description`, `item_price`, `item_image`, `item_quantity`) 
    VALUES (NULL, '$item_title', '{$item_description}', '{$product["item_price"]}', 'others/products/{$product["item_image"]}', '100');";
}

//echo $sql;


include "../connection.php";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
