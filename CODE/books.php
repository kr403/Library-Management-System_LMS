<?php
session_start();

if (isset($_SESSION['studentID']) && !empty($_SESSION['studentID'])) {
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

    <input type="search" id="searchBox">
    <input type="button" value="Search" id="searchbtn"><br><br>
    <script>
        var srcbtn =document.getElementById('searchbtn');
        srcbtn.addEventListener('click',searchProcess);
        function searchProcess(){
            var searchValue=document.getElementById('searchBox').value;
            window.location.assign("searchPage.php?param1="+searchValue);
        }

    </script>

    <table>

        <thead>

        <tr>

            <th>Book Id</th>
            <th>Book Name</th>
            <th>Image</th>
            <th>Writer Name</th>
            <th>Publication</th>
            <th>Edition</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Bookmark</th>
            <th>Request</th>

        </tr>

        </thead>
        <tbody>

        <?php
        try {
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;", "root", "");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "Select bookId, bookName, image, writterName, publication, edition, genre, description, quantity From books";
            try {
                $return = $dbcon->query($query);
                $donationTable = $return->fetchAll();
                foreach ($donationTable as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row['bookId'] ?></td>
                        <td><?php echo $row['bookName'] ?></td>
                        <td><img width="240" height="135" alt="Cover Page" src="<?php echo $row['image'] ?>"></td>
                        <td><?php echo $row['writterName'] ?></td>
                        <td><?php echo $row['publication'] ?></td>
                        <td><?php echo $row['edition'] ?></td>
                        <td><?php echo $row['genre'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <?php echo '<td><a href="bookmark.php ? bookId='.$row['bookId'].'">Add</a></td>' ?>
                        
                        <?php
                        if($row['quantity']==0){?>
                            <?php echo '<td><a href="request.php ? bookId='.$row['bookId'].'">Add</a></td>' ?>
                                <?php
                        } else{
                            ?>
                            <td>Not applicable</td>
                            <?php
                        }
                        ?>


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











