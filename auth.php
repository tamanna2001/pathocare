<?php
//create connection
 require('connect.php');
//Check only non-login users and redirect them to login page.
// if(isset($_COOKIE['user_id'])){
    //Decode login cookie
    // $user_id=$_COOKIE['user_id'];
    // $user_id=convert_uudecode($user_id);
    $user_id=1;
    //Get Data from SQL
    $sql="SELECT * FROM users WHERE id='$user_id';";
    $result=$connect->query($sql);
    $row=$result->fetch_assoc();
    //Check cookie id with database id with === operator
    // if ($user_id===$row['id']) {
        $login=1;
        $id=$row['id'];
        $user_name=$row['name'];
        $user_password=$row['password'];
        $user_phone=$row['phone_number'];
        $user_age=$row['age'];
        $user_gender=$row['gender'];
        $user_address=$row['address'];
    // }
    // else{
    //     header("Location:login.php");
    //     exit();
    // }
// }
?>