<?php
session_start();


// user_type in the database must be admin
if (isset($_SESSION["user_id"]) && $_SESSION["user_type"] == "admin") {
} else {
    $_SESSION["alert"] = "Restricted to admins";
    header("location: login.php");
    exit();
}



if (isset($_POST["additem"])) {

    include "connection.php";

    $item_title = $_POST["item_title"];
    $item_description = $_POST["item_description"];
    $item_price = $_POST["item_price"];
    $item_image = "";
    $item_quantity = $_POST["item_quantity"];
    $uploadOk = 0;

    if ($_FILES["fileToUpload"]["error"] == 0) {
        include "upload.php";
    }

    if ($uploadOk == 1) {
        $sql = "INSERT INTO `items` (`item_id`, `item_title`, `item_description`, `item_price`, `item_image`, `item_quantity`) 
    VALUES (NULL, '$item_title', '$item_description', '$item_price', '$item_image', '$item_quantity');";



        if (mysqli_query($conn, $sql)) {
            $_SESSION["alert"] = "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
} // end if



include "header.php";
include "code.alerts.php";
?>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">


<style>
    body {
        color: #999;
        background: #fafafa;
        font-family: 'Roboto', sans-serif;
    }

    .form-control {
        min-height: 41px;
        box-shadow: none;
        border-color: #e6e6e6;
    }

    .form-control:focus {
        border-color: #00c1c0;
    }

    .form-control,
    .btn {
        border-radius: 3px;
    }

    .signup-form {
        width: 425px;
        margin: 0 auto;
        padding: 30px 0;
    }

    .signup-form h2 {
        color: #333;
        font-weight: bold;
        margin: 0 0 25px;
    }

    .signup-form form {
        margin-bottom: 15px;
        background: #fff;
        border: 1px solid #f4f4f4;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 40px 50px;
    }

    .signup-form .form-group {
        margin-bottom: 20px;
    }

    .signup-form label {
        font-weight: normal;
        font-size: 14px;
    }

    .signup-form input[type="checkbox"] {
        position: relative;
        top: 1px;
    }

    .signup-form .btn,
    .signup-form .btn:active {
        font-size: 16px;
        font-weight: bold;
        background: #00c1c0 !important;
        border: none;
        min-width: 140px;
    }

    .signup-form .btn:hover,
    .signup-form .btn:focus {
        background: #00b3b3 !important;
    }

    .signup-form a {
        color: #00c1c0;
        text-decoration: none;
    }

    .signup-form a:hover {
        text-decoration: underline;
    }
</style>



<div class="signup-form">
    <form action="admin-add-item.php" method="post" enctype="multipart/form-data">
        <h2>Add item</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="item_title" placeholder="Title" required="required">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="item_description" id="" cols="30" rows="10" placeholder="Description" required="required"></textarea>

        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="item_price" placeholder="Price" required="required">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="fileToUpload" placeholder="Upload File" required="required">
        </div>

        <div class="form-group">
            <input type="number" class="form-control" name="item_quantity" placeholder="Quantity" required="required">
        </div>

        <div class="form-group">
            <button name="additem" type="submit" class="btn btn-primary btn-lg">Add Item</button>
        </div>
    </form>

</div>













<?php include "footer.php" ?>