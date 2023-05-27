<?php

session_start();
unset($_SESSION['adminId']);
session_destroy();
?>
    <script>
        window.location.assign('Llogin.php')
    </script>
<?php

?>