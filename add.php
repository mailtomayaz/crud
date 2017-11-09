<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * Created: Nov 9,2017
 * Author: Muhammad Ayaz
 * Email: mailtomayaz@gmail.com
 */
?>
<html>
<?php include 'header.php'; ?>
    <body>
        <div class="container">
            <div class="app-form" >
                <h3>Add record</h3>
                <div class="error"></div>
                <form name="appform" id="appform" method="post" action="submithandler.php" enctype="multipart/form-data">
                    <table  class="table table-bordered">
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
                                <input class="btn btn-primary" type="submit" value="submit">
                                <a class="btn btn-primary" href="/crud" >Close</a>
                            </td></tr>

                    </table>
                </form>
            </div>
        </div>
    </body>
</html>