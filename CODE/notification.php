<?php
session_start();

if (isset($_SESSION['studentID']) && !empty($_SESSION['studentID'])) {
    $var9 = $_SESSION['studentID'];

        try {
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;", "root", "");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "Select donationId, bookName, image, writterName, publication, edition, genre, description, quantity, status From bookdonation where studentsid = $var9";
            try {
                $return = $dbcon->query($query);
                $donationTable = $return->fetchAll();
                foreach ($donationTable as $row) {
                    if($row['status']=='approved'||$row['status']=='rejected')
                    {
                        ?>
                        Your donation request for the "<?php echo $row['bookName'] ?>" is "<?php echo $row['status'] ?>" 
                        <?php
                    }
                }
            } catch (PDOException $ex) {
                ?>
                <tr>
                    <td colspan="10">DATA READ ERROR...</td>
                </tr>
                <?php
            }
        } catch (PDOException $ex) {
            ?>
            <tr>
                <td colspan="10">DATA READ ERROR...</td>
            </tr>
            <?php
        }

        ?>

        </tbody>

    </table>
    <br><br>
    <input type="button" value="BACK" id="hp">
    <script>
        var home = document.getElementById('hp');
        home.addEventListener('click', hpProcess);

        function hpProcess() {
            window.location.assign('studentHomePage.php');
        }
    </script>
    <br><br>
    <input type="button" value="LOGOUT" id="lo">
    <script>
        var log = document.getElementById('lo');
        log.addEventListener('click', loProcess);

        function loProcess() {
            window.location.assign('logoutsession.php');
        }
    </script>

    </body>
    </html>
    <?php

} else {
    ?>
    <script>window.location.assign('studentLoginPage.php')</script>
    <?php
}
?>











