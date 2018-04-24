<?php

session_start();
session_destroy();
unset($_SESSION['userdata']);
header('location:../../../university/index.php');
//    if(empty($_SESSION['userdata'])){
//        session_start();
//        session_destroy();
//        unset($_SESSION['userdata']);
//        header('location:../../../University/index.php');
//    }
