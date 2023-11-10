<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Reset some default styles */
body, table {
    margin: 0;
    padding: 0;
}

/* Style the table */
table {
    width: 100%;
    border-collapse: collapse;
}

/* Style table header */
th {
    background-color: #f2f2f2; /* Light gray background */
    padding: 10px;
    text-align: left;
}

/* Style table rows */
td {
    border: 1px solid #ddd; /* Gray border */
    padding: 8px;
}

/* Alternate row colors for better readability */
tr:nth-child(even) {
    background-color: #f9f9f9; /* Lighter gray background for even rows */
}

/* Style buttons */
input[type="button"] {
    background-color: #4CAF50; /* Green background */
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 5px;
}

/* Style the checkbox */
input[type="checkbox"] {
    transform: scale(1.5); /* Make the checkbox larger */
}

</style>
<body>
<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row frmcontent">
        <div class="row mb10 frmsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
foreach ($listbill as $bill) {
    extract($bill);
    $kh = $bill["bill_name"] . '<br>' . $bill["bill_email"] . '<br> ' . $bill["bill_address"] . '<br> ' . $bill["bill_tel"];
    $ttdh = get_ttdh($bill["bill_status"]);
    $countsp = loadall_cart_count($bill["id"]);

    echo '<tr>
            <td><input type="checkbox" name=""></td>
            <td>' . $bill['id'] . '</td>
            <td>' . $kh . '</td>
            <td>' . $countsp . '</td>
            <td><strong>' . $bill["total"] . '</strong>VND</td>
            <td>' . $ttdh . '</td>
            <td>' . $bill["ngaydathang"] . '</td>
            <td><input type="button" value="xóa"></td>
            
          </tr>';
}
?>

            </table>
        </div>
        <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">

                   <a href="index.php?act=addsp"> <input type="button" value="Nhập thêm"></a>
                </div>
            
        
        
    </div>
</div>
</body>
</html>