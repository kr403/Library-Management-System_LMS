<?php

if (isset($_POST['LId']) && isset($_POST['LPass']) &&
    !empty($_POST['LId']) && !empty($_POST['LPass'])) {

    $var1 = $_POST['LId'];
    $var2 = $_POST['LPass'];

    try {
        $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;", "root", "");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT librarianId FROM librarians WHERE librarianId='$var1' and password='$var2'";

        try {
            $return = $dbcon->query($query);
            if ($return->rowCount() == 1) {
                session_start();
                $_SESSION['adminId'] = $var1;
                ?>
                <script>window.location.assign('LHomePage.php')</script>
                <?php
            } else {
                ?>
                <script>window.location.assign('Llogin.php')</script>
                <?php
            }
            ?>
            <script>window.location.assign('Llogin.php')</script>
            <?php
        } catch (PDOException $ex) {
            ?>
            <script>window.location.assign('Llogin.php')</script>
            <?php
        }

    } catch (PDOException $ex) {
        ?>
        <script>window.location.assign('Llogin.php')</script>
        <?php
    }
} else {
    ?>
    <script>window.location.assign('Llogin.php')</script>

    <?php
}

?>