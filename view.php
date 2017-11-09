<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include './header.php';
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

                <h3>View User</h3>

                <table class="table table-bordered">
                    <?php
                    while ($row = mysqli_fetch_array($userData)) {
                        ?>
                        <tr><td>Id </td> <td><?php echo $row{'id'} ?></td></tr>
                        <tr><td>Name </td> <td><?php echo $row{'name'} ?></td></tr>
                        <tr><td>Email </td> <td><?php echo $row{'email'} ?></td></tr>
                        <tr><td>Location </td> <td><?php echo $row{'location'} ?></td></tr>
                        <tr><td>Phone </td> <td><?php echo $row{'phone'} ?></td></tr>
                        <tr><td>Resume 

                            </td><td>

                                <?php
                                if ($row['resume'] != '') {
                                    ?>
                                    <a href="uploads/<?php echo $row{'resume'} ?>"><?php echo $row{'resume'} ?></a>
                                    <?php
                                } else {
                                    echo "N/A";
                                };
                                ?>
                            </td></tr>
                        <tr><td><a class='btn btn-primary' href="submithandler.php?edit= <?php echo $row{'id'} ?>">Edit</a> </td> <td><a class="btn btn-primary" href="/crud">close</a></td></tr>



<?php } ?>
                </table>
            </div>
        </div>
    </body></html>