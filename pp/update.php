<?php
// setiap menggunakan session, harus diawali dengan session_start
    session_start();

    $_SESSION['username'] = "gdaghhda";
    $_SESSION['password'] = 1111;


    echo $_SESSION['username'];
    echo $_SESSION['password'];
?>