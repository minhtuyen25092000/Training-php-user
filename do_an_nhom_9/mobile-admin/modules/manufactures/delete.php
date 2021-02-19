<?php
require '../../../config/database.php';
require '../../../modules/db.php';
require '../../../modules/manufactures.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $db = new Db();
    $manu = new Mamufactures();
    $product = $manu ->getAllProductOfManu($id); 
    $qty = count($product); 
    
    var_dump($qty); 

   
    if($qty == 0)
    {
        $sql = "DELETE FROM manufactures WHERE manu_id='$id'";
        $delete = $db->SIUD($sql);
    }
    else
    {
        
        setcookie('product',$qty ,time() + 5, "/");
    }
    header('location:index.php');
}

?>