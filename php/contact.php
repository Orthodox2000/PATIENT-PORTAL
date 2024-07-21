<!DOCTYPE html>
<html>
    <head>
    <link href="../css/reply.css" type="text/css" rel="stylesheet">
        <script> function gb()
        {
            window.open("../index.html","_self");

        }
        </script>
    </head>
</html>
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
    
        $fn=$_POST['fn'];
        $ln=$_POST['ln'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $appointment=$_POST['appointment'];
        $detail=$_POST['detail'];
        $querys= "INSERT INTO patient(fn,ln,email,mobile,appointment,detail)VALUES('$fn','$ln','$email','$mobile' ,'$appointment','$detail');";
        if($conn->query($querys)===true)
        echo "<div class=response onclick='gb();'> data has been recorded! <br>click to return</div>";
        else
        echo "<div class=response onclick='gb();'>failure to register data! <br>click to return to homepage</div>"; 
        $conn->close();
       

    ?>
