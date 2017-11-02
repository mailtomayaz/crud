<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'includes/db-config.php';
include 'includes/functions.php';
include 'includes/requesthandler.php';

//$add = $_POST['add'];

//
//echo $str = "insert into user_info (name,email,phone,location) values('$username','$useremail',$userphone,'$userlocation')";
//
if (isset($_POST['add'])){
 $username = $_POST['username'];
$useremail = $_POST['useremail'];
$userlocation = $_POST['userlocation'];
$userphone = $_POST['userphone'];
$add = mysql_query("insert into user_info (name,email,phone,location) values('$username','$useremail',$userphone,'$userlocation')");

if($add){
    echo "Recored added";
    echo "<a href='/crud'> Go back </\a>";
}
}
//update record

if (isset($_POST['update'])){
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$userlocation = $_POST['userlocation'];
$userphone = $_POST['userphone'];
$id = $_POST['id'];
//echo "update user_info set name='$username',email='$useremail',phone='$userphone',location='$userlocation' where id=$id ";
$update = mysql_query("update user_info set name='$username',email='$useremail',phone='$userphone',location='$userlocation' where id=$id ");

if($update){
    echo "Record Updated";
    echo "<a href='/crud'> Go back </\a>";
}
}

//view records
if(isset($_GET['view'])){
    // show record with ID
    $id= $_GET['view'];
    $userData = getUserById($id);
    include 'view.php';
}
//edit records
if(isset($_GET['edit'])){
    // edit record with ID
     $id= $_GET['edit'];
   $userData = getUserById($id);
    include 'edit.php';
}
  //delete records
if(isset($_GET['delete'])){
    // delete record with ID
    $id= $_GET['delete'];
    $deleted = mysql_query("delete from user_info where id = $id");
    if($deleted){
    echo "Record Deleted";
    echo "<a href='/crud'> Go back </\a>";
}
    
}
