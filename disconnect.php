<?php
session_start();

/* Disconnect from the session */
session_destroy();
header("refresh:0;url=index.php");
?>
