
<?php
    // 指定允许其他域名访问  
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS'); 
    header('Access-Control-Request-Headers:accept, content-type');
    $gid = isset($_GET["gid"]) ? $_GET["gid"] : 1;
    

    include 'DB_Helper.php';
    $sql = "select * from goods where gid='$gid'";
    

    $result = multi_query_oop($sql);
    
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>