<?php
        //Create Database Connection
        $db_host="localhost";
        $db_user="root";
        $db_password="";
        $db_name="pathocare";
        $connect=new mysqli($db_host,$db_user,$db_password,$db_name);
        $site_url="http://localhost/pathocare";

        //Check Database Connection
        if ($connect->connect_error) {
            die ("Failed to connect!");
        }
?>