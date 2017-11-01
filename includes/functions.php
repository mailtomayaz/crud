<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getRecords(){
    
    $query= 'select * from user_info';
    $result = mysql_query($query);
    return $result;
//fetch tha data from the database
//    while ($row = mysql_fetch_array($result)) {
//    echo "ID:".$row{'id'}." Name:".$row{'name'}."
//   ".$row{'locateion'}."<br>";
//}

    
}