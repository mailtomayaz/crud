<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dbname='crud';
$dbuser='root';
$dbpassword='root';
//connection
$con= mysql_pconnect($host,$dbuser,$dbpassword) or die(' Could not connect to the server') ;
//select database
mysql_select_db($dbname,$con);

