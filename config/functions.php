<?php
include_once 'db_connect.php';

function create_product($data){
    global $con;

    $create_product_query = "INSERT INTO `tbl_product` (
        `product_name`,
        `part_number`,
        `product_label`,
        `starting_inventory`,
        `inventory_recieved`,
        `price`) 
        VALUES('".$data['product_title']."', '".$data['part_number']."', '".$data['product_label']."', '".$data['starting_inventory']."', '".$data['inventory_recieved']."', '".$data['price']."')";

    $query_run = mysqli_query($con, $create_product_query);

    if (!$query_run) {
        $code = 400;
    }else {
        $code = 200;
    }

    return $code;

}

function update_product($data) {
    global $con;

    $update_query = "UPDATE `tbl_product` SET 
    `product_name` = '".$data['product_title']."',
    `part_number` = '".$data['part_number']."',
    `product_label` = '".$data['product_label']."',
    `inventory_recieved` = '".$data['inventory_recieved']."' WHERE `id` = '".$data['id']."'";
    $query_run = mysqli_query($con, $update_query);

    if (!$query_run) {
        $code = 400;
    }else {
        $code = 200;
    }
    
    return $code;
}

function entity_exists($table, $label, $key){
    global $con;

    $exist_query = "SELECT COUNT(*) as total FROM `$table` WHERE `$key` = '".$label."' ";
    $query_run = mysqli_query($con, $exist_query);

    $result = mysqli_fetch_array($query_run);
    $total = $result['total'];

    if($total > 0){
        return true;
    }else{
        return false;
    }
}

function get_all_entity($table) {
    global $con;

    $all_query = "SELECT * FROM `$table`";
    $query_run = mysqli_query($con, $all_query);

    $result = mysqli_fetch_all($query_run);
    return $result;
}

function get_single_entity($table, $id, $key='id'){
    global $con;

    $single_query = "SELECT * FROM `$table` WHERE `$key` = '".$id."' ";
    $query_run = mysqli_query($con, $single_query);

    $result = mysqli_fetch_array($query_run);
    return $result;
}
?>