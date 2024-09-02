<?php  session_start();

 
//connect to the data base
    $host="sql12.freesqldatabase.com";
    $uname="
    $pass="
    $dbname="
    // if data is submitted it is added to the database
    $conn=new mysqli($host,$uname,$pass,$dbname);
    if($conn->connect_error)
    die("no connecction");
    $loginname=$_POST['login_name'];
    $loginpass=$_POST['login_pass'];
    $sql = "SELECT uname,pass FROM user;";
$result = $conn->query($sql);

 
  while($row = mysqli_fetch_assoc($result)) {
    if($row["uname"]==$loginname&&$row["pass"]==$loginpass)
    {  
 
      // Set session variables
      
      $_SESSION['id'] = $loginname;
      
      $_SESSION['pa'] = $loginpass;
      
      // Redirect to page2.php
      
      header('Location: ../ui.php');
      //backup redirects
      echo "<script>window.open('../ui.html','_self');alert('LOGIN SUCCESSFUL redirecting .....');</script>";
    die();
    }
  }
   echo "<script>window.history.back();alert('LOGIN IN FAILURE check your username/password');</script>";
 

      
    $conn->close();
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
</body>
</html>
