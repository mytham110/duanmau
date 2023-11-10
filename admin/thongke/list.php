<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    .row {
        margin-bottom: 10px;
    }

    .frmtitle h1 {
        color: #333;
        font-size: 24px;
        font-weight: bold;
    }

    .frmcontent {
        background-color: while;
        padding: 15px;
        border-radius: 5px;
    }

    .frmdsloai table {
        width: 100%;
        border-collapse: collapse;
    }

    .frmdsloai th, .frmdsloai td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .frmdsloai th {
        background-color: #7ee2c0;
    }

    .frmdsloai tr:hover {
        background-color: #f5f5f5;
    }
</style>


<div class="row">
    <div class="row frmtitle">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                <?php
                  foreach ($listthongke as $thongke) {
                    extract($thongke);
                    echo '<tr>
                    <td>1'.$madm.'</td>
                    <td>'.$tendm.'</td>
                    <td>'.$countsp.'</td>
                    <td>'.$maxgia.'</td>
                    <td>'.$mingia.'</td>
                    <td>'.$avggia.'</td>
                </tr>';
                  }
                ?>
               
            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
        </div>
    </div>
</div>
</body>
</html>