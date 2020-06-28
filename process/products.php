<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/inventory/config/general.php';

if (isset($_POST['add_new'])) {
    $product_title = mysqli_real_escape_string($con, $_POST['product_title']);
    $product_label = mysqli_real_escape_string($con, $_POST['product_label']);
    $part_number = mysqli_real_escape_string($con, $_POST['part_number']);
    $starting_inventory = mysqli_real_escape_string($con, $_POST['starting_inv']);
    $inventory_recieved = mysqli_real_escape_string($con, $_POST['inv_recieved']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $data = array(
        'product_title' => $product_title,
        'product_label' => $product_label,
        'part_number' => $part_number,
        'starting_inventory' => $starting_inventory,
        'inventory_recieved' => $inventory_recieved,
        'price' => $price
    );
    // print_r($price);

    if (empty($product_title) || empty($product_label) || empty($part_number) || empty($starting_inventory) || empty($inventory_recieved) || empty($price)) {
        $_SESSION['err_msg'] = 'All fields are required.';
        $_SESSION['fields'] = $data;

        print_r($_SESSION['fields']);

    }else {

        if (!entity_exists('tbl_product', $data['product_label'], 'product_label')) {
            $code = create_product($data);

            if ($code = 200) {
                echo $_SESSION['suc_msg'] = 'Product '.$data['product_title'].' has been created successfully!';
            }else{
                echo $_SESSION['err_msg'] = 'Product '.$data['product_title'].' can not be created';
                $_SESSION['fields'] = $data;
            }
        }else {
            echo $_SESSION['err_msg'] = 'Product with label '.$data['product_label'].' already exists';
            $_SESSION['fields'] = $data;
        }
    }
    header('Location: '.BASE_URL.'/products/new.php');
}
elseif (isset($_POST['update'])) {
    $product_id = mysqli_real_escape_string($con, $_POST['id']);
    $product_title = mysqli_real_escape_string($con, $_POST['product_title']);
    $product_label = mysqli_real_escape_string($con, $_POST['product_label']);
    $part_number = mysqli_real_escape_string($con, $_POST['part_number']);
    $starting_inventory = mysqli_real_escape_string($con, $_POST['starting_inv']);
    $inventory_recieved = mysqli_real_escape_string($con, $_POST['inv_recieved']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    // print_r($_POST);

    if (empty($product_title) || empty($part_number) || empty($inventory_recieved)) {
        $_SESSION['err_msg'] = 'All fields are required.';

    }else {

        $data = array(
            'id' => $product_id,
            'product_title' => $product_title,
            'product_label' => $product_label,
            'part_number' => $part_number,
            'inventory_recieved' => $inventory_recieved,
        );

        if (entity_exists('tbl_product', $data['product_label'], 'product_label')) {
            $code = update_product($data);

            if ($code == 200) {
                $_SESSION['suc_msg'] = 'Product '.$data['product_title'].' has been updated successfully!';
            }else{
                $_SESSION['err_msg'] = 'Product '.$data['product_title'].' can not be update';
                $_SESSION['fields'] = $data;
            }
        }else {
            $_SESSION['err_msg'] = 'Product with label '.$data['product_label'].' not found';
            $_SESSION['fields'] = $data;
        }
    }
    // echo $_SESSION['err_msg'].'<br>';
    // echo $_SESSION['suc_msg'];
    header('Location: '.BASE_URL.'/products/update.php?id='.$product_id);
}

?>