
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    


    form {
    max-width: 400px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    border-radius:10px;
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    box-sizing: border-box;
}

input[type="submit"],
input[type="reset"] {
    width:100px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
    background-color: #45a049;
}

/* Add more styles as needed */

</style>
<body>
<div class="row mb ">
            <div class="boxtrai mr ">
            <div class="row mb ">
                
                    <div class="boxtitle">Cập nhật tài khoản</div>
                    <div class=" row boxcontent ">
                        <?php
                        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract(($_SESSION['user']));

                        }
                        ?>
                        <form action="index.php?act=edit_taikhoan" method="post">
                        <label for="email">Email:</label>
                         <input type="email"  name="email" value="<?=$email?>" required>

                         <label for="user">Tên đăng nhập:</label>
                         <input type="text" id="user" name="user" value="<?=$user?>"required>

                         <label for="pass">Mật khẩu:</label>
                         <input type="password"  name="pass"value="<?=$pass?>" required>

                         <label for="address">Đại chỉ:</label>
                         <input type="text"  name="address" value="<?=$address?>"required>

                         <label for="tel">Điên thoai:</label>
                         <input type="text"  name="tel"value="<?=$tel?>" required>
                         <input type="hidden"name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                        </form>
                        <h2 class="thongbao">  
                      <?php
                     

                      if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                      }
                    
                      ?>
                        </h2>
                    </div>
                </div>
                
                </div>

            <div class="boxphai ">
            <?php  include "view/boxright.php";?>
                </div>
            </div>
        
</body>
</html>