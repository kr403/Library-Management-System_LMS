<?php
session_start();

if (isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])) {
    if (isset($_POST['bName']) && isset($_POST['wN']) &&
        isset($_POST['bP']) && isset($_POST['bE']) &&
        isset($_POST['bG']) && isset($_POST['bD']) &&
        isset($_POST['bQ']) && !empty($_POST['bName']) &&
        !empty($_POST['wN']) && !empty($_POST['bP']) &&
        !empty($_POST['bE']) && !empty($_POST['bG']) &&
        !empty($_POST['bD']) && !empty($_POST['bQ'])) {
        $var1 = $_POST['bName'];
        $var2 = $_POST['wN'];
        $var3 = $_POST['bP'];
        $var4 = $_POST['bE'];
        $var5 = $_POST['bG'];
        $var6 = $_POST['bD'];
        $var7 = $_POST['bQ'];
        $var8 = $_FILES['cImage'];
        move_uploaded_file($var8['tmp_name'], "imageDb/$var1.jpg");
        try {
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;", "root", "");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "INSERT INTO books(bookName, image, writterName, publication, edition, genre, description, quantity)
            VALUES('$var1','imageDb/$var1.jpg','$var2','$var3','$var4','$var5','$var6', $var7)";

            try {

                $dbcon->exec($query);
                ?>
                <script>window.location.assign('Lbooks.php')</script>
                <?php
            }
            catch (PDOException $ex) {
                ?>
                <script>window.location.assign('Lentry.php')</script>
                <?php
            }


        }
        catch (PDOException $ex) {
            ?>
            <script>window.location.assign('Lbooks.php')</script>
            <?php
        }
    } else {
        ?>
        <script>window.location.assign('Lbooks.php')</script>
        <?php
    }
} else {
    ?>
    <script>window.location.assign('Llogin.php')</script>
    <?php
}


?>