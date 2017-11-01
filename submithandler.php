<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'includes/db-config.php';
include 'includes/functions.php';
var_dump($_POST);
$add = $_POST['add'];
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$userlocation = $_POST['userlocation'];
$userphone = $_POST['userphone'];
//
//echo $str = "insert into user_info (name,email,phone,location) values('$username','$useremail',$userphone,'$userlocation')";
$add = mysql_query("insert into user_info (name,email,phone,location) values('$username','$useremail',$userphone,'$userlocation')");

if($add){
    echo "Recored added";
}