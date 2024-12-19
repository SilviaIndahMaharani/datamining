<?php
session_start();

// Hancurkan session
session_unset();
session_destroy();

// Arahkan ke halaman login
header("Location: login.php");
exit();
?>
