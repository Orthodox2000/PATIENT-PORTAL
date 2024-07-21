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
    $uname="sql12718118";
    $pass="SDqylYlSMK";
    $dbname="sql12718118";
    // if data is submitted it is added to the database
    $conn=new mysqli($host,$uname,$pass,$dbname);
    if($conn->connect_error)
    die("no connecction"); 
 
    $data=array($_POST['p_fname'],$_POST['p_lname'],$_POST['p_dob'],$_POST['p_gen'],$_POST['p_bg'],$_POST['p_allergies'],$_POST['p_addr'],$_POST['p_insurance'],$_POST['p_con'],$_POST['p_ec'],$_POST['p_symp'],$_POST['h1'],);
 
 
    if($data[0]==NULL)
    $data[0]="undefined user";
    $insert_query="INSERT INTO register(
    patient_no,
    p_fname,
    p_lname,
    p_dob,
    p_gender,
    p_bg,
    p_allergies,
    p_addr,
    p_insurance,
    p_con,
    p_ec,
    p_symp,
    h1
  )
VALUES('','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]');";

if($conn->query($insert_query)===TRUE)
echo "<div class=response onclick='gb();'> information registered successfully!<br>click to return</div>";
else
echo "<div class=response onclick='gb();'>failure to register data! <br>click to return to homepage</div>"; 




    $conn->close();


?>
