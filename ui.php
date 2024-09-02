<?php
session_start(); // Start the session (needed to access session variables)

// Access session data

$uid = $_SESSION['id'];

$upass = $_SESSION['pa']; 
//connect to the data base
$host="sql12.freesqldatabase.com";
$uname="";
$pass="";
$dbname="";
// if data is submitted it is added to the database

$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error)
die("no connecction"); 
$query1="SELECT * FROM register WHERE usern='$uid';";
    $res=$conn->query($query1);
    $row=$res->fetch_assoc();  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title> SWACS Hospital </title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/login.css" type="text/css" rel="stylesheet">
    <link href="css/ui.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>
<body>
   
        <div class="top container-fluid">
        <div>
        Contact Us +91 96366 20000 / 01 | SWACS@hospital.com
        </div>
        </div>
        
        <div class="logo container-fluid">
         
         <div class="main-logo" style="font-size:35px;font-family:forte;color:#428bca">   SWACS   <font color="#000"> Hospital</font>  </div>
         <div id="links"> 
         
         <a href="about.html">ABOUT US</a>
         <a href="service.html">SERVICE</a>
         <a href="contact.html">CONTACT US</a>
         <a href="login.html">PATIENT&nbsp REGISTRATION</a>  
         
         </div>
        </div>

        <div class="heading">registration number :<?php echo $row["patient_no"] ?> </div> 

    <section class="main_c">
       <div class="outer_c">
       <div class="sub_c">
           <div class="covered" class="p_name"><?php echo $row["p_fname"];?></div>
           <div class="data"><?php echo $row["p_fname"];echo " "; echo $row["p_lname"];?></div>
       </div>
       <div class="sub_c">
           <div class="covered" class="p_gender">gender</div>
           <div class="data"><?php echo $row["p_gender"];?></div>
       </div>
       
       <div class="sub_c">
           <div class="covered" class="p_dob">date of birth</div>
           <div class="data"><?php echo $row["p_dob"];?></sub></div>
       </div>
       <div class="sub_c">
           <div class="covered" class="p_lang">blood type</div>
           <div class="data"><?php echo $row["p_bg"];?></div>
       </div>
      
       <div class="sub_c">
           <div class="covered" class="p_lang">ALLERGIES</div>
           <div class="data"><?php echo $row["p_allergies"];?></div>
       </div>
     
       <div class="sub_c" class="p_hob">
           <div class="covered">contact</div>
           <div class="data"><?php echo $row["p_con"];?><br><?php echo $row["p_ec"];?></div>
       </div>
       <div class="sub_c" class="p_lang">
           <div class="covered">Insurance Number
        </div>
           <div class="data"><?php echo $row["p_insurance"];?>
        </div>
       </div>
       <div class="sub_c"class="p_add">
           <div class="covered" >address</div>
           <div class="data"><?php for($i=0;$i<20;$i++)echo $row["p_addr"][$i]; echo "<br>";
                                 for($i=20;$i<40;$i++)echo $row["p_addr"][$i];?></div>
       </div>
       <div class="sub_c" class="p_lang">
        <div class="covered">symptoms</div>
        <div class="data"><?php echo $row["p_symp"];?></div>
        

       </div>

    </section>

    <div class="nav_down container-fluid">
        <div>
        &copy; SWACS Hospital, site designed & developed by TYIT version 21.07.24
        </div>
        </div>
        </div>
        </body>
        </html>
    
</body>
</html>

