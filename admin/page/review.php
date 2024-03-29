<!-- DATA TABLE-->
<div class="card">
<div class="card-header">
    <h4>Ulasan</h4>
    <div style="float:right">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <td>
                    <a class="btn btn-primary" href="page/cetakrev.php">Cetak</a>
                </td>
            </li>
        </ul>
    </div>
</div> 
<div class="table-responsive">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>date</th>
                <th>name</th>
                <th>email</th>
                <th>status</th>
                <th>view</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT * from ulasan order by ulasanwaktu DESC ";
            $res=mysqli_query($conn,$query);
            while($i=mysqli_fetch_array($res)){?>
            <tr>
                <td><?=$i['ulasanwaktu']?></td>
                <td><?=ucfirst($i['ulasannama'])?></td>
                <td><?=$i['ulasanemail']?></td>
                <?php 
                if($i['ulasanstatus']==1){
                ?>
                <td>
                <span class="status--process">Show</span>
                </td>
                <?php 
                }
                else{?>
                <td>
                <span class="status--denied">Hide</span>
                </td>
                <?php 
                }
                ?>
                <td> 
                    <a href="?page=showprev&id=<?=$i['ulasanid']?>" class="item" data-toggle="tooltip" data-placement="top" title="view">
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