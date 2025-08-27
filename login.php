<?php
require_once('DBconnect.php');

if(isset($_POST['user_id']) && isset($_POST['password'])){
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE user_id = '$user_id' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        echo "Let him enter";
        //header("Location: home.php");
    }
    else{
        echo "Wrong username or password";
    }
}
?>


