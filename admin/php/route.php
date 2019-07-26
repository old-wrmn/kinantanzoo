<?php 
if(isset($_GET['page'])){
    $page=$_GET['page'];
    switch($page){
        case 'review':
            include 'page/review.php';
            break;
        case 'showprev':
            include 'page/showprev.php';
            break;
    }
}
if(isset($_GET['action'])&&isset($_GET['id'])){
    $action=$_GET['action'];
    $id=$_GET['id'];
    switch($action){
        case 'show':
            show($id);
            break;
        case 'hide':
            hide($id);
            break;
    }
}
?>