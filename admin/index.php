<?php
include 'php/main.php';
include 'php/function.php';
if(!isLoggedin()){
    include 'page/login.php';
}
else{
    include 'main.php';
}?>