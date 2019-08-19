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
        case 'news':
            include 'page/news.php';
            break;
        case 'shownews':
            include 'page/shownews.php';
            break;
        case 'pegawai':
            include 'page/pegawai.php';
            break;
        case 'chgpwd':
            include 'page/chgpwd.php';
            break;
        case 'addpegawai':
            include 'page/addpegawai.php';
            break;
        case 'editpegawai':
            include 'page/editpegawai.php';
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
if(isset($_GET['delpegawai'])){
    $id=$_GET['id'];
    $query="DELETE from pegawai where pegawainomorinduk=$id";
    mysqli_query($conn,$query);
}
?>