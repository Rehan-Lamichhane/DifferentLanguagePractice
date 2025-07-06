<?php
    $host='localhost';
    $user='root';
    $password='';
    $db = 'it_web_db';

    $connect=mysqli_connect($host,$user,$password,$db);
    if(!$connect){
        die("Connection Fail".mysqli_connect_error());
    }
    else{
        echo"mysql connected";
    }
    echo "<br";
    $sql = 'create database if not exists it_web_db';
    $result = mysqli_query($connect , $sql);
    if($result){
        echo "Database created.";
    }else{
        echo "Sorry..........";
    }
    echo "<br";

    $sqlForTable = "create table if not exists user_registration(uid int(5) primary key auto_increment ,
                    Name varchar(32),
                    Address varchar(32) ,
                    EMail varchar(32) , 
                    Password varchar(32))";

    $createTableResult = mysqli_query($connect , $sqlForTable);
    if($createTableResult){
        echo "user_registration Table created succesfully....";
    }
    else{
        echo ("<br> Error: ".mysqli_connect_error);
    }

    
?>