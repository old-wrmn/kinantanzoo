<?php 
$id=$_GET['id'];
$query="SELECT * from jenis where jenisid=$id";
$res=mysqli_query($conn, $query);
while($hasil=mysqli_fetch_array($res)){
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Pawang <strong><?=$hasil['jenisnama']?></strong> 
        </div>
        <div class="card-body card-block">
            <form action="php/action.php" method="post" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="jabatan" class=" form-control-label">Pawang</label>
                    </div>
                    <input type="number" id="id" name="id" class="form-control" value="<?=$id?>" hidden>
                    <div class="col-12 col-md-9">
                        <select name="nip" id="nip" class="form-control">
                        <?php
                        $query="SELECT * from pegawai order by jabatanid";
                        $res=mysqli_query($conn,$query);
                        while($i=mysqli_fetch_array($res)){?>
                            <option value="<?=$i['pegawainomorinduk']?>"><?=ucwords($i['pegawainama'])?></option>
                        <?php }?>
                        </select>
                    </div>
                </div>
                <input type="submit" name="editjenis" class="btn btn-primary" style="float:right" label="Ok">
            </form>
        </div>
    </div>
</div>
<?php }?>