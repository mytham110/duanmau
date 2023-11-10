
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
    padding: 10px 0px;
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
                
                    <div class="boxtitle">Quên mật khẩu</div>
                    <div class=" row boxcontent ">
                        <form action="index.php?act=quenmk" method="post">
                        <label for="email">Email:</label>
                         <input type="email" id="email" name="email" required>

                       

                        <input type="submit" value="Gửi" name="guiemail">
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