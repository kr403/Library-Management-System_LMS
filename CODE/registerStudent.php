<?php

if (isset($_POST['sId']) && isset($_POST['sName']) &&
    isset($_POST['sNumber']) && isset($_POST['sEmail']) &&
    isset($_POST['sAddress']) && isset($_POST['sPass']) &&
    isset($_POST['sCPass']) && !empty($_POST['sId']) &&
    !empty($_POST['sName']) && !empty($_POST['sNumber']) &&
    !empty($_POST['sEmail']) && !empty($_POST['sAddress']) &&
    !empty($_POST['sPass']) && !empty($_POST['sCPass'])) {

    $var1 = $_POST['sId'];
    $var2 = $_POST['sName'];
    $var3 = $_POST['sNumber'];
    $var4 = $_POST['sEmail'];
    $var5 = $_POST['sAddress'];
    $var6 = $_POST['sPass'];
    $var7 = $_POST['sCPass'];

    if($var6==$var7){
        try {
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;", "root", "");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "INSERT INTO students VALUES('$var1','$var2','$var3','$var4','$var5','$var6','$var7')";

            try {
                $dbcon->exec($query);
                ?>
                <script>window.location.assign('studentLoginPage.php')</script>
                <?php
            } catch (PDOException $ex) {
                ?>
                <script>window.location.assign('student.php')</script>
                <?php
            }

        } catch (PDOException $ex) {
            ?>
            <script>window.location.assign('student.php')</script>
            <?php
        }
    }else{
        ?> Password doesn't match
        <br><br>
        <input type="button" value="BACK" id="hp">
        <script>
            var home = document.getElementById('hp');
            home.addEventListener('click', hpProcess);

            function hpProcess() {
                window.location.assign('student.php');
            }
        </script>
        <br><br>
        <?php
    }


} else {
    ?>
    <script>window.location.assign('student.php')</script>

    <?php
}

?>