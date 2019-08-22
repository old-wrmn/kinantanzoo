<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Satwa</strong> Form
        </div>
        <div class="card-body card-block">
            <form action="php/action.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="judul" class=" form-control-label">Judul</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="judul" name="judul" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="isi" class=" form-control-label">isi berita</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea id="isi" name="isi" rows="10" cols="40"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="gambar" class=" form-control-label">gambar</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>
                <input type="submit" name="addnews" class="btn btn-primary" style="float:right" label="Ok">
            </form>
        </div>
    </div>
</div>