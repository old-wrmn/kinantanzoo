<!-- DATA TABLE-->
<div class="card">
<div class="card-header">
    <div style="float:right">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <td>
                    <a class="btn btn-primary" href="?page=addpegawai">Add</a>
                </td>
            </li>
        </ul>
    </div>
    <h4>Pegawai</h4>
</div> 
<div class="table-responsive">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>nomor induk</th>
                <th>name</th>
                <th>golongan</th>
                <th>jabatan</th>
                <th>tugas</th>
                <th>act</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT * from pegawai join jabatan on jabatan.jabatanid=pegawai.jabatanid order by jabatan.jabatanid ASC";
            $res=mysqli_query($conn,$query);
            while($i=mysqli_fetch_array($res)){?>
            <tr>
                <td><?=$i['pegawainomorinduk']?></td>
                <td><?=ucfirst($i['pegawainama'])?>, <?=ucfirst($i['pegawaigelar'])?></td>
                <td><?=strtoupper($i['pegawaigolongan'])?></td>
                <td><?=ucfirst($i['jabatannama'])?></td>
                <td><?=ucfirst($i['pegawaitugas'])?></td>
                <td>
                    <a href="?page=editpegawai&id=<?=$i['pegawainomorinduk']?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <a href="?delpegawai&id=<?=$i['pegawainomorinduk']?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
</div>
<!-- END DATA TABLE-->