<?php

if (isset($_POST['sId']) && isset($_POST['sPass']) &&
    !empty($_POST['sId']) && !empty($_POST['sPass'])) {

    $var1 = $_POST['sId'];
    $var2 = $_POST['sPass'];

    try {
        $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;", "root", "");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT studentId FROM students WHERE studentId='$var1' and password='$var2'";

        try {
            $return = $dbcon->query($query);
            if ($return->rowCount() == 1) {
                session_start();
                $_SESSION['studentID'] = $var1;
                ?>
                <script>window.location.assign('studentHomePage.php')</script>
                <?php
            } else {
                ?>
                <script>window.location.assign('studentLoginPage.php')</script>
                <?php
            }
            ?>
            <script>window.location.assign('studentLoginPage.php')</script>
            <?php
        } catch (PDOException $ex) {
            ?>
            <script>window.location.assign('studentLoginPage.php')</script>
            <?php
        }

    } catch (PDOException $ex) {
        ?>
        <script>window.location.assign('studentLoginPage.php')</script>
        <?php
    }
} else {
    ?>
    <script>window.location.assign('studentLoginPage.php')</script>

    <?php
}

?>