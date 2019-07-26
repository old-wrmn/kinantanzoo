<section id='about' class="s-about">
<div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Review</h3>
                <h1 class="display-1">Apa saja tanggapan pengunjung?</h1>
            </div>
        </div>
<div class="row">

<div>
<div class="row testimonials">

<div class="col-full testimonials__slider">
    <?php
    $uls="SELECT * from ulasan where ulasanstatus=true order by ulasanwaktu DESC LIMIT 6";
    $res=pg_query($uls);
    while ($one=pg_fetch_array($res)){
    ?>

    <div class="testimonials__slide">
        <span><?= substr($one['ulasanwaktu'],0,10)?></span>
        <p><?=$one['ulasanpesan']?></p>
        <div class="testimonials__author">
            <?=$one['ulasannama']?>
            <span><?=$one['ulasanemail']?></span>
        </div>
    </div> <!-- end testimonials__slide -->
    <?php }?>

</div> <!-- end testimonials__slider -->

</div> <!-- end testimonials -->

    <h3>Tambahkan Tanggapan Anda</h3>

    <form action="php/action.php" method="post">
        <div>
            <label for="sampleInput">Nama</label>
            <input class="full-width" type="text" name="nama" id="sampleInput" required>
        </div>
        <div>
            <label for="sampleInput2">E-mail</label>
            <input class="full-width" type="text" name="email" id="sampleInput2" required>
        </div>
        <label for="exampleMessage">Tanggapan</label>
        <textarea class="full-width" name="pesan" id="exampleMessage"></textarea>
        <input class="btn--primary" type="submit" name="review" value="Submit">
    </form>

</div>

</div> <!-- end row -->
</section>