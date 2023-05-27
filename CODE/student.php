<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="includes/style.css">

    </head>
    <body>
        <div class="container">
            <form action="registerStudent.php" method="post">
                ID: <input class="txt-box" type="number" name="sId"><br><br>
                Name: <input class="txt-box" type="text" name="sName"><br><br>
                Mobile Number: <input class="txt-box" type="number" name="sNumber"><br><br>
                Email: <input class="txt-box" type="email" name="sEmail">
                <br><br>
                Address:
                <textarea class="txt-box" name = "sAddress" >
                </textarea><br><br><br><br>
                Password: <input class="txt-box" type="password" name="sPass"><br><br>
                Confirm password: <input class="txt-box" type="password" name="sCPass"><br><br>

                <input class="btn btn-dark" type="submit" value="REGISTER">
            </form>
            <br>
            <input class="btn btn-dark" type="button" value="SIGN IN" id="signIn">
            <script>
                var si = document.getElementById('signIn');
                si.addEventListener('click', signInProcess);

                function signInProcess() {
                    window.location.assign('studentLoginPage.php');
                }
            </script>

        </div>


    </body>
</html>