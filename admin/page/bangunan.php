<!-- DATA TABLE-->
<div class="card">
<div class="card-header">
    <div style="float:right">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <td>
                    <a class="btn btn-primary" href="?page=addnews">Add</a>
                </td>
            </li>
        </ul>
    </div>
    <h4>Bangunan</h4>
</div> 
<div class="table-responsive">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>jenis</th>
                <th>lat</th>
                <th>lng</th>
                <th>keterangan</th>
                <th>act</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT * from bangunan join tipe on bangunan.tipeid=tipe.tipeid left join hewan on hewan.bangunanid=bangunan.bangunanid";
            $res=mysqli_query($conn,$query);
            while($i=mysqli_fetch_array($res)){?>
            <tr>
                <td><?=$i['tipenama']?></td>
                <td><?=$i['bangunanlat']?></td>
                <td><?=$i['bangunanlong']?></td>
                <td><?=ucfirst($i['bangunanketerangan'])?></td>
                <?php if($i['tipeid']==1){?>
                <td> 
                    <a href="?page=editbangunan&id=<?=$i['bangunanid']?>" class="item" data-toggle="tooltip" data-placement="top" title="view">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                </td>
                <?php }?>
            </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
</div>
<!-- END DATA TABLE-->