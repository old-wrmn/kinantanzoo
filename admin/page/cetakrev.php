<style>
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
</style>
<script>
window.print();
</script>
<?php
include '../../php/conn.php';
?>
 <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Comment</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody style="text-align:center">
            <?php
            $query="SELECT * from ulasan order by ulasanwaktu DESC ";
            $res=mysqli_query($conn,$query);
            while($i=mysqli_fetch_array($res)){?>
            <tr>
                <td width="15%"><?=$i['ulasanwaktu']?></td>
                <td><?=ucfirst($i['ulasannama'])?></td>
                <td><?=$i['ulasanemail']?></td>
                <td> 
                    <?=$i['ulasanpesan']?>
                </td>
                <td>◻</td>
            </tr>
            <?php }?>
        </tbodys>
    </table>
    </div>