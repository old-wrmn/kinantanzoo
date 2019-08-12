<?php 
$id=$_GET['id'];
$sql="SELECT * from ulasan where ulasanid=$id";
$res=mysqli_query($conn,$sql);
while($i=mysqli_fetch_array($res)){?>
<div class="col-lg-12">
<div class="card">
    <div class="card-header">
        <h4><?=ucfirst($i['ulasannama'])?></h4><?=$i['ulasanemail']?>
        <h6><?=$i['ulasanwaktu']?></h6>
    </div>
    <div class="card-body">
        <p class="text-muted m-b-15"><?=ucfirst($i['ulasanpesan'])?></p>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <?php 
                if($i['ulasanstatus']==1){
                ?>
                <td>
                    <a class="nav-link active" href="?action=hide&id=<?=$id?>">Hide</a>
                </td>
                <?php 
                }
                else{?>
                <td>
                    <a class="nav-link active" href="?action=show&id=<?=$id?>">Show</a>
                </td>
                <?php 
                }
                ?>
            </li>
        </ul>
    </div>
</div>
</div>
<?php }?>