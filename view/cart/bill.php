<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
}

td {
  padding: 10px;
  border: 1px solid #ddd;
}

input {
  width: 100%;
  padding: 8px;
  box-sizing: border-box;
  margin-top: 5px;
}

/* Optional: Style for the table headers */
th {
  background-color: #f2f2f2;
}

</style>
<body>
    

<div class="row mb">

<div class="boxtrai mr">
    <form action="index.php?act=billcomfirm" method="post">

    <div class="row">
        <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
        <div class="row boxcontent billform">
            <table>
                <?php
                
                  if(isset($_SESSION['user'])){
                    $name=$_SESSION['user']['user'];
                    $address=$_SESSION['user']['address'];
                    $email=$_SESSION['user']['email'];
                    $tel=$_SESSION['user']['tel'];
                  }else{
                    $name="";
                    $address="";
                    $email="";
                    $tel="";
                  }
                ?>
                <tr>
                    <td>Người đặt hàng</td>
                    <td><input type="text" name="name" value="<?=$name?>"></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="address"value="<?=$address?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"value="<?=$email?>"></td>
                </tr>
                <tr>
                    <td>Điện thoai</td>
                    <td><input type="text" name="tel"value="<?=$tel?>"></td>
                </tr>
            </table>
        </div>
    </div>
    
<div class="row mb">
    <div class="boxtitle">
      PHƯƠNG THỨC THANH TOÁN</div>
    <div class="row boxcontent">
        <table>
            <tr>
                <td><input type="radio"name="pttt" checked>Trả tiền khi nhận hàng</td>
                <td><input type="radio"name="pttt" checked>Chuyển khoản ngân hàng</td>
                <td><input type="radio"name="pttt" checked>Thanh toán online</td>
            </tr>
        </table>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
    <div class="row boxcontent cart">
        <table>
            <!-- <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
            </tr> -->
            <?php
            viewcart(0);
            ?>
            <!-- <tr>
                <th>1</th>
                <th><img src="images/sofa3.jpg" alt="" height="80px"></th>
                <th>Sofa</th>
                <th>50</th>
                <th>2</th>
                <th>100 VND</th>
            </tr>
            <tr>
                <th>2</th>
                <th><img src="images/sofa4.jpg" alt="" height="80px"></th>
                <th>Sofa</th>
                <th>50</th>
                <th>2</th>
                <th>400 VND</th>
            </tr> -->
        </table>
    </div>
</div>
<div class="row mb bill">
    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG"name="dongydathang">
</div>
</form>
</div>
<div class="boxphai">
    <?php include "view/boxright.php" ?>
</div>
</div>
</body>
</html>
