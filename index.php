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
  
<!--        <div class="app-form">
            <form name="appform" method="post" action="submithandler.php" enctype="multipart/form-data">
                <input type="text" name="username" placeholder="Name">
                <input type="text" name="useremail" placeholder="Email">
                <input type="text" name="userlocation" placeholder="Location">
                <input type="text" name="userphone" placeholder="Phone">
                <input type="hidden" name="add" placeholder="" class="addrecord">
                <input type="submit" value="submit">
            </form>
        </div>-->
<div class="container">
    <h3 class="">Simple Crud Operation in PHP mysql</h3>
    <div class="row>">
        <a  type='button' class=" btn btn-primary" href="add.php">Add User</a>
</div>
    <div class="row">
<div class="showdata">
    <table class="table">
                <tr>
                    <th>No.</th>
                     <th>Name</th>
                      <th>Email</th>
                      <th>location</th>
                      <th>phone</th>
                      <th>Resume</th>
                      <th>Action</th>
                </tr>
               
                         <?php $data = getRecords($con);
    while ($row = mysqli_fetch_array($data)) {
        echo "<tr>";
    echo " <td>".$row{'id'}."</td>";
     echo " <td>".$row{'name'}."</td>";
     echo " <td>".$row{'email'}."</td>";
     echo " <td>".$row{'location'}."</td>";
     echo " <td>".$row{'phone'}."</td>";
      echo " <td><a href=uploads/".$row{'resume'}.">".$row{'resume'}."</a> </td>";
      echo " <td><a href=submithandler.php?view=".$row{'id'}.">view</a> || <a href=submithandler.php?edit=".$row{'id'}.">Edit</a> || <a href=submithandler.php?delete=".$row{'id'}.">delete</a></td>";
      echo "</tr>";
  
}
            ?>
                    
                </tr>
            </table>
       
        </div>
    </div>
</div>
    </body>
</html>
