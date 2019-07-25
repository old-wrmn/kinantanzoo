<?php
include '../php/conn.php';
function isLoggedIn(){
    if (isset($_SESSION['user'])) {
        return true;
    }else{
        return false;
    }
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user']);
}?>