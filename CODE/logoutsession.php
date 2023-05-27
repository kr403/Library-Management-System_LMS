<?php

session_start();
unset($_SESSION['studentID']);
session_destroy();
?>
    <script>
        window.location.assign('start.php')
    </script>
<?php

?>