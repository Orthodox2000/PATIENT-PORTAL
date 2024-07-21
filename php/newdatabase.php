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
    
       
        /*$query1= "CREATE TABLE patient(fn varchar(20),ln varchar(20),email varchar(50),mobile varchar(15),appointment date,detail varchar(200));";
        if($conn->query($querys)===true)
        echo "success";*/
        
        /*$query2="CREATE TABLE `register` (
	`patient_no` INT(10) NOT NULL AUTO_INCREMENT,
	`p_fname` VARCHAR(20) NOT NULL DEFAULT '',
	`p_lname` VARCHAR(20) DEFAULT '',
	`p_dob` DATE DEFAULT NULL,
	`p_gender` VARCHAR(10) DEFAULT NULL,
	`p_bg` VARCHAR(5) DEFAULT NULL,
	`p_allergies` VARCHAR(50) DEFAULT '',
	`p_addr` VARCHAR(100) DEFAULT '',
	`p_insurance` VARCHAR(50) DEFAULT NULL,
    `p_con` VARCHAR(15) DEFAULT '',
    `p_ec` VARCHAR(15) DEFAULT '',
    `p_symp` TEXT(200) DEFAULT '',
    `h1` INT(3) DEFAULT NULL,
	PRIMARY KEY (`patient_no`)
);";
*/

/*$query3="CREATE TABLE `user`(`no` INT(10) NOT NULL AUTO_INCREMENT,
    `uname` varchar(20) not null,
    `upass` varchar(20) not null DEFAULT '',
    PRIMARY KEY (`uname`));";
    */

if($conn->query($query2)===true)
echo "success";

        $conn->close();
       
?>
