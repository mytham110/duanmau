
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
<div class="row mb ">
            <div class="boxtrai mr ">
            <div class="row mb ">
                
                    <div class="boxtitle">SẢN PHẨM <strong> <?=$tendm?></div>
                    <div class=" row boxcontent">
                       <?php  
                       $i=0;
                     foreach ($dssp as $sp ) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh=$img_path.$img;
                        if(($i==2)||($i==5)||($i==8)||($i==11)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        
                        echo'<div class="boxsanpham '.$mr.'">
                        <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""width="100%" min-height: 200px> </a>
                        <p>'.$gia.'</p>
                        <a href="'.$linksp.'">'.$name.'</a>
                </div>';
                        $i+=1;
                       }
                      ?>
                    </div>
                </div>
               
</div>
            <div class="boxphai ">
            <?php  include "boxright.php";?>
                </div>
            </div>
        
</body>
</html>