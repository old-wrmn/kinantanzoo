<?php 
$nip=$_GET['id'];
$query="SELECT * from pegawai where pegawainomorinduk=$nip";
$res=mysqli_query($conn, $query);
while($hasil=mysqli_fetch_array($res)){
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Horizontal</strong> Form
        </div>
        <div class="card-body card-block">
            <form action="php/action.php" method="post" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="nip" class=" form-control-label">Nomor Induk</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="nip" name="nip" class="form-control" value="<?=$hasil['pegawainomorinduk']?>" hidden>
                        <?=$hasil['pegawainomorinduk']?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="nama" class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nama" name="nama" class="form-control" value="<?=$hasil['pegawainama']?>" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="gelar" class=" form-control-label">Gelar</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="gelar" name="gelar" class="form-control" value="<?=$hasil['pegawaigelar']?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="golongan" class=" form-control-label">Golongan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="golongan" name="golongan" class="form-control" value="<?=$hasil['pegawaigolongan']?>" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="jabatan" class=" form-control-label">Jabatan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="jabatan" id="jabatan" class="form-control">
                        <?php
                        $query="SELECT * from jabatan order by jabatanid";
                        $res=mysqli_query($conn,$query);
                        while($i=mysqli_fetch_array($res)){?>
                            <option value="<?=$i['jabatanid']?>"><?=ucwords($i['jabatannama'])?></option>
                        <?php }?>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="tugas" class=" form-control-label">Tugas</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="tugas" name="tugas" class="form-control" value="<?=$hasil['pegawaitugas']?>" required>
                    </div>
                </div>
                <input type="submit" name="editpegawai" class="btn btn-primary" style="float:right" label="Ok">
            </form>
        </div>
    </div>
</div>
<?}?>