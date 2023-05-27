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

            if (isset($_SESSION['studentID']) && !empty($_SESSION['studentID'])) {
            ?>
            STUDENT HOME PAGE
            <br><br>
            <input class="btn btn-dark" type="button" value="NOTIFICATIONS" id="nf">
            <script>
                var not = document.getElementById('nf');
                not.addEventListener('click', nfProcess);

                function nfProcess() {
                    window.location.assign('notification.php');
                }
            </script>
            <br><br>
            <input class="btn btn-dark" type="button" value="BOOKS" id="bk">
            <script>
                var book = document.getElementById('bk');
                book.addEventListener('click', bkProcess);

                function bkProcess() {
                    window.location.assign('books.php');
                }
            </script>
            <br><br>
            <input class="btn btn-dark" type="button" value="HISTORY" id="h">
            <script>
                var his = document.getElementById('h');
                his.addEventListener('click', hiProcess);

                function hiProcess() {
                    window.location.assign('history.php');
                }
            </script>
            <br><br>
            <input class="btn btn-dark" type="button" value="BOOKMARK LIST" id="bM">
            <script>
                var bookM = document.getElementById('bM');
                bookM.addEventListener('click', bMProcess);

                function bMProcess() {
                    window.location.assign('bookmarkList.php');
                }
            </script>
            <br><br>
            <input class="btn btn-dark" type="button" value="REQUEST LIST" id="rl">
            <script>
                var reqL = document.getElementById('rl');
                reqL.addEventListener('click', rlProcess);

                function rlProcess() {
                    window.location.assign('requestList.php');
                }
            </script>
            <br><br>
            <input class="btn btn-dark" type="button" value="DONATE HISTORY" id="dh">
            <script>
                var donateHistory = document.getElementById('dh');
                donateHistory.addEventListener('click', dhProcess);

                function dhProcess() {
                    window.location.assign('donateHistory.php');
                }
            </script>
            <br><br>
            <input class="btn btn-dark" type="button" value="DONATE BOOKS" id="db">
            <script>
                var donate = document.getElementById('db');
                donate.addEventListener('click', dbProcess);

                function dbProcess() {
                    window.location.assign('donationPage.php');
                }
            </script>
            <br><br>
            <input class="btn btn-dark" type="button" value="LOGOUT" id="lo">
            <script>
                var log = document.getElementById('lo');
                log.addEventListener('click', loProcess);

                function loProcess() {
                    window.location.assign('logoutsession.php');
                }
            </script>


            <?php
            } else {
            ?>
            <script>window.location.assign('studentLoginPage.php')</script>
            <?php
            }
            ?>

        </div>


    </body>
</html>


