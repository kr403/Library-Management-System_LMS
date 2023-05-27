<?php

if (isset($_POST['LId']) && isset($_POST['LName']) &&
    isset($_POST['LNumber']) && isset($_POST['LEmail']) &&
    isset($_POST['LAddress']) && isset($_POST['LPass']) &&
    isset($_POST['LCPass']) && !empty($_POST['LId']) &&
    !empty($_POST['LName']) && !empty($_POST['LNumber']) &&
    !empty($_POST['LEmail']) && !empty($_POST['LAddress']) &&
    !empty($_POST['LPass']) && !empty($_POST['LCPass'])) {

    $var1 = $_POST['LId'];
    $var2 = $_POST['LName'];
    $var3 = $_POST['LNumber'];
    $var4 = $_POST['LEmail'];
    $var5 = $_POST['LAddress'];
    $var6 = $_POST['LPass'];
    $var7 = $_POST['LCPass'];

    if($var6==$var7){
        try {
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;", "root", "");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "INSERT INTO librarians(librarianId, name, mobile, mail, address, password, againPassword) VALUES('$var1','$var2','$var3','$var4','$var5','$var6','$var7')";

            try {
                $dbcon->exec($query);
                ?>
                <script>window.location.assign('Llogin.php')</script>
                <?php
            } catch (PDOException $ex) {
                ?>
                <script>window.location.assign('Lsignup.php')</script>
                <?php
            }

        } catch (PDOException $ex) {
            ?>
            <script>window.location.assign('Lsignup.php')</script>
            <?php
        }
    }else{
        ?> Password doesn't match
        <br><br>
        <input type="button" value="BACK" id="Lp">
        <script>
            var Lhome = document.getElementById('Lp');
            Lhome.addEventListener('click', LpProcess);

            function LpProcess() {
                window.location.assign('Lsignup.php');
            }
        </script>
        <br><br>
        <?php
    }


} else {
    ?>
    <script>window.location.assign('Lsignup.php')</script>

    <?php
}

?>