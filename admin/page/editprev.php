<?php 
$id=$_GET['id'];
$query="SELECT * from ulasan where ulasanid=$id";
$res=mysqli_query($conn, $query);
while($hasil=mysqli_fetch_array($res)){
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Berita</strong> 
        </div>
        <div class="card-body card-block">
        <form action="php/action.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input type="text" id="id" name="id" class="form-control" value="<?=$id?>" hidden>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="isi" class=" form-control-label">isi ulasan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea id="isi" name="isi" rows="10" cols="40"><?=$hasil['ulasanpesan']?></textarea>
                    </div>
                </div>
                <input type="submit" name="editprev" class="btn btn-primary" style="float:right" label="Ok">
            </form>
        </div>
    </div>
</div>
<?php }?>