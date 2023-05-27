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

    <form action="borrowprocess.php" method="post" enctype="multipart/form-data">
        STUDENT ID: <input type="text" name="si"><br><br>
        BOOK ID: <input type="text" name="bk"><br><br>
        ISSUE DATE: <input type="date" name="id"><br><br>
        DUE DATE: <input type="date" name="sd"><br><br>

       

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
