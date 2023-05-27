
<?php

session_start();

if(isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])){

        ?>
        <table>
            <thead>
            <tr>
                <th>donationId</th>
                <th>bookName</th>
                <th>image</th>
                <th>writterName</th>
                <th>publication</th>
                <th>edition</th>
                <th>gener</th>
                <th>discription</th>
                <th>quantity</th>
                <th>studentsid</th>
                
            </tr>
            </thead>

            <tbody>
            <?php
            try{

                $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                
                    $sqlquery="SELECT * FROM bookdonation WHERE status LIKE 'pending'";
                


                try{
                    $returnval=$dbcon->query($sqlquery);

                    $bookstable=$returnval->fetchAll();

                    foreach($bookstable as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['donationId'] ?></td>
                            <td><?php echo $row['bookName'] ?></td>
                            <td><?php echo $row['image'] ?></td>

                            <td><?php echo $row['writterName'] ?></td>
                            <td><?php echo $row['publication'] ?></td>
                            <td><?php echo $row['edition'] ?></td>
                            <td><?php echo $row['genre'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['quantity'] ?></td>
                            <td><?php echo $row['studentsid'] ?></td>
                            
                            <td>
                                <img width="80" height="80" alt="BOOK Demo" src="<?php echo $row['image'] ?>">
                            </td>

                            <td>
                            
                                <lebel for="n">STATUS</lebel>
                                <select name="n" id="p">
                                    <option value="approved">approved</option>
                                    <option value="rejected">rejected</option>
                                </select>
                                <input type="submit" value="SAVE" id='bkebtnbdd'>
                                <script>
                       var e1bdd = document.getElementById('bkebtnbdd')
                       e1bdd.addEventListener('click', processlogout);

    function processlogout() {
        window.location.assign('Lsave.php');
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
                window.location.assign('LHomepage.php');
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