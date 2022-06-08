<?php
//Add database connection
require_once('auth.php');
    setcookie("user_id", "", time() - 3600,"/");
    header("location: $site_url");
    exit();
?>