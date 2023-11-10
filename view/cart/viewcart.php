<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Thiết lập kiểu cho các hàng và cột trong bảng */
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

/* Định dạng hình ảnh trong bảng */
td img {
    max-height: 80px;
}

/* Thiết lập kiểu cho các box */
/* .boxtrai, .boxphai {
    width: 48%;
    float: left;
    margin-right: 2%;
} */

/* Định dạng boxtitle và boxcontent */
/* .boxtitle {
    background-color: #333;
    color: #fff;
    padding: 10px;
} */

/* .boxcontent {
    padding: 15px;
} */

/* Định dạng nút và liên kết */
input[type="button"], input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    text-decoration: none;
}

/* Thiết lập kiểu cho các dòng có class "mb" */
/* .mb {
    margin-bottom: 20px;
} */

/* Thiết lập kiểu cho dòng có class "bill" */
.bill {
    text-align: right;
}

/* Định dạng liên kết trong boxphai */
/* .boxphai a {
    color: #007BFF;
    text-decoration: none;
}

/* Hover effect cho liên kết */
/* .boxphai a:hover {
    text-decoration: underline;
} */ */

</style>
<body>
    

<div class="row mb">
<div class="boxtrai mr">
    <div class="row mb">
        <div class="boxtitle">Giỏ hàng</div>
        <div class="row boxcontent cart">
            <table>
               
                
                <?php
                viewcart(1);
            //     $tong=0;
            //     $i=0;
            //     foreach ($_SESSION['mycart'] as $cart) {
            //         $hinh=$img_path.$cart[2];
            //         $ttien=$cart[3]*$cart[4];
            //         $tong+=$ttien;        
            //         $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button"value="Xóa"></a>';
            //         echo ' <tr>
            //         <td><img src="'.$hinh.'" alt="" height="80px"></td>
            //         <td>"'.$cart[1].'"</td>
            //         <td>"'.$cart[3].'"</td>
            //         <td>"'.$cart[4].'"</td>
            //         <td>'.$ttien.'</td>
                    
            //         <td>'.$xoasp.'</td>
            //     </tr>';
            //     $i+=1;
            //     }  
            //     echo '<tr>
            //     <td colspan="4">Tổng đơn hàng</td>
               
            //     <td>'.$tong.'</td>
            //     <td></td>
            // </tr>';
                
                ?>
                <!-- <tr>
                    <td>1</td>
                    <td><img src="images/sofa4" alt="" height="80px"></td>
                    <td>Sofa đôi</td>
                    <td>50</td>
                    <td>2</td>
                    <td>100 VND</td>
                    <td><input type="button"value="Xóa"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="images/sofa4" alt="" height="80px"></td>
                    <td>Sofa đôi</td>
                    <td>50</td>
                    <td>2</td>
                    <td>100 VND</td>
                    <td><input type="button"value="Xóa"></td>
                </tr> -->
            </table>
        </div>
    </div>
    <div class="row mb bill">
        <a href="index.php?act=bill"><input type="button" value="TIẾP TỤC ĐẶT HÀNG" ></a><a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
    </div>
</div>
<div class="boxphai">
    <?php include "view/boxright.php";  ?>
</div>

</div>
            </body>
</html