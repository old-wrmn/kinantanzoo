<section id='about' class="s-about">
<?php
$news=mysqli_query($conn,
    "SELECT 
        * 
    from 
        berita
    join pegawai 
        on pegawai.pegawainomorinduk=berita.pegawainomorinduk
    where beritaid=".$_GET['id']);
while ($data_berita = mysqli_fetch_array($news)) {?>
    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">Berita</h3>
            <?=$data_berita['pegawainama']?><br><?=$data_berita['beritatanggal']?>
            <h1 class="display-1"><?=ucwords($data_berita['beritajudul'])?></h1>
            
        </div>
    </div> <!-- end section-header -->

    <div class="row" data-aos="fade-up">
        <center>
            <img src="images/berita/<?=$data_berita['beritagambar']?>" style="height:25%; ">
        </center>
        <div class="col-full">
            <p >
                <?=$data_berita['beritaisi']?>
            </p>
        </div>
    </div> <!-- end about-desc -->
<?php }?>

</section> <!-- end s-about -->
