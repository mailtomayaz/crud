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
    <div class="error"></div>
    <form name="appform" id="appform" method="post" action="submithandler.php" enctype="multipart/form-data">
                <table >
                    <tr><td>
                            <input type="text" id="username" name="username" placeholder="Name">
                 </td></tr>
                      <tr><td>
                              <input type="text" id="useremail" name="useremail" placeholder="Email">
                 </td></tr>
                      <tr><td>
                              <input type="text" id="userlocation" name="userlocation" placeholder="Location">
                 </td></tr>
                      <tr><td>
                              <input type="text" id="userphone" name="userphone" placeholder="Phone">
                 </td></tr>
                      <tr><td>
                              <input type="file" id="userFileUpload" name="userFileUpload" placeholder="Upload File">
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