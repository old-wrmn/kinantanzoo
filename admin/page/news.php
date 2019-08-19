<!-- DATA TABLE-->
<div class="card">
<div class="card-header">
    <div style="float:right">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <td>
                    <a class="btn btn-primary" href="?action=hide&id=<?=$id?>">Add</a>
                </td>
            </li>
        </ul>
    </div>
    <h4>Berita</h4>
</div> 
<div class="table-responsive">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>date</th>
                <th>judul</th>
                <th>pegawai</th>
                <th>view</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT * from berita join pegawai on pegawai.pegawainomorinduk=berita.pegawainomorinduk order by beritatanggal DESC ";
            $res=mysqli_query($conn,$query);
            while($i=mysqli_fetch_array($res)){?>
            <tr>
                <td><?=$i['beritatanggal']?></td>
                <td><?=ucfirst($i['beritajudul'])?></td>
                <td><?=ucfirst($i['pegawainama'])?></td>
                <td> 
                    <a href="?page=shownews&id=<?=$i['beritaid']?>" class="item" data-toggle="tooltip" data-placement="top" title="view">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
</div>
<!-- END DATA TABLE-->