<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Ganti <strong>Password</strong>
        </div>
        <div class="card-body card-block">
            <form action="php/action.php" method="post" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="old" class=" form-control-label">Password Lama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="old" name="old" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="new1" class=" form-control-label">Password Baru</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="new1" name="new1" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="new2" class=" form-control-label">Password Baru</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="new2" name="new2" class="form-control" required>
                    </div>
                </div>
                <input type="submit" name="chgpwd" class="btn btn-primary" style="float:right" label="Ok">
            </form>
        </div>
    </div>
</div>