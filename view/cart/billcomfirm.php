<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Định dạng danh sách */
ul {
  list-style-type: none;
  padding: 0;
}

/* Định dạng từng mục trong danh sách */
li {
  margin-bottom: 10px; /* hoặc bất kỳ khoảng cách nào bạn muốn giữa các mục */
}

/* Định dạng mã đơn hàng */
li:nth-child(1) {
  font-weight: bold;
  color: #3366cc; /* hoặc màu bạn thích */
}

/* Định dạng ngày đặt hàng */
li:nth-child(2) {
  font-style: italic;
}

/* Định dạng tổng đơn hàng */
li:nth-child(3) {
  color: #ff0000; /* hoặc màu bạn thích */
}

/* Định dạng phương thức thanh toán */
li:nth-child(4) {
  text-transform: uppercase;
}
/* Định dạng bảng */
.tt {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px; /* hoặc bất kỳ khoảng cách nào bạn muốn giữa bảng và các phần khác */
}

/* Định dạng các ô trong bảng */
.tt td {
  padding: 8px;
  border: 1px solid #ddd;
}

/* Định dạng cột đầu tiên (Người đặt hàng, Địa chỉ, Email, Điện thoại) */
.tt td:nth-child(1) {
  font-weight: bold;
  background-color: #f2f2f2; /* hoặc màu bạn thích */
}

/* Định dạng cột thứ hai (Giá trị tương ứng) */
.tt td:nth-child(2) {
  text-align: left; /* hoặc center hoặc right tùy thuộc vào thiết kế của bạn */
}
/* Định dạng bảng */
.ct {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px; /* hoặc bất kỳ khoảng cách nào bạn muốn giữa bảng và các phần khác */
}

/* Định dạng tiêu đề cột */
.ct th {
  background-color: #f2f2f2; /* hoặc màu bạn thích */
  padding: 8px;
  text-align: left;
  border: 1px solid #ddd;
}

/* Định dạng ô trong bảng */
.ct td {
  padding: 8px;
  border: 1px solid #ddd;
}

/* Định dạng số thứ tự */
.ct td:first-child {
  text-align: center;
}

/* Định dạng hình ảnh */
.ct td:nth-child(2) img {
  max-height: 80px; /* hoặc kích thước tối đa mà bạn muốn hiển thị */
  display: block;
  margin: 0 auto; /* căn giữa hình ảnh */
}

/* Định dạng giá và thành tiền */
.ct td:nth-child(4),
.ct td:nth-child(6) {
  text-align: right;
}

/* Định dạng số lượng */
.ct td:nth-child(5) {
  text-align: center;
}


</style>
<body>
    

<div class="row">
    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row mb">
            <div class="boxtitle">CẢM ƠN QUÝ KHÁCH</div>
            <div class="row boxcontent" style="text-align: center">
            <H2>Cảm ơn quý khách đã đặt hàng</H2>
        </div>
        </div>
        <?php
         if(isset($bill)&&(is_array($bill))){
            extract($bill);
         }
        ?>
        <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
            <div class="row boxcontent"style="text-align: center">
            <li>Mã đơn hàng: DAM-<?=$bill['id'];?></li>
            <li>Ngày đặt hàng: <?=$bill['ngaydathang'];?></li>
            <li>Tổng đơn hàng:<?=$bill['total'];?></li>
            <li>Phương thức thanh toán:<?=$bill['bill_pttt'];?></li>
        
        </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row boxcontent billform">
                <table class="tt">
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?=$bill['bill_name'];?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?=$bill['bill_address'];?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$bill['bill_email'];?></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><?=$bill['bill_tel'];?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row mb">
            <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
            <div class="row boxcontent">
                <table class="ct">
                   <!-- <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                   </tr> -->
                   <?php 
                    bill_chi_tiet($billct);
                   ?>
                   <!-- <tr>
                    <td>1</td>
                    <td><img src="images/sofadoi1.jpg" alt="" height="80px"></td>
                    <td>Sofa đôi</td>
                    <td>50</td>
                    <td>2</td>
                    <td>200 VND</td>
                   </tr>
                   <tr>
                    <td>2</td>
                    <td><img src="images/sofadoi1.jpg" alt="" height="80px"></td>
                    <td>Sofa đôi</td>
                    <td>50</td>
                    <td>2</td>
                    <td>200 VND</td>
                   </tr> -->
                </table>
            </div>
        </div>
        </div>
       
<div class="boxphai">
    <?php include "view/boxright.php" ?>
</div>

    </div>
</div>
</body>
</html>