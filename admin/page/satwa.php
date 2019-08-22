<!-- DATA TABLE-->
<div class="card">
<div class="card-header">
    <div style="float:right">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <td>
                    <a class="btn btn-primary" href="?page=addsatwa">Add</a>
                </td>
            </li>
        </ul>
    </div>
    <h4>Satwa</h4>
</div> 
<div class="table-responsive">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Keterangan</th>
                <th>Gambar</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT * from hewan join jenis on jenis.jenisid=hewan.jenisid order by jenis.jenisid ASC";
            $res=mysqli_query($conn,$query);
            while($i=mysqli_fetch_array($res)){?>
            <tr>
                <td><?=ucwords($i['hewannama'])?></td>
                <td><?=ucfirst($i['jenisnama'])?></td>
                <td><?=$i['hewanketerangan']?></td>
                <td><img src='../images/hewan/<?=$i['hewangambar']?>' height='200px' width='200px'></td>
                <td>
                    <a href="?page=editsatwa&id=<?=$i['hewanid']?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <a href="?delsatwa&id=<?=$i['hewanid']?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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