<?php

// error variable
$error = array();
$productbrand = validate_input_text_admin_site($_POST['brand']);
if (empty($productbrand)) {
    $error[] = "Please enter your Product Brand!!!";
}

$nameproduct = validate_input_text_admin_site($_POST['nameproduct']);
if (empty($nameproduct)) {
    $error[] = "Please enter your Name Product !!!";
}

$decriptionProduct = validate_input_text_admin_site($_POST['description']);
if (empty($decriptionProduct)) {
    $error[] = "Please enter your Name Product !!!";
}

$nameproduct = validate_input_text_admin_site($_POST['nameproduct']);
if (empty($nameproduct)) {
    $error[] = "Please enter your Name Product !!!";
}

$memoryproduct = validate_input_text_admin_site($_POST['memory']);
if (empty($memoryproduct)) {
    $error[] = "Please enter your Name Product !!!";
}

$cpuproduct = validate_input_text_admin_site($_POST['cpu']);
if (empty($cpuproduct)) {
    $error[] = "Please enter your Name Product !!!";
}

$gpuproduct = validate_input_text_admin_site($_POST['gpu']);
if (empty($gpuproduct)) {
    $error[] = "Please enter your Name Product !!!";
}

$driveproduct = validate_input_text_admin_site($_POST['drive']);
if (empty($driveproduct)) {
    $error[] = "Please enter your Name Product !!!";
}

$moniterproduct = validate_input_text_admin_site($_POST['moniter']);
if (empty($moniterproduct)) {
    $error[] = "Please enter your Name Product !!!";
}

$osproduct = validate_input_text_admin_site($_POST['os']);
if (empty($osproduct)) {
    $error[] = "Please enter your Name Product !!!";
}


$price = validate_input_text_admin_site($_POST['price']);
if (empty($price)) {
    $error[] = "Please enter your price!!!";
}

$discountprice = validate_input_text_admin_site($_POST['discountprice']);
if (empty($discountprice)) {
    $error[] = "Please enter your Discount price!!!";
}

$productid = validate_input_text_admin_site($_POST['idproduct']);
if (empty($productid)) {
    $error[] = "Please enter your Discount price!!!";
}

//Create demo profile
$fileImage = $_FILES['profileUpload'];
$profileImage = upload_profile('../assets/product-image/', $fileImage);


if (empty($error)) {

    // //Get connect SQL
    try {
        $connect = $db->con;
    } catch (ErrorException $er) {
        print "Error: " . $er->getMessage();
    }

    $item_id = $_GET['item_id'] ?? 1;

    // delete table product

    $sql = "DELETE FROM Product WHERE item_id=$productid";


    if ($connect->query($sql) === TRUE) {

        print "New record created successfully";
        header("location: ../admin/_view-products.php");
        exit();

    } else {
        print "Error: " . $sql . "<br>" . $connect->error;
    }

} else {
    echo 'Not validated';
}
