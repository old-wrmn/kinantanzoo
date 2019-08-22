<?php 
$id=$_GET['id'];
$query="SELECT * from hewan where hewanid=$id";
$res=mysqli_query($conn, $query);
while($hasil=mysqli_fetch_array($res)){
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Horizontal</strong> Form
        </div>
        <div class="card-body card-block">
            <form action="php/action.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="text" id="id" name="id" class="form-control" value="<?=$hasil['hewanid']?>" hidden>
                    <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="nama" class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nama" name="nama" class="form-control" value="<?=$hasil['hewannama']?>"required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="jenis" class=" form-control-label">Jenis</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="jenis" id="jenis" class="form-control">
                        <?php
                        $query="SELECT * from jenis order by jenisid";
                        $res=mysqli_query($conn,$query);
                        while($i=mysqli_fetch_array($res)){?>
                            <option value="<?=$i['jenisid']?>"><?=ucwords($i['jenisnama'])?></option>
                        <?php }?>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="keterangan" class=" form-control-label" >Keterangan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea id="keterangan" name="keterangan" rows="4" cols="40"><?=$hasil['hewanketerangan']?></textarea>
                    </div>
                </div>
                <input type="submit" name="editsatwa" class="btn btn-primary" style="float:right" label="Ok">
            </form>
        </div>
    </div>
</div>
<?php }?>