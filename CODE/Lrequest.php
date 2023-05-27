
<?php

session_start();

if(isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])){

        ?>
        <table>
            <thead>
            <tr>
                <th>booksbookId</th>
                <th>studentsid</th>
                
            </tr>
            </thead>

            <tbody>
            <?php
            try{

                $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                
                    $sqlquery="SELECT * FROM request WHERE status LIKE 'pending'";
                


                try{
                    $returnval=$dbcon->query($sqlquery);

                    $bookstable=$returnval->fetchAll();

                    foreach($bookstable as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['booksbookId'] ?></td>
                            
                            <td><?php echo $row['studentsid'] ?></td>
                            
                           

                            <td>
                                <lebel for="n">STATUS</lebel>
                                <select name="n" id="p">
                                    <option value="approved">approved</option>
                                    <option value="rejected">rejected</option>
                                </select>
                                <input type="submit" value="SAVE">
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