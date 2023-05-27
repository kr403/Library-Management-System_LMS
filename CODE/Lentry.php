<?php
session_start();

if (isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
    </head>
    <body>

    <form action="Lbooksprocess.php" method="post" enctype="multipart/form-data">
        Book Name: <input type="text" name="bName"><br><br>
        Cover Image: <input type="file" name="cImage"><br><br>
        Writer Name: <input type="text" name="wN"><br><br>
        Publication: <input type="text" name="bP"><br><br>
        Edition: <input type="text" name="bE"><br><br>
        Genre: <input type="text" name="bG"><br><br>
        Description: <input type="text" name="bD"><br><br>
        Quantity: <input type="number" name="bQ"><br><br>


        <input type="submit" value="SAVE">
    </form>
    </body>
    </html>
    <?php
} else {
    ?>
    <script>window.location.assign('Llogin.php')</script>
    <?php
}


?>
