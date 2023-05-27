<?php
session_start();

if(isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])){
    ?>

    <!DOCTYPE html> <!-- html comment: html version 5 -->
    <html>
    <head>
        <!--meta information-->
        <meta charset="utf-8">
        <title>Sign Up Page</title>
    </head>

    <body>
    <form action="updatebookprocess.php" method="post" enctype="multipart/form-data">

        BOOK NAME: <input type="text"  name ="aB"><br><br>
        Id:<input type="int"  name ="aid"><br><br>

        <input type="submit" value="SAVE">
    </form>


    </body>
    </html>
    <?php
}
else{
    ?>
    <script>
        window.location.assign('login.php');
    </script>
    <?php
}