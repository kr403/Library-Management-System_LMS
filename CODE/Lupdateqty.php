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
    <form action="Lqty.php" method="post" enctype="multipart/form-data">

        quantity: <input type="number"  name ="aqty"><br><br>
        Id:<input type="int"  name ="aid"><br><br>

        <input type="submit" value="UPDATE">
    </form>



    </body>
    </html>
    <?php
}
else{
    ?>
    <script>
        window.location.assign('Llogin.php');
    </script>
    <?php
}