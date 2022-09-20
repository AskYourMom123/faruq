<?php

session_start();
// agar yakin session nya hilang
$_SESSION = [];
session_unset();
session_destroy();

header("Location:../login.php");

?>