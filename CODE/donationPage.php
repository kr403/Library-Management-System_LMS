<?php
session_start();

if (isset($_SESSION['studentID']) && !empty($_SESSION['studentID'])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Student Sign Up</title>
    </head>
    <body>

    <form action="uploadDonateForm.php" method="post" enctype="multipart/form-data">
        Book Name: <input type="text" name="bName"><br><br>
        Cover Image: <input type="file" name="cImage"><br><br>
        Writer Name: <input type="text" name="wN"><br><br>
        Publication: <input type="text" name="bP"><br><br>
        Edition: <input type="text" name="bE"><br><br>
        Genre: <input type="text" name="bG">
        <p>Address: </p>
        <textarea name = "bD" >
         </textarea><br><br>
        Quantity: <input type="number" name="bQ"><br><br>

        <input type="submit" value="UPLOAD">
    </form>
    <br><br>
    <input type="button" value="Home Page" id="hp">
    <script>
        var home = document.getElementById('hp');
        home.addEventListener('click', hpProcess);

        function hpProcess() {
            window.location.assign('studentHomePage.php');
        }
    </script>
    <br><br>
    <input type="button" value="LOGOUT" id="lo">
    <script>
        var log = document.getElementById('lo');
        log.addEventListener('click', loProcess);

        function loProcess() {
            window.location.assign('logoutsession.php');
        }
    </script>
    </body>
    </html>
    <?php
} else {
    ?>
    <script>window.location.assign('studentLoginPage.php')</script>
    <?php
}


?>
