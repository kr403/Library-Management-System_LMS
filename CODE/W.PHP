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
                <form action="WPR.php" method="post" enctype="multipart/form-data">
                
                 WRITTER NAME: <input type="text"  name ="aW"><br><br>
                 Id:<input type="int"  name ="aid"><br><br>
               
                    <input type="submit" value="SAVE">
                </form>
                
                

            </body>
        </html>
    <?php
    }
    else{
        ?>
            <script>
                window.location.assign('Llogin.php');
            </script>
        <?php
    }