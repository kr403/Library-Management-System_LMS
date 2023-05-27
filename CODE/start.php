<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            body
            {
                background-image: url(images/lib.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: 0px -200px;
                position: relative;
                text-align: center;
            }
            .btn_start{
                margin-top: 50px;
                margin-left: -70px;
            }
            .text-img{
                border-style: solid;
                background-color: whitesmoke;
                margin-top: 100px;
            }
        </style>
    </head>
    <body>
       <img class="text-img" src="images/text-lms.png" alt="Cinque Terre"> 
        <div class="btn_start">
            <input type="button" class="btn btn-dark" value="Librarian" id="l">
            <script>
                var li = document.getElementById('l');
                li.addEventListener('click', lProcess);

                function lProcess() {
                    window.location.assign('Lsignup.php');
                }
            </script>

            <br><br>

            <input type="button" class="btn btn-dark" value="Student" id="s">
            <script>
                var st = document.getElementById('s');
                st.addEventListener('click', sProcess);

                function sProcess() {
                    window.location.assign('student.php');
                }
            </script>


        </div>


    </body>
</html>