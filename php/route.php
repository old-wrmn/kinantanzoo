<?php
if(isset($_GET['view'])){
    $view = $_GET['view'];
    switch ($view) {
        case 'home':
            include "view/home.php";
            break;
        case 'about':
            include "view/about.php";
            break;
        case 'review':
            include "view/review.php";
            break;
        case 'news':
            include "view/news.php";
            break;
        case 'dnews':
            include "view/dnews.php";
            break;
        case 'satwa':
            include "view/satwa.php";
            break;
        default : 
            include "view/404.php";
            break;
        }
    }
    else{
        include "view/home.php";
    }
?>