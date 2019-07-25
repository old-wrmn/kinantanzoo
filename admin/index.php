<?php
include 'php/main.php';
if(!isLoggedin()){
    include 'page/login.php';
}
else{
    include 'page/index.php';
}?>