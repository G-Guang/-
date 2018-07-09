<?php
    // 指定允许其他域名访问  
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS'); 
    header('Access-Control-Request-Headers:accept, content-type');
    $gid = isset($_GET["gid"]) ? $_GET["gid"] : 1;
    $qty = isset($_GET["qty"]) ? $_GET["qty"] : 1;
    

    include 'DB_Helper.php';
    $sql = "insert into car (gid,name,url,price,qty) select gid,name,url,price,'$qty' from goods where gid = '$gid'";
    $sql1 = "select * from car where gid = '$gid'";
    $sql2 = "update car set qty=qty+'$qty' where gid='$gid'";

    $result = query_oop($sql1);
    if (count($result) > 0) {
        multi_query_oop($sql2);
    }else{
        multi_query_oop($sql);
    }

    echo json_encode(count($result) > 0, JSON_UNESCAPED_UNICODE);
    
?>