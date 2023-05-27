
                  
     <?php

    session_start();

    if(isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])){
        if(isset($_POST['approved']))
        {   
             try{
                $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql =  "update bookdonation set status='rejected' ";


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
           
        
        }
        elseif(isset($_POST['rejected']) )
        {
         try{
                $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql1 = "update bookdonation set status='rejected' ";

                try{


                    $stmt = $dbcon->prepare($sql1);

                    // execute the query
                    $stmt->execute();

                    // echo a message to say the UPDATE succeeded
                    echo $stmt->rowCount() . " records UPDATED successfully";

                    ?>
                    <script>
                        window.location.assign('Ldonation.php');
                    </script>
                    <?php
                }
                catch(PDOException $ex){
                    ?>
                        <script>
                            window.location.assign('Ldonation.php');
                        </script>
                    <?php
                }
                
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('Ldonation.php');
                    </script>
                <?php
            }
        }
           
          
              
    
 else{
        ?>
<script>
    window.location.assign('Llogin.php');
</script>
<?php
    }

?>
        

        
   