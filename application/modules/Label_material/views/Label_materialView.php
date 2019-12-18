<style type="text/css">
    .sudah_proses {
        color: red;
    }

    .swal2-container {
        z-index: 999999999999;
    }
</style>

<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__body">
        <form id="form-cari">

            <div class="form-group row mb-2">
                <div class="col-md-4 col-lg-2">
                    <label for="email-2" class="block">Jenis Penerbitan</label>
                </div>
                <div class="col-md-8 col-lg-4">
                    <?php
                    $arr_jenis = array(
                        '' => '',
                        1 => "BBN1 / R2",
                        2 => "BB N1 / R4",
                        3 => "GANTI KEPEMILIKAN / R2",
                        4 => "GANTI KEPEMILIKAN / R4",
                        5 => "DUPLIKAT, GANTI BUKU / R2",
                        6 => "DUPLIKAT, GANTI BUKU / R4",
                        7 => "EX LUAR DAERAH / R2",
                        8 => "EX LUAR DAERAH / R4",
                    );
                    echo form_dropdown("jenis_penerbitan", $arr_jenis, 1, 'id="jenis_penerbitan" class="form-control form-control-sm drpdwn"'); ?>
                </div>
                <div class="col-md-4 col-lg-2">
                    <label for="email-2" class="block">Wilayah Kerja</label>
                </div>
                <div class="col-md-8 col-lg-4">
                    <?php
                    echo form_dropdown("wilayah_kerja", $arr_wilayah, 1, 'id="wilayah_kerja" class="form-control form-control-sm drpdwn"');
                    ?>
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="col-md-4 col-lg-2">
                    <label class="m-radio">
                        <input type="radio" name="jeniscari" id="jeniscari0" value="0" data-bv-field="jeniscari" checked> Tanggal
                        <span></span>
                    </label>
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="input-daterange input-group tanggalspan mb-1">
                        <input type="text" class="input-sm form-control tanggal form-control-sm" id="CrTanggalAwal" value="<?php echo date('d/m/Y'); ?>" name="CrTanggalAwal" placeholder="Tanggal Awal">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
                        </div>
                        <input type="text" class="input-sm form-control tanggal form-control-sm" id="CrTanggalAkhir" name="CrTanggalAkhir" placeholder="Tanggal Akhir" value="<?php echo date('d/m/Y'); ?>">
                    </div>
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="col-md-4 col-lg-2">
                    <label class="m-radio">
                        <input type="radio" name="jeniscari" id="jeniscari1" value="1" data-bv-field="jeniscari"> No. Rek BPKB
                        <span></span>
                    </label>

                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="input-daterange input-group norekspan mb-1">
                        <input type="text" class="input-sm form-control form-control-sm" name="CrNoRekBPKBAwal" id="CrNoRekBPKBAwal" placeholder="No. Rek BPKB Awal">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
                        </div>
                        <input type="text" class="input-sm form-control form-control-sm" name="CrNoRekBPKBAkhir" id="CrNoRekBPKBAkhir" placeholder="No. Rek BPKB Akhir">
                    </div>
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="col-md-4 col-lg-2">
                    <label class="m-radio">
                        <input type="radio" name="jeniscari" id="jeniscari2" value="2" data-bv-field="jeniscari"> No. BPKB
                        <span></span>
                    </label>
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="input-daterange input-group nobpkbspan mb-1">
                        <input type="text" class="input-sm form-control form-control-sm" id="CrNoBPKBAwal" name="CrNoBPKBAwal" placeholder="No. BPKB Awal">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
                        </div>
                        <input type="text" class="input-sm form-control form-control-sm" id="CrNoBPKBAkhir" name="CrNoBPKBAkhir" placeholder="No. BPKB Akhir">
                    </div>
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="col-md-4 col-lg-2">
                    <label for="userName-2" class="block"></label>
                </div>
                <div class="col-md-8 col-lg-4">
                    <button class=" btn btn-primary btn btn-sm ml-1" type="button" id="btnCariServer"><i class="icofont icofont-cloud"></i>Get Data From Server</button>
                    <button class=" btn btn-primary btn btn-sm ml-1"><i class="icofont icofont-file"></i>Show Data</button>
                </div>
            </div>
        </form>
        <hr />
        <div class="form-group row mb-2">
            <div class="col-md-12 col-lg-12">
                <button type="button" class=" btn btn-primary btn btn-sm ml-1" data-toggle="modal" data-target="#large-Modal">Buat Label</button>
                <button class=" btn btn-primary btn btn-sm ml-1">Cetak Label (Kertas Letter)</button>
                <button type="button" class="btn btn-primary btn-sm ml-1 dropdown-toggle" data-toggle="dropdown">
                    Cetak Label (Kertas Labbel)
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Cetak Label (Kertas Label) Rangkap 1</a>
                    <a class="dropdown-item" href="#">Cetak Label (Kertas Label) Rangkap 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Cetak Label (Kertas Label) Key No BPKB Rangkap 1</a>
                    <a class="dropdown-item" href="#">Cetak Label (Kertas Label) Key No BPKB Rangkap 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Cetak Label (Kertas Label) Bukti Bayar, NReg, No BPKB - Key No Rangka(Rangkap 1)</a>
                    <a class="dropdown-item" href="#">Cetak Label (Kertas Label) Bukti Bayar, NReg, No BPKB - Key No Rangka(Rangkap 2)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Cetak Label (Kertas Label) Bukti Bayar, NReg, No BPKB - Key No BPKB(Rangkap 1)</a>
                    <a class="dropdown-item" href="#">Cetak Label (Kertas Label) Bukti Bayar, NReg, No BPKB - Key No BPKB(Rangkap 2)</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__body">
        <div class="dt-responsive table-responsive">
            <table id="mytable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>BARCODE DATA</th>
                        <th>NO BPKB</th>
                        <th>NREG BPKB</th>
                        <th>TGL DIKELUARKAN</th>
                        <th>KODE PENERBITAN</th>
                        <th>WILAYAH KERJA</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>BARCODE DATA</th>
                        <th>NO BPKB</th>
                        <th>NREG BPKB</th>
                        <th>TGL DIKELUARKAN</th>
                        <th>KODE PENERBITAN</th>
                        <th>WILAYAH KERJA</th>
                    </tr>
                </tfoot>

            </table>
        </div>
    </div>
</div>

<?php
$this->load->view($this->controller . 'ModalView');
?>
<?php
$this->load->view($this->controller . 'ViewJs');
?>