
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Định dạng container chứa nút "Thêm vào giỏ hàng" */
.btnaddtocart {
    margin-top: 20px;
    text-align: center;
}

/* Định dạng các ô nhập ẩn */
.btnaddtocart input[type="hidden"] {
    display: block;
    margin-bottom: 5px;
}

/* Định dạng nút "Thêm vào giỏ hàng" */
.btnaddtocart input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    font-size: 16px;
}

/* Hover effect cho nút */
.btnaddtocart input[type="submit"]:hover {
    background-color: #45a049;
}

</style>
<body>
<div class="row mb ">
            <div class="boxtrai mr ">
            <div class="row">
            <div class="banner ">
             <img src="images/banner.png" alt=""width="100%">

                    <!-- Slideshow container -->
<!-- <div class="slideshow-container"> -->

<!-- Full-width images with number and caption text -->
<!-- <div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div> -->

<!-- Next and previous buttons -->
<!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br> -->

<!-- The dots/circles -->
<!-- <div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> -->
                    </div>
                </div>
                <div class="row">
                    <?php
                    $i=0;
                    
                       foreach ($spnew as $sp ) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh=$img_path.$img;
                        if(($i==2)||($i==5)||($i==8)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        
                        echo'<div class="boxsanpham '.$mr.'">
                        <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""width="100%" min-height: 200px> </a>
                        <p>'.$gia.'</p>
                        <a href="'.$linksp.'">'.$name.'</a>
                        <div class=" row btnaddtocart">
                        <form action="index.php?act=addtocart"method="post">
                        <input type="hidden"name="id" value="'.$id.'">
                        <input type="hidden" name="name" value="'.$name.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="gia" value="'.$gia.'">
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                        </div>
                </div>';
                        $i+=1;
                       }

                    ?> 
                    <!-- <div class="boxsanpham mr">
                        
                            <img src="images/sofa.png" alt=""width="100%" min-height: 200px>
                       
                       
                        <p>$30</p>
                        <a href="">Đẹp hiện đại, quý phái</a>
                    </div>
                    <div class="boxsanpham mr">
                        <img src="images/sofadoi1.jpg" alt=""width="100%"min-height: 200px>
                        <p>$30</p>
                        <a href="">Đẹp hiện đại, quý phái</a>
                    </div>
                    <div class="boxsanpham ">
                        <img src="images/sofa3.jpg" alt=""width="100%"min-height: 200px>
                        <p>$30</p>
                        <a href="#">Đẹp hiện đại, quý phái</a>
                    </div>
                    <div class="boxsanpham mr">
                        <img src="images/sofa4.jpg"width="100%"min-height: 200px>
                        <p>$30</p>
                        <a href="#">Đẹp hiện đại, quý phái</a>
                    </div>
                    <div class="boxsanpham mr">
                        <img src="images/product.png" alt=""width="100%"min-height: 200px>
                        <p>$30</p>
                        <a href="">Đẹp hiện đại, quý phái</a>
                    </div>
                    <div class="boxsanpham ">
                        <img src="images/product-2.png" alt=""width="100%"min-height: 200px>
                        <p>$30</p>
                        <a href="">Đẹp hiện đại, quý phái</a>
                    </div>
                    <div class="boxsanpham mr">
                        <img src="images/product-3.png" alt=""width="100%"min-height: 200px>
                        <p>$30</p>
                        <a href="">Đẹp hiện đại, quý phái</a>
                    </div>
                    <div class="boxsanpham mr">
                        <img src="images/sofadoi2.jpg" alt=""width="100%"min-height: 200px>
                        <p>$30</p>
                        <a href="">Đẹp hiện đại, quý phái</a>
                    </div>
                    <div class="boxsanpham ">
                        <img src="images/sofa3doi.png" alt=""width="100%"min-height: 200px>
                        <p>$30</p>
                        <a href="">Đẹp hiện đại, quý phái</a>
                    </div> -->
                </div>

            </div>
            <div class="boxphai ">
               <?php  include "boxright.php";?>
            </div>
        </div>
</body>
</html>