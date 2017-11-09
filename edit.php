<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

   <div class="app-form">
            <form name="appform" method="post" action="submithandler.php" enctype="multipart/form-data">
                <table>
 <?php 
    while ($row = mysqli_fetch_array($userData)) {
        ?>
    <tr><td>Id </td> <td><?php echo $row{'id'} ?></td></tr>
    <tr><td>Name </td> <td><input type="text" name="username" placeholder="Name" value="<?php echo  $row{'name'} ?>"></td></tr>
    <tr><td>Email </td> <td><input type="text" name="useremail" placeholder="Email" value="<?php echo  $row{'email'} ?>" ></td></tr>
    <tr><td>Location </td> <td><input type="text" name="userlocation" placeholder="Location" value="<?php echo $row{'location'} ?>"></td></tr>
    <tr><td>Phone </td> <td>  <input type="text" name="userphone" placeholder="Phone" value="<?php echo $row{'phone'} ?>"></td></tr>
    <tr><td>Resume </td> <td>  <input type="file" name="userFileUpload" placeholder="userFileUpload" value=""/><?php echo $row{'resume'} ?></td></tr>
    
    <tr><td> <input type="submit" value="Update"> </td> <td><a href="/crud">close</a></td></tr>
     <input type="hidden" name="update" placeholder="" class="addrecord">
     <input type="hidden" name="id" value="<?php echo $row{'id'} ?>" placeholder="" class="addrecord">

  
<?php }  ?>
</table>
                
                
                
              
               
               
            </form>
        </div>
