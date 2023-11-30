<?php 
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
        echo "Login Success";
    } else {
        echo "Login Failed";
    }
?>