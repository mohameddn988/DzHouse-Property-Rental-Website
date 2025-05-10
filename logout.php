<?php
session_start();
session_unset();
session_destroy();
header("Location: /DzHouse%20Property%20Rental%20Website/index.php");
exit;
?>