<?php

if(is_array($sanpham)){
    extract($sanpham);
}
$tensp=$name;
$idm=$id;
$hinhpath="../upload/".$img;
if(is_file($hinhpath)){
  $hinh="<img src='../upload/".$img."' height='80'>";
}else{
  $hinh="no photo";
}
?>

<div class="row">
            <div class="row  formtitle"><H1>Cập nhập sản phẩm mới</H1></div>
              <div class="row formcontent">
              <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                <select name="iddm" id="">
                           <option value="0" selected>Tất cả</option>
                        <?php
                    foreach ($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                      if($iddm==$id)echo "<option value='".$id."' selected>'".$name."'</option>";
                      else echo "<option value='".$id."'>'".$name."'</option>";
                    }
                    ?>
                    
                
                        </select>
                 
               <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text"name="tensp" value="<?php echo $tensp?>">
               
              </div>
              <div class="row mb10">
                Giá <br>
                <input type="text"name="giasp" value="<?php echo $gia ?>">
               
              </div>
              <div class="row mb10">
               Hình <br>
                <input type="file"name="hinh" >
                <?php echo $hinh ?>
               
              </div>
              <div class="row mb10">
               Mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10" ><?php echo $mota ?></textarea>
               
              </div>
              <div class="row mb10">
                <input type="hidden"name="id" value="<?php echo $idm ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
               <a href="index.php?act=listsp"> <input type="button" value="Danh sách"></a>
            </div>
            <?php 
            if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
            
            ?>
        </form>
            
        </div>
        </div>
</div>