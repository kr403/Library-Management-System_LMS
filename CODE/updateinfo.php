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
    <br>
    <br>
    <input type="button" value="UPDATE BOOK NAME" id="bkebtn">

    <script>
        var e = document.getElementById('bkebtn');
        e.addEventListener('click', processlogout);

        function processlogout() {
            window.location.assign('Lupdatebook.php');
        }
    </script>

    <br>
    <br>
    <input type="button" value="UPDATE WRITTER NAME" id="bkebtnW">

    <script>
        var eW = document.getElementById('bkebtnW');
        eW.addEventListener('click', processlogout);

        function processlogout() {
            window.location.assign('W.php');
        }
    </script>
    <br>
    <br>
    <input type="button" value="UPDATE PUBLICATION" id="bkebtnP">

    <script>
        var eP = document.getElementById('bkebtnP');
        eP.addEventListener('click', processlogout);

        function processlogout() {
            window.location.assign('P.php');
        }
    </script>
    <br>
    <br>
    <input type="button" value="UPDATE EDITION" id="bkebtnE">

    <script>
        var eE = document.getElementById('bkebtnE');
        eE.addEventListener('click', processlogout);

        function processlogout() {
            window.location.assign('E.php');
        }
    </script>
    <br>
    <br>
    <input type="button" value="UPDATE GENER" id="bkebtnG">

    <script>
        var eG = document.getElementById('bkebtnG');
        eG.addEventListener('click', processlogout);

        function processlogout() {
            window.location.assign('G.php');
        }
    </script>
    <br>
    <br>
    <input type="button" value="UPDATE DISCRIPTION" id="bkebtnD">

    <script>
        var eD = document.getElementById('bkebtnD');
        eD.addEventListener('click', processlogout);

        function processlogout() {
            window.location.assign('DS.php');
        }
    </script>
    <br>

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