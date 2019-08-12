<section id='works' class="s-works">
<div class="row section-header" data-aos="fade-up">
    <div class="col-full">
        <h3 class="subhead">Berita</h3>
        <h1 class="display-1">Apa saja hal baru di kebun binatang kinantan</h1>
    </div>
</div> <!-- end section-header -->  
<?php
$news=mysqli_query($conn,
    "SELECT 
        * 
    from 
        berita
    join pegawai 
        on pegawai.pegawainomorinduk=berita.pegawainomorinduk
    order by 
        beritatanggal 
    DESC LIMIT 6");
while ($data_berita = mysqli_fetch_array($news)) {?>
<div style="padding-left:5%;padding-bottom:10%" data-aos="fade-up">
    <a href="?view=dnews&id=<?=$data_berita['beritaid']?>">
        <div style="padding-left:30%;">
            <h1><?=ucwords($data_berita['beritajudul'])?></h1>
        </div>
        <div>
            <div style="width:20%;height:100%;float:left">
                <img src="images/berita/<?=$data_berita['beritagambar']?>" alt="">
            </div>
            <div style="width:70%;float:right;">         
                <span>
                   <?=substr($data_berita['beritaisi'],0,200)?>......<u>Selengkapnya</u>
                </span>
                <br>
                <small>oleh : <?=ucwords($data_berita['pegawainama'])?></small>
            </div>
        </div> 
    </a>
</div> 
<?php }?>
</section>
