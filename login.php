<?php
require_once "vendor/autoload.php";
use App\Auth\connect;

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) or empty($password)){
        echo "Field Must Not Be Empty";
    }elseif($_POST){
        $newConnect = new connect();
        $newConnect->setData($_POST);
        $newConnect->login();
        // header('location:View/admin/index.php');

        
    }else{
        echo "Wrong Username or Password!!";
    }
}