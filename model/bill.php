<?php
function delete_bill($id){
    $sql = "delete from bills where id=".$id;
    pdo_execute($sql);
}
?>