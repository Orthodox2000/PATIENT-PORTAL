<?php
    //connect to the data base
    $host="sql12.freesqldatabase.com";
    $uname=" ";
    $pass=" ";
    $dbname=" ";
    // if data is submitted it is added to the database
    $conn=new mysqli($host,$uname,$pass,$dbname);
    if($conn->connect_error)
    die("no connecction");
    
       
        $querys= "CREATE TABLE patient(fn varchar(20),ln varchar(20),email varchar(50),mobile varchar(15),appointment date,detail varchar(200));";
        if($conn->query($querys)===true)
        echo "success";
        $conn->close();
       
?>