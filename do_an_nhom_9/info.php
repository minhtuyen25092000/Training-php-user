<?php
require 'layout/autoload.php';

require 'layout/header.php';
?>
<div class="row">
    <div class="san-pham">
        <center><span>Giới Thiệu</span></center>
    </div>
    <div class="col-md-4">
        <div class="product" style="height: 335px">
        <div class="col-xs-12">
            <div class="product-image">
                <center><a href="detail.php?id_product=<?php echo $value_cate_manu['id'] ?>"><img
                      style="border-radius:50%"  width="100%" src="public/image/apple.jpg ?>"
                        alt="image-product"></a></center>
            </div> <br>
        </div>
           
            <div class="product-name">
                <center><a href=""><h5>Name : </h5></a> </center> 
            </div>
            <div class="mssv">
                <b>MSSV: </b>  
            </div>
            <div class="class">
                <b>Lớp: </b> 
            </div>
            <div class="email">
                <b>Email: </b>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="product" style="height: 335px">
        <div class="col-xs-12">
            <div class="product-image">
                <center><a href="detail.php?id_product=<?php echo $value_cate_manu['id'] ?>"><img
                      style="border-radius:50%"  width="100%" src="public/image/apple.jpg ?>"
                        alt="image-product"></a></center>
            </div> <br>
        </div>
            <div class="product-name">
                <center><a href=""><h5>Name: </h5></a> </center> 
            </div>
            <div class="mssv">
                <b>MSSV: </b> 
            </div>
            <div class="class">
                <b>Lớp: </b> 
            </div>
            <div class="email">
                <b>Email: </b> 
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="product" style="height: 335px">
            <div class="col-xs-12">
                <div class="product-image">
                    <center><a href="detail.php?id_product=<?php echo $value_cate_manu['id'] ?>"><img
                        style="border-radius:50%"  width="100%" src="public/image/apple.jpg ?>"
                            alt="image-product"></a></center>
                </div> <br>
            </div>
            <div class="product-name">
                <center><a href=""><h5>Name:</h5></a> </center> 
            </div>
            <div class="mssv">
                <b>MSSV: </b> 
            </div>
            <div class="class">
                <b>Lớp: </b> 
            </div>
            <div class="email">
                <b>Email: </b>
            </div>
        </div>
    </div>
</div>
<?php
require 'layout/close.php';
require 'layout/footer.php';
?>