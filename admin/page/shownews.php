<?php 
$id=$_GET['id'];
$sql="SELECT * from berita join pegawai on pegawai.pegawainomorinduk=berita.pegawainomorinduk where beritaid=$id";
$res=mysqli_query($conn,$sql);
while($i=mysqli_fetch_array($res)){?>
<div class="col-lg-12">
<div class="card">
    <div class="card-header">
    <div style="float:right">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <td>
                        <a class="btn btn-primary" href="?page=editnews&id=<?=$id?>">Edit</a>
                        <a class="btn btn-danger" href="?delnews&id=<?=$id?>&msg=success">Delete</a>
                    </td>
                </li>
            </ul>
        </div>
        <h4><?=ucwords($i['beritajudul'])?></h4>
        <h6><?=$i['beritatanggal']?></h6>
    </div> 
        <center>
            <img src="../images/berita/<?=$i['beritagambar']?>" style="height:25%; ">
        </center>
    <div class="card-body">
        <p class="text-muted m-b-15"><?=ucfirst($i['beritaisi'])?></p>
    </div>
   
</div>
</div>
<?php }?>