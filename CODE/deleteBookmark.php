<?php
session_start();

if (isset($_SESSION['studentID']) && !empty($_SESSION['studentID'])) {
    $bookId=$_GET['bookId'];
    try {
        $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;", "root", "");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "DELETE FROM bookmark WHERE booksbookId=$bookId";
        try {
            $dbcon->exec($query);
            ?>
            <script>window.location.assign('bookmarkList.php')</script>
            <?php
        } catch (PDOException $ex) {
            ?>
            <script>window.location.assign('studentHomePage.php')</script>
            <?php
        }

    } catch (PDOException $ex) {
        ?>
        <script>window.location.assign('studentHomePage.php')</script>
        <?php
    }
} else {
    ?>
    <script>window.location.assign('studentLoginPage.php')</script>
    <?php
}
?>