<?php
session_start();

if (isset($_SESSION['studentID']) && !empty($_SESSION['studentID'])) {
    $var9 = $_SESSION['studentID'];
    ?>
    <style>
        table, th, td {
            border: 1px solid red;
            text-align: center;
        }
        tr:hover{
            background-color: chartreuse;
        }
    </style>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Student Sign Up</title>
    </head>
    <body>

    <table>

        <thead>

        <tr>

            <th>Book's ID</th>
            <th>Issue Date</th>
            <th>Due Date</th>
            <th>Return Date</th>
            <th>Fine</th>
        </tr>

        </thead>
        <tbody>

        <?php
        try {
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;", "root", "");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "Select booksbookId, issueDate, dueDate, returnDate, fine From allocation where studentsid = $var9";
            try {
                $return = $dbcon->query($query);
                $allocationTable = $return->fetchAll();
                foreach ($allocationTable as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row['booksbookId'] ?></td>
                        <td><?php echo $row['issueDate'] ?></td>
                        <td><?php echo $row['dueDate'] ?></td>
                        <td><?php echo $row['returnDate'] ?></td>
                        <td><?php echo $row['fine'] ?></td>
                    </tr>
                    <?php
                }
            } catch (PDOException $ex) {
                ?>
                <tr>
                    <td colspan="10">DATA READ ERROR...</td>
                </tr>
                <?php
            }
        } catch (PDOException $ex) {
            ?>
            <tr>
                <td colspan="10">DATA READ ERROR...</td>
            </tr>
            <?php
        }

        ?>

        </tbody>

    </table>
    <br><br>
    <input type="button" value="BACK" id="hp">
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











