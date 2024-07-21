<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/switch.js"></script>
    <link href="../css/reply.css" type="text/css" rel="stylesheet">
</head>
<body>
    
</body>
</html>
<?php
    //connect to the data base
    $host="sql12.freesqldatabase.com";
    $uname="sql12718118";
    $pass="SDqylYlSMK";
    $dbname="sql12718118";
    // if data is submitted it is added to the database
    $conn=new mysqli($host,$uname,$pass,$dbname);
    if($conn->connect_error)
    die("no connecction"); 
    $uname=$_POST['signup_username'];
    $pass=$_POST['signup_pass'];
    if($pass=="")
    $pass="123";
    $query1="SELECT uname FROM user";
    $res=$conn->query($query1);
     
        // output data of each row
        while($row = mysqli_fetch_assoc($res)) 
        {
          if($row["uname"]==$uname)
          {  
            echo "<script>window.history.back();alert('username taken please select different username');</script>";
                echo "<div class=response onclick='gb();'>'".$row["uname"]."'<br>this USERNAME ALREADY EXIST! <br>click here to return</div>";
                die ();
                      
          }
        }
       
    $q="INSERT INTO user(user_no,uname,pass) VALUES('','$uname','$pass');";
    if($conn->query($q)===true)  
    {echo "<script>window.history.back();alert('account created successfully!');</script>";
    echo "<div class=response onclick='gb();'> account created successfully!<br>click to return</div>";
    }else
        echo "<div class=response onclick='gb();'>failure to register data! <br>click to return to homepage</div>"; 
    
    $conn->close();
?>