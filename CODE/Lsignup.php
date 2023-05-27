<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Sign Up</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
        <div class="container">
            <form action="Lregisteradmin.php" method="post">
                ID: <input class="txt-box" type="number" name="LId"><br><br>
                Name: <input class="txt-box" type="text" name="LName"><br><br>
                Mobile Number: <input class="txt-box" type="number" name="LNumber"><br><br>
                Email: <input class="txt-box" type="email" name="LEmail">
                <br><br>
                Address:
                <textarea class="txt-box" name = "LAddress" >
                </textarea><br><br>
                <br>
                Password: <input class="txt-box" type="password" name="LPass"><br><br>
                Confirm password: <input class="txt-box" type="password" name="LCPass"><br><br>

                <input class="btn btn-dark" type="submit" value="REGISTER">


            </form>
            <br>
            <input class="btn btn-dark" type="button" value="SIGN IN" id="LsignIn">
            <script>
                var L = document.getElementById('LsignIn');
                L.addEventListener('click', LsignInProcess);

                function LsignInProcess() {
                    window.location.assign('Llogin.php');
                }
            </script>

        </div>


    </body>
</html>