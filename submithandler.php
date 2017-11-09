<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * Created: Nov 9,2017
 * Author: Muhammad Ayaz
 * Email: mailtomayaz@gmail.com
 */

include 'includes/functions.php';

//$add = $_POST['add'];

//
//echo $str = "insert into user_info (name,email,phone,location) values('$username','$useremail',$userphone,'$userlocation')";
//add user information into database
if (isset($_POST['add'])){
    // save file attachment if exist
    $add = '';
    $ifFile='';
    if(isset($_FILES)){
        $ifFile = getFileUpload($con,$_FILES);
    
    }
   $add = addUser($con,$_POST,$ifFile);
if($add){
    echo "Recored added";
    echo "<a href='/crud'> Go back </\a>";
}else {
    echo "There is problem saving Record";
    echo "<a href='/crud'> Go back </\a>";
}
}
//update record

if (isset($_POST['update'])){

//echo "update user_info set name='$username',email='$useremail',phone='$userphone',location='$userlocation' where id=$id ";
  
    //print_r($_FILES);
     // die('stop');
    if($_FILES['userFileUpload']['size']!= 0 ){
      
        $ifFile = getFileUpload($con,$_FILES);
       if($ifFile){
           //echo "add file name";
               $update = getUpdateUser($con,$_POST,$ifFile);
       }  
    }else{
    
        $update = getUpdateUser($con,$_POST);
    }
    
    //$update = getUpdateUser($con,$_POST);

if($update){
    echo "Record Updated";
    echo "<a href='/crud'> Go back </\a>";
}
}

//view records
if(isset($_GET['view'])){
    // show record with ID
    $id= $_GET['view'];
    $userData = getUserById($con,$id);
    include 'view.php';
}
//edit records
if(isset($_GET['edit'])){
    // edit record with ID
   $id= $_GET['edit'];
   $userData = getUserById($con,$id);
   include 'edit.php';
}
  //delete records
if(isset($_GET['delete'])){
    // delete record with ID
    $id= $_GET['delete'];
    $deleted = getUserDelete($con,$id);
    
    if($deleted){
    echo "Record Deleted";
    echo "<a href='/crud'> Go back </\a>";
}
    
}