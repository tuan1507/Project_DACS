<?php
include("../../asset/connect/connectsql.php");

$name_product = $_POST['input_name_product'];
$quantity = $_POST['input_quantity_product'];
$first_price = $_POST['input_frist_price'];
$last_price = $_POST['input_last_price'];
$product_type = $_POST['input_product_type'];

if (isset($_POST['add_product'])) {
    $sql_addproduct = "INSERT INTO product (name_product, quantity, first_price, last_price, product_type ) 
    VALUE ('".$name_product."','".$quantity."','".$first_price."','".$last_price."','".$product_type."')";
    mysqli_query($mysqli, $sql_addproduct);
    include("addproduct.php");
    echo '<script>alert("Thêm sản phẩm thành công");</script>';
}
?>