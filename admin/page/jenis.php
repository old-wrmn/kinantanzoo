<!-- DATA TABLE-->
<div class="card">
<div class="card-header">
    <h4>Jenis</h4>
</div> 
<div class="table-responsive">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Pawang</th>
                <th>tugas</th>
                <th>edit pawang</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT * from jenis left join pegawai on pegawai.pegawainomorinduk=jenis.pegawainomorinduk";
            $res=mysqli_query($conn,$query);
            while($i=mysqli_fetch_array($res)){?>
            <tr>
                <td><?=ucwords($i['jenisnama'])?></td>
                <td><?=ucfirst($i['pegawainama'])?>, <?=ucfirst($i['pegawaigelar'])?></td>
                <td><?=ucfirst($i['pegawaitugas'])?></td>
                <td>
                    <a href="?page=editjenis&id=<?=$i['jenisid']?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
</div>
<!-- END DATA TABLE-->