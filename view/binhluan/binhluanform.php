<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro=$_REQUEST['idpro'];
$iduser=$_SESSION['user']['id'];
$ngaybinhluan=date("h:i:sa d/m/Y");
$dsbl=loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
   /* Thiết lập cho bảng */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

/* Thiết lập cho tiêu đề cột */
th {
    background-color: #f2f2f2;
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

/* Thiết lập cho ô trong bảng */
td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

/* Định dạng khi rê chuột qua các hàng */
tr:hover {
    background-color: #a8edc7;
}

</style>


<body>
    


<div class="row mb">
<div class="boxtitle">Bình luận</div>
              

<div id="binhluan" class="boxcontent2 ">
    <table>
                        
                           <?php
                           echo"Nội dung bình luận ở đây: ".$idpro;
                 
                           if (isset($dsbl) && is_array($dsbl)){
                           foreach ($dsbl as $bl) {
                            extract($bl);
                           
                            echo'<tr><td>'.$noidung.' </td>';
                            echo'<td>'.$iduser.' </td>';
                            echo'<td>'.$ngaybinhluan.' </td></tr>';
                           
                            # code...
                           }
                        }
                         ?></table>
                           
                    </div>

                    <div  class="boxfooter binhluanform">
                        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                            <input type="hidden"name="idpro" value="<?=$idpro?>">
                            
                            <input type="text" name="noidung">
                            <input type="submit"name="guibinhluan" value="Gửi bình luận">
                        </form>
                    </div>

                    <?php
                     if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                        $noidung=$_POST['noidung'];
                        $idpro=$_POST['idpro'];
                        $iduser=$_SESSION['user']['id'];
                        $ngaybinhluan=date("h:i:sa d/m/Y");
                        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                        header("location:" . $_SERVER['HTTP_REFERER']);
                     }

                    ?>

                </div>
                </body>
</html> 