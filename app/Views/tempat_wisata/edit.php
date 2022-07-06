<?= $this->include('template/header') ?>;
<?= $this->include('template/sidebar') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tempat Wi</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('tempatwisata/update'); ?>">
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Tempat Wisata</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->nama; ?>" name="nama" placeholder="Masukkan Nama Tempat Wisata Anda" type="text" class="form-control">

                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <!-- alamat -->
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Alamat</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->alamat; ?>" name="alamat" placeholder="Masukkan Alamat Tempat Wisata Anda" type="text" class="form-control">

                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <!-- latlong -->
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Latlong</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->latlong; ?>" name="latlong" placeholder="" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <!-- jenis id -->
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Jenis id</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->jenis_id; ?>" name="jenis_id" placeholder="" type="text" class="form-control">

                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <!-- skor rating -->
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Skor rating</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->skor_rating; ?>" name="skor_rating" placeholder="" type="text" class="form-control">

                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <!-- harga tiket -->
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Harga Tiket</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->harga_tiket; ?>" name="harga_tiket" placeholder ="" type="text" class="form-control">

                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <!-- foto 1 -->
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Foto 1</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->foto1; ?>" name="foto1" placeholder="" type="text" class="form-control">

                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <!-- foto 2 -->
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Foto 2</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->foto2; ?>" name="foto2" placeholder="" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <!-- foto 3 -->
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Foto 3</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->foto3; ?>" name="foto3" placeholder="" type="text" class="form-control">

                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <!-- kecamatan id -->
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Kecamatan id</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->kecamatan_id; ?>" name="kecamatan_id" placeholder="" type="text" class="form-control">

                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <!-- website -->
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Website</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->website; ?>" name="website" placeholder="" type="text" class="form-control">

                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <!-- fasilitas -->
                    <div class="form-group row">
                        <label for="nama_tempat_wisata" class="col-2 col-form-label">Fasilitas</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_tempat_wisata" value="<?= $tempatwisata->fasilitas; ?>" name="fasilitas" placeholder="" type="text" class="form-control">

                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $tempatwisata->id; ?>" name="id">

                    <div class="form-group row">
                        <div class="offset-2 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->include('template/footer') ?>