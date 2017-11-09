<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
<head>
        <title>Simple PHP mysql Crud </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css"/>
         <link rel="stylesheet" href="css/bootstrap.min.css"/>
        
         <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="js/custom.js"></script>
       
    </head>
    <body>
<div class="container">
    <div class='row'>
        
   <div class="app-form">
        <h3>Edit Information</h3>
            <form name="appform" method="post" action="submithandler.php" enctype="multipart/form-data">
                <table class="table table-bordered">
                   
 <?php 
    while ($row = mysqli_fetch_array($userData)) {
        ?>
    <tr><td>Id </td> <td><?php echo $row{'id'} ?></td></tr>
    <tr><td>Name </td> <td><input type="text" name="username" placeholder="Name" value="<?php echo  $row{'name'} ?>"></td></tr>
    <tr><td>Email </td> <td><input type="text" name="useremail" placeholder="Email" value="<?php echo  $row{'email'} ?>" ></td></tr>
    <tr><td>Location </td> <td><input type="text" name="userlocation" placeholder="Location" value="<?php echo $row{'location'} ?>"></td></tr>
    <tr><td>Phone </td> <td>  <input type="text" name="userphone" placeholder="Phone" value="<?php echo $row{'phone'} ?>"></td></tr>
    <tr><td>Resume </td> <td>  <input type="file" name="userFileUpload" placeholder="userFileUpload" value=""/><?php echo $row{'resume'} ?></td></tr>
    
    <tr><td> <input class="btn btn-primary" type="submit" value="Update"> </td> <td><a class="btn btn-primary" href="/crud">close</a></td></tr>
     <input type="hidden" name="update" placeholder="" class="addrecord">
     <input type="hidden" name="id" value="<?php echo $row{'id'} ?>" placeholder="" class="addrecord">

  
<?php }  ?>
</table>
                
                
                
              
               
               
            </form>
        </div>
    </div>
</div>
    </body>
</html>