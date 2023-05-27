<?php

    session_start();

    if(isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])){

        if(isset($_GET['param1']) && !empty($_GET['param1'])){
        ?>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>BName</th>
            <th>Writter</th>
            <th>publication</th>
            <th>edition</th>
            <th>gener</th>
            <th>discription</th>
            <th>quantity</th>

            <th>imagepath</th>

        </tr>
    </thead>

    <tbody>
        <?php
                        try{

                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                            $searchval=$_GET['param1'];
                            $sqlquery="";
                            if(!empty($searchval)){
                                $sqlquery="SELECT * FROM books where bookName LIKE '%$searchval%'";
                            }


                            try{
                                $returnval=$dbcon->query($sqlquery);

                                $bookstable=$returnval->fetchAll();

                                foreach($bookstable as $row){
                                    ?>
        <tr>
            <td><?php echo $row['bookId'] ?></td>
                                            <td><?php echo $row['bookName'] ?></td>
                                            <td><?php echo $row['writterName'] ?></td>
                                            <td><?php echo $row['publication'] ?></td>
                                            <td><?php echo $row['edition'] ?></td>
                                              <td><?php echo $row['genre'] ?></td>
                                            <td><?php echo $row['description'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td><?php echo $row['image'] ?></td>
                                            <td>
                                                <img width="80" height="80" alt="BOOK Demo" src="<?php echo $row['image'] ?>">
                                            </td>

        <td><input type="button" value="UPDATE QUANTITY" id="bkebtn1">

        <script>
            var e1 = document.getElementById('bkebtn1');
            e1.addEventListener('click', processlogout);

            function processlogout() {
                window.location.assign('Lupdateqty.php');
            }
        </script>
            </td>
        </tr>

        <br>
        <br>

        <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
        <tr>


        </tr>
        <?php
                            }

                        }
                        catch(PDOException $ex){
                            ?>

        <tr>


        </tr>



        <?php
  }

                    ?>
    </tbody>
</table>


<br>
<br>
<input type="button" value="HOME" id="bkebtnbd">

<script>
    var e1bd = document.getElementById('bkebtnbd');
    e1bd.addEventListener('click', processlogout);

    function processlogout() {
        window.location.assign('home.php');
    }
</script>



<?php
        }
        else{
            ?>
<script>
    window.location.assign('login.php');
</script>
<?php
        }
    }
    else{
        ?>
<script>
    window.location.assign('login.php');
</script>
<?php
    }

?>