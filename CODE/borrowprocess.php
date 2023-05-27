<?php
session_start();

if (isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])) {
    if (isset($_POST['bk']) && isset($_POST['id']) &&
        isset($_POST['sd']) && isset($_POST['si']) &&

        !empty($_POST['bk']) && !empty($_POST['id']) &&
        !empty($_POST['sd']) && !empty($_POST['si'])) {
        $var1 = $_POST['bk'];
        $var2 = $_POST['id'];
        $var3 = $_POST['sd'];
        $var4 = $_POST['si'];

        try {
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;", "root", "");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "INSERT INTO allocation(studentsid, booksbookId, issueDate, dueDate) VALUES ('$var4','$var1','$var2','$var3')";

            try {

                $dbcon->exec($query);

                ?>
                <script>window.location.assign('LHomePage.php')</script>
                <?php
            } catch (PDOException $ex) {
                ?>
                <script>window.location.assign('LHomePage.php')</script>
                <?php
            }


        } catch (PDOException $ex) {
            ?>
            <script>window.location.assign('LHomePage.php')</script>
            <?php
        }
    } else {
        ?>
        <script>window.location.assign('LHomePage.php')</script>
        <?php
    }
} else {
    ?>
    <script>window.location.assign('Llogin.php')</script>
    <?php
}


?>