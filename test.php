<?php
    $host = 'database-3.c2ckinxnf8yn.us-east-1.rds.amazonaws.com';
    $user = 'admin2';
    $pw = 'admin112358';
    $dbName = 'weather_info';
    $mysqli = new mysqli($host, $user, $pw, $dbName);
 
    if($mysqli){
        echo "MySQL 접속 성공";
    }else{
        echo "MySQL 접속 실패";
    }
?>
#aws상의 mysql과 김예찬 데스크톱의 아파치 서버 연동
