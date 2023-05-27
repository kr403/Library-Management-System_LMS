<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="includes/style.css">


    </head>
    <body>
        <div class="container">
            <form action="LVerify.php" method="post">
                Admin/Librarian ID: <input class="txt-box" type="number" name="LId"><br><br>
                Password: <input class="txt-box" type="password" name="LPass"><br><br>
                <input class="btn btn-dark" type="submit" value="Login">
            </form>

        </div>

    </body>
</html>