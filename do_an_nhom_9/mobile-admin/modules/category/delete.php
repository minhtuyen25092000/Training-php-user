<?php

require '../../../config/database.php';
require '../../../modules/db.php';
require '../../../modules/category.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $db = new Db();
    $cate = new Category();
    $product = $cate->getAllProductOfCategory($id);
    $qty = count($product);
    var_dump($qty);
    if($qty== 0)
    {
    $sql = "DELETE FROM category WHERE cate_id='$id'";
   
    $delete = $db->SIUD($sql);
    }
    else
    {
        setcookie('product',$qty,time() +5);
    }
    header('location:index.php');
}
?>