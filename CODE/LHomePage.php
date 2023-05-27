<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="includes/style.css">


    </head>
    <body>
        <div class="container">
            <?php
            session_start();

            if(isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])){
            ?>
            ADMIN HOME <br>
            <br>
            <input class="btn btn-dark" type="button" value="BOOKS" id="bkebtnb">

            <script>
                var e1b = document.getElementById('bkebtnb');
                e1b.addEventListener('click', processlogout);

                function processlogout() {
                    window.location.assign('Lbooks.php');
                }
            </script>



            <br>
            <br>
            <input class="btn btn-dark" type="button" value="BOOK's ALOCATION" id="bkebtnba">

            <script>
                var e1ba = document.getElementById('bkebtnba');
                e1ba.addEventListener('click', processlogout);

                function processlogout() {
                    window.location.assign('bookalocation.php');
                }
            </script>



            <br>
            <br>
            <input class="btn btn-dark" type="button" value="DONATION REVIEW" id="bkebtnbd">

            <script>
                var e1bd = document.getElementById('bkebtnbd');
                e1bd.addEventListener('click', processlogout);

                function processlogout() {
                    window.location.assign('Ldonation.php');
                }
            </script>


            <br>
            <br>
            <input class="btn btn-dark" type="button" value="REQUEST REVIEW" id="bkebtnbr">

            <script>
                var e1br = document.getElementById('bkebtnbr');
                e1br.addEventListener('click', processlogout);

                function processlogout() {
                    window.location.assign('Lrequest.php');
                }
            </script>
            <br>
            <br>
            <input class="btn btn-dark" type="button" value="Logout" id="logoutbtn">

            <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);

                function processlogout(){
                    window.location.assign('Llogout.php');
                }

            </script>

            <?php
            }
            else{
            ?>
            <script>
                window.location.assign('Llogin.php');
            </script>
            <?php
            }
            ?>

        </div>


    </body>
</html>
