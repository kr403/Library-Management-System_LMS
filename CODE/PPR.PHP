<?php
    session_start();
    if(isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])){

        if(isset($_POST['aP']) && !empty($_POST['aP'])&&isset($_POST['aid']) && !empty($_POST['aid'])){
            
            $var1=$_POST['aP'];
            $var2=$_POST['aid'];
           
            
            try{
                $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "UPDATE books SET publication='$var1' WHERE bookId='$var2' ";

                try{


                    $stmt = $dbcon->prepare($sql);

                    // execute the query
                    $stmt->execute();

                    // echo a message to say the UPDATE succeeded
                    echo $stmt->rowCount() . " records UPDATED successfully";

                    ?>
                    <script>
                        window.location.assign('Lbooks.php');
                    </script>
                    <?php
                }
                catch(PDOException $ex){
                    ?>
                        <script>
                            window.location.assign('updateqty.php');
                        </script>
                    <?php
                }
                
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('updateqty.php');
                    </script>
                <?php
            }
        }
        else{
            ?>
                <script>
                    window.location.assign('adminHomepage.php');
                </script>
            <?php
        }
    }
    else{
        ?>
            <script>
                window.location.assign('loginpage.php');
            </script>
        <?php
    }
?>