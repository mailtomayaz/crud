<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    
        <?php include 'header.php';?>
    <body>

<div class="app-form" >
            <form name="appform" method="post" action="submithandler.php" enctype="multipart/form-data">
                <table >
                    <tr><td>
                <input type="text" name="username" placeholder="Name">
                 </td></tr>
                      <tr><td>
                <input type="text" name="useremail" placeholder="Email">
                 </td></tr>
                      <tr><td>
                <input type="text" name="userlocation" placeholder="Location">
                 </td></tr>
                      <tr><td>
                <input type="text" name="userphone" placeholder="Phone">
                 </td></tr>
                      <tr><td>
                <input type="hidden" name="add" placeholder="" class="addrecord">
                 </td></tr>
                      <tr><td>
                <input type="submit" value="submit">
                 </td><td>
                     <a href="/crud" >Close</a>
                 </td></tr>
                    
                </table>
            </form>
        </div>
    </body>
</html>