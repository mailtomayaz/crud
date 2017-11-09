<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'includes/db-config.php';
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
function addUser($con,$arrPost,$isFile=''){
$username = $arrPost['username'];
$useremail = $arrPost['useremail'];
$userlocation = $arrPost['userlocation'];
$userphone = $arrPost['userphone'];

   // echo "add file name";
    $add = mysqli_query($con,"insert into user_info (name,email,phone,location,resume) values('$username','$useremail',$userphone,'$userlocation','$isFile')");

return $add;

}

function getUpdateUser($con,$arrPost,$isFile=''){
$username = $arrPost['username'];
$useremail = $arrPost['useremail'];
$userlocation = $arrPost['userlocation'];
$userphone = $arrPost['userphone'];
$id = $arrPost['id'];
if($isFile !=''){
$update = mysqli_query($con,"update user_info set name='$username',email='$useremail',phone='$userphone',location='$userlocation',resume='$isFile' where id=$id ");    
}else{
$update = mysqli_query($con,"update user_info set name='$username',email='$useremail',phone='$userphone',location='$userlocation' where id=$id ");
}
return $update;
}

function getUserDelete($con,$id){
    $deleted = mysqli_query($con,"delete from user_info where id = $id");
    return $deleted;
    
}

function getFileUpload($con,$arrFile){
    
$target_dir = "/var/www/html/crud/uploads/";
 $target_file = $target_dir . basename($arrFile["userFileUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image/
if(isset($_POST["submit"])) {
    $check = getimagesize($arrFile["userFileUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($arrFile["userFileUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "doc" && $imageFileType != "docs" && $imageFileType != "odt" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($arrFile["userFileUpload"]["tmp_name"], $target_file)) {
      //  echo "The file ". basename( $arrFile["userFileUpload"]["name"]). " has been uploaded.";
        return $arrFile["userFileUpload"]["name"];
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

    
}