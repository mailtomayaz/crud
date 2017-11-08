<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<table>
 <?php 
    while ($row = mysqli_fetch_array($userData)) {
        ?>
    <tr><td>Id </td> <td><?php echo $row{'id'} ?></td></tr>
    <tr><td>Name </td> <td><?php echo  $row{'name'} ?></td></tr>
    <tr><td>Email </td> <td><?php echo  $row{'email'} ?></td></tr>
    <tr><td>Location </td> <td><?php echo $row{'location'} ?></td></tr>
    <tr><td>Phone </td> <td><?php echo $row{'phone'} ?></td></tr>
    <tr><td>Name </td> <td><?php echo $row{'name'} ?></td></tr>
    <tr><td><a href="submithandler.php?edit= <?php echo $row{'id'} ?>">Edit</a> </td> <td><a href="/crud">close</a></td></tr>


  
<?php }  ?>
</table>