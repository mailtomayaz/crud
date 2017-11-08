<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getRecords($con){
    
    $query= 'select * from user_info';
    $result = mysqli_query($con,$query);
    return $result;
//fetch tha data from the database
//    while ($row = mysql_fetch_array($result)) {
//    echo "ID:".$row{'id'}." Name:".$row{'name'}."
//   ".$row{'locateion'}."<br>";
//}

    
}
//user by id

function getUserById($con,$id){
    
    $query= "select * from user_info where id =$id";
    $result = mysqli_query($con,$query);
    return $result;
    
}
function addUser($con,$arrPost){
$username = $arrPost['username'];
$useremail = $arrPost['useremail'];
$userlocation = $arrPost['userlocation'];
$userphone = $arrPost['userphone'];
$add = mysqli_query($con,"insert into user_info (name,email,phone,location) values('$username','$useremail',$userphone,'$userlocation')");
return $add;

}

function getUpdateUser($con,$arrPost){
    $username = $arrPost['username'];
$useremail = $arrPost['useremail'];
$userlocation = $arrPost['userlocation'];
$userphone = $arrPost['userphone'];
$id = $arrPost['id'];
$update = mysqli_query($con,"update user_info set name='$username',email='$useremail',phone='$userphone',location='$userlocation' where id=$id ");

return $update;
}

function getUserDelete($con,$id){
    $deleted = mysqli_query($con,"delete from user_info where id = $id");
    return $deleted;
    
}