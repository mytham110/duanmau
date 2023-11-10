<div class="row mb ">
                    <div class="boxtitle">Tài khoản</div>
                    <div class="boxcontent formtaikhoan ">
                        <?php
                          if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                            ?>
                               <div class="row mb10">
                            Xin chào  <br>
                            <?=$user?>
                            
                        </div>
                        <div class="row mb10">
                        <li>
                            <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                        </li>
                        <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                        </li>
                        <?php  
                        if($role==1){
                        ?>
                        <li>
                            <a href="admin/index.php">Đăng nhập Admin</a>
                        </li>
                        <?php }?>
                        <li>
                            <a href="index.php?act=thoat">Thoát</a>
                        </li>
                        
                        </div>
                            <?php
                          }else{

                          
                          ?>
                       
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                            Tên đăng nhập <br>
                            <input type="text" name="user" id="">
                            
                        </div>
                        <div class="row mb10">
                            Mật khẩu <br>
                            <input type="password"name="pass" id="">
                        </div>
                        <div class="row mb10">
                            <input type="checkbox" name="" id="">Ghi nho tai khoan? </div>
                            <div class="row">
                            <input type="submit" value="Dang nhap" name="dangnhap"></div>
                            
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký thành viên</a>
                        </li>
                        <?php }?>
                    </div>
                </div>
                <div class="row mb ">
                    <div class="boxtitle">Danh mục</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                           <?php
                           if (isset($dsdm) && is_array($dsdm)){
                           foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm="index.php?act=sanpham&iddm=".$id;
                            echo'<li>
                            <a href="'.$linkdm.'">'.$name.'</a>
                        </li>';
                            # code...
                           }
                        }
                           ?>
                            <!-- <li>
                                <a href="#">Sofa</a>
                            </li>
                            <li>
                                <a href="#">
                                    Sofa đôi
                                </a>
                            </li>
                            <li>
                                <a href="#">Ghế đơn</a>
                            </li>
                            <li>
                                <a href="#">Ghế đôi</a>
                            </li>
                            <li>
                                <a href="#">Ghế đôi</a>
                            </li>
                            <li>
                                <a href="#">Ghế đôi</a>
                            </li>
                            <li>
                                <a href="#">Ghế đôi</a>
                            </li>
                            <li>
                                <a href="#">Ghế đôi</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw">
                            <input type="submit"name="timkiem" value="Tìm Kiếm">
                        </form>
                    </div>
                </div>
                <div class="row  ">
                    <div class="boxtitle">Top 10 yêu thích</div>
                    <div class=" row boxcontent">
                        <?php
                        if (isset($dstop10) && is_array($dstop10)){
                        foreach ($dstop10 as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $img=$img_path.$img;
                            echo '<div class="row mb10 top10">
                            <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                        }
                    }
                        ?>
                        <!-- <div class="row mb10 top10">
                            <img src="images/banner.png" alt="">
                            <a href="#">Nội thất đẹp nhất hiện nay</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/sofadoi1.jpg" alt="">
                            <a href="#">Nội thất đẹp nhất hiện nay</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/sofa3.jpg" alt="">
                            <a href="#">Nội thất đẹp nhất hiện nay</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/product.png" alt="">
                            <a href="#">Nội thất đẹp nhất hiện nay</a>
                        </div> -->
                    </div>