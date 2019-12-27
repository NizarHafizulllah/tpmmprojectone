<div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="m-portlet" id="m_portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon">
                            <i class="flaticon-calendar"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            Entry Data BPKB
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="<?= site_url('Registrasi_bbn_1'); ?>" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air btn-sm">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>List Data BPKB</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="m-portlet__body">
                <form id="formCari">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="userName" class="block">Tanggal</label>
                                <div class="">
                                    <input id="tgl_cari" name="tgl_cari" value="<?php echo date('d/m/Y') ?>" type="text" class="required form-control tanggal">
                                </div>
                            </div>
                        </div>

                        <div class="col-9">
                            <div class="form row mb-0 nobpkbspan">
                                <div class="col-sm-3 col-form-label">
                                    <div class="form-check-inline">
                                        <label class="m-radio">
                                            <input type="radio" name="jeniscari" id="jeniscari0" value="0" data-bv-field="jeniscari" checked> No BPKB
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="input-group input-group-md">
                                        <input id="v_cari_no_bpkb" name="v_cari_no_bpkb" type="text" class="required form-control mr-1">
                                    </div>
                                </div>
                            </div>

                            <div class="form row mb-0 noregspan">
                                <div class="col-sm-3 col-form-label">
                                    <div class="form-check-inline">
                                        <label class="m-radio">
                                            <input type="radio" name="jeniscari" id="jeniscari1" value="1" data-bv-field="jeniscari"> No Reg BPKB
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="input-group input-group-md">
                                        <input id="v_cari_no_reg" name="v_cari_no_reg" type="text" class="required form-control mr-1">
                                    </div>
                                </div>
                            </div>

                            <div class="form row mb-0">
                                <div class="col-sm-3 barcodespan col-form-label">
                                    <div class="form-check-inline">
                                        <label class="m-radio">
                                            <input type="radio" name="jeniscari" id="jeniscari2" value="2" data-bv-field="jeniscari"> Barcode Berkas
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-5 barcodespan">
                                    <div class="input-group input-group-md">
                                        <input id="v_cari_barcode" name="v_cari_barcode" type="text" class="required form-control mr-1">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="">
                                        <button type="button" id="btnCari" class="btn btn-primary btn-md waves-effect waves-light"><i class="la la-search"></i> CARI DATA</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

                <hr>

                <ul class="nav nav-tabs  tabs" role="tablists">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#identitas_kendaraan" role="tab">I. IDENTITAS KENDARAAN</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#identitas_pemilik" role="tab">II. IDENTITAS PEMILIK</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#identitas_pabean" role="tab">III. IDENTITAS PABEAN / ASAL USUL</a>
                    </li>
                </ul>

                <div class="tab-content tabs card-block m-1">

                    <div class="tab-pane active" id="identitas_kendaraan" role="tabpanel">
                        <div class="row">

                            <div class="col-6">

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">No. BPKB</label>
                                    <div class="col-sm-9">
                                        <input id="no_bpkb" name="no_bpkb" type="text" class="input-group-sm required form-control" placeholder="No. BPKB">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Dikeluarkan Di</label>
                                    <div class="col-sm-9">
                                        <input id="dikeluarkandi" name="dikeluarkandi" type="text" class="required form-control" placeholder="Dikeluarkan di">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">No. Rangka</label>
                                    <div class="col-sm-9">
                                        <input id="norangka" name="norangka" type="text" class="required form-control" placeholder="No. Rangka">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Merk</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("merk", $arr_merk, '', 'id="merk" class="form-control mr-2 drpdwn"');
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Type</label>
                                    <div class="col-sm-9">
                                        <input id="tipe" name="tipe" type="text" class="required form-control" placeholder="Type">

                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Model</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("model", $arr_model, '', 'id="model" class="form-control mr-2 drpdwn"');
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Tahun Buat</label>
                                    <div class="col-sm-9">
                                        <input id="thn_buat" name="thn_buat" type="text" class="required form-control" placeholder="Tahun Buat">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Jml Roda</label>
                                    <div class="col-sm-9">
                                        <input id="jml_roda" name="jml_roda" type="text" class="required form-control" placeholder="Jumlah Roda">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Bahan Bakar</label>
                                    <div class="col-sm-9">
                                        <input id="bhn_bakar" name="bhn_bakar" type="text" class="required form-control" placeholder="Bahan Bakar">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Peruntukan</label>
                                    <div class="col-sm-9">
                                        <input id="peruntukan" name="peruntukan" type="text" class="required form-control" placeholder="Peruntukan">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Warna TNKB</label>
                                    <div class="col-sm-9">
                                        <input id="warna_tnkb" name="warna_tnkb" type="text" class="required form-control" placeholder="Warna TNKB">
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">No. Reg. BPKB</label>
                                    <div class="col-sm-9">
                                        <input id="noreg_bpkb" name="noreg_bpkb" type="text" class="required form-control" placeholder="No. Reg BPKB">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Tanggal</label>
                                    <div class="col-sm-9">
                                        <input id="tanggal" name="tanggal" type="text" class="input-group-sm required form-control tanggal" value="<?php echo date('d/m/Y'); ?>" placeholder=" Tanggal">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">No. Mesin</label>
                                    <div class="col-sm-9">
                                        <input id="no_mesin" name="no_mesin" type="text" class="required form-control" placeholder="No. Mesin">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Jenis</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("jenis", $arr_jenis, '', 'id="jenis" class="form-control mr-2 drpdwn"');
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Type 2</label>
                                    <div class="col-sm-9">
                                        <input id="tipe2" name="tipe2" type="text" class="required form-control" placeholder="Tipe">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Silinder</label>
                                    <div class="col-sm-9">
                                        <input id="silinder" name="silinder" type="text" class="required form-control" placeholder="Silinder">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Tahun Rakit</label>
                                    <div class="col-sm-9">
                                        <input id="thn_rakit" name="thn_rakit" type="text" class="required form-control" placeholder="Tahun Rakit">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Jml Sumbu</label>
                                    <div class="col-sm-9">
                                        <input id="jml_sumbu" name="jml_sumbu" type="text" class="required form-control" placeholder="Jumlah Sumbu">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Warna</label>
                                    <div class="col-sm-9">
                                        <input id="warna" name="warna" type="text" class="required form-control" placeholder="Warna">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">No. TPT</label>
                                    <div class="col-sm-9">
                                        <input id="no_tpt" name="no_tpt" type="text" class="required form-control" placeholder="No. TPT">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">No. SUT</label>
                                    <div class="col-sm-9">
                                        <input id="no_sut" name="no_sut" type="text" class="required form-control" placeholder="No. SUT">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="identitas_pemilik" role="tabpanel">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group input-group-sm row m-1">
                                    <label class="block">No. Identitas</label>
                                    <input id="no_identitas" name="no_identitas" type="text" class="required form-control" placeholder="No. Identitas">
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Nama Pemilik</label>
                                    <input id="nama_pemilik1" name="nama_pemilik[]" type="text" class="required form-control mb-1" placeholder="Nama Pemilik 1" maxlength="36">
                                    <input id="nama_pemilik2" name="nama_pemilik1[]" type="text" class="required form-control" placeholder="Nama Pemilik 2" maxlength="36">
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Alamat Pemilik</label>
                                    <input id="alamat_pemilik1" name="alamat_pemilik[]" type="text" class="required form-control mb-1" placeholder="Alamat Pemilik 1" maxlength="36">
                                    <input id="alamat_pemilik2" name="alamat_pemilik[]" type="text" class="required form-control mb-1" placeholder="Alamat Pemilik 2" maxlength="36">
                                    <input id="alamat_pemilik3" name="alamat_pemilik[]" type="text" class="required form-control" placeholder="Alamat Pemilik 3" maxlength="36">
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Kode Pos</label>
                                    <input id="kode_pos" name="kode_pos" type="text" class="required form-control" placeholder="Kode Pos">
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">No. Ponsel</label>
                                    <input id="no_ponsel" name="no_ponsel" type="text" class="required form-control" placeholder="No. Ponsel">
                                </div>


                                <div class="form-group input-group-sm row m-1">
                                    <label for="pekerjaan" class="block">Pekerjaan</label>
                                    <div class="input-group input-group-sm mb-0">
                                        <?php
                                        echo form_dropdown("pekerjaan", $arr_pekerjaan, '', 'id="pekerjaan" class="form-control mr-2 drpdwn"');
                                        ?>
                                        <!-- <button class="input-group-addon btn btn-primary btn-sm ml-2" id="basic-addon10">
                                            <span class=""><i class="flaticon-refresh"></i></span>
                                        </button> -->
                                    </div>
                                </div>


                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Wialayah Polres</label>
                                    <div class="input-group input-group-sm mb-0">
                                        <?php
                                        echo form_dropdown("wilayah_polres", $arr_wilayah, '', 'id="wilayah_polres" class="form-control mr-2"');
                                        ?>
                                        <!-- <button class="input-group-addon btn btn-primary btn-sm ml-2" id="basic-addon10">
                                            <span class=""><i class="flaticon-refresh"></i></span>
                                        </button> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">


                                <div class="form-group input-group-sm row m-1">
                                    <label class="block">Provinsi</label>
                                    <div class="input-group input-group-sm mb-0">
                                        <?php
                                        echo form_dropdown("provinsi", $arr_provinsi, '', 'id="provinsi" class="form-control"');
                                        ?>
                                        <!-- <button class="input-group-addon btn btn-primary btn-sm ml-2" id="basic-addon10">
                                            <span class=""><i class="flaticon-refresh"></i></span>
                                        </button> -->
                                    </div>
                                    <!-- <input id="provinsi" name="provinsi" type="text" class="required form-control" placeholder="Provinsi"> -->
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label class="block">Kabupaten</label>
                                    <?php
                                    echo form_dropdown("kabupaten", array(), '', 'id="kabupaten" class="form-control"');
                                    ?>
                                    <!-- <input id="kabupaten" name="kabupaten" type="text" class="required form-control" placeholder="Kabupaten"> -->
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label class="block">Kecamatan</label>
                                    <?php
                                    echo form_dropdown("kecamatan", array(), '', 'id="kecamatan" class="form-control"');
                                    ?>
                                    <!-- <input id="kecamatan" name="kecamatan" type="text" class="required form-control" placeholder="Kecamatan"> -->
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label class="block">Kelurahan</label>
                                    <?php
                                    echo form_dropdown("keluarahan", array(), '', 'id="keluarahan" class="form-control"');
                                    ?>
                                    <!-- <input id="keluarahan" name="keluarahan" type="text" class="required form-control" placeholder="Kelurahan"> -->
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="tab-pane" id="identitas_pabean" role="tabpanel">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Jenis Daftaran</label>
                                    <div class="input-group input-group-sm mb-0">
                                        <?php
                                        echo form_dropdown("jenis_daftaran", $arr_jenisdaftaran, '', 'id="jenis_daftaran" class="form-control"');
                                        ?>

                                        <!-- <button class="input-group-addon btn btn-primary btn-sm ml-2" id="basic-addon10">
                                            <span class=""><i class="flaticon-refresh"></i></span>
                                        </button> -->
                                    </div>
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">No Faktur</label>
                                    <input id="no_faktur" name="no_faktur" type="text" class="required form-control" placeholder="No. Faktur">
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">No. Pabean</label>
                                    <input id="no_pabean" name="no_pabean" type="text" class="required form-control" placeholder="No. Pabean">
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Pelabuhan</label>
                                    <input id="pelabuhan" name="pelabuhan" type="text" class="required form-control" placeholder="Pelabuhan">
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">No. PIB</label>
                                    <input id="no_pib" name="no_pib" type="text" class="required form-control" placeholder="No. PIB">
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Nama Importir / APM</label>
                                    <input id="nama_importir" name="nama_importir" type="text" class="required form-control" placeholder="Nama Importir / APM">
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Cara Import</label>
                                    <div class="input-group input-group-sm mb-0">
                                        <?php
                                        echo form_dropdown("cara_impor", $arr_impor, '', 'id="cara_impor" class="form-control mr-2"');
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Ket. Lain - lain</label>
                                    <textarea rows="3" cols="3" class="form-control" id="keterangan" name="keterangan" placeholder="Faktur Form A Tanggal:"></textarea>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Pemohon</label>
                                    <div class="input-group input-group-sm mb-0">
                                        <?php
                                        echo form_dropdown("pemohon", $arr_pemohon, '', 'id="pemohon" class="form-control mr-2"');
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label class="block">Tanggal Faktur</label>
                                    <input id="tanggal_entry" name="tanggal_entry" type="text" class="required form-control tanggal">
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Tanggal Pabean</label>
                                    <input id="tanggal_pabean" name="tanggal_pabean" type="text" class="required form-control tanggal">
                                </div>

                                <div class="form-group input-group-sm row m-1">
                                    <label for="userName" class="block">Tanggal PIB</label>
                                    <input id="tanggal_pib" name="tanggal_pib" type="text" class="required form-control tanggal">
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <hr>

                <!-- No resi -->

                <div class="row">
                    <div class="col-sm-2 mb-2">
                        <label for="email" class=""> <strong>No. Resi Pembayaran</strong></label>
                    </div>
                    <div class="col-sm-4 mb-2">
                        <div class="input-group mb-0">
                            <input type="text" class="form-control mr-1" name="no_resi_pembayaran" id="no_resi_pembayaran" placeholder="No. Resi Pembayaran">
                            <span class="input-group-addon btn btn-primary" id="basic-addon10">
                                <span class=""><i class="la la-refresh"></i></span>
                            </span>
                        </div>
                    </div>

                    <div class="col-sm-2 text-left">
                        <div class="checkbox-fade fade-in-primary">
                            <label>
                                <input type="checkbox" id="checkbox" name="Language" value="HTML">
                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-inverse"></i>
                                </span>
                                <span>From STNK</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2 mb-2">
                        <label for="email-2" class=""> <strong>No. Rekom</strong></label>
                    </div>

                    <div class="col-sm-4 mb-2">
                        <input id="no_rekom" name="no_rekom" type="text" class="required form-control" placeholder="No. Rekom">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2 mb-2">
                        <button class="btn btn-primary btn-block"><i class="la la-download"></i>Ambil No. Polisi</button>
                    </div>

                    <div class="col-sm-1">
                        <input id="nopol_satu" name="nopol_satu" type="text" class="required form-control form-control-uppercase form-control-center form-control-bold">
                    </div>

                    <div class="col-sm-1">
                        <input id="nopol_dua" name="nopol_dua" type="text" class="required form-control form-control-uppercase form-control-center form-control-bold">
                    </div>

                    <div class="col-sm-1">
                        <input id="nopol_tiga" name="nopol_tiga" type="text" class="required form-control form-control-uppercase form-control-center form-control-bold">
                    </div>

                    <div class="col-sm-2">
                        <label for="email-2" class="form-control form-control-center"><strong>BLM TERPAKAI</strong></label>
                    </div>

                    <div class="col-2">
                        <button class="btn btn-primary btn-block"><i class="la la-save"></i>Simpan</button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary btn-block"><i class="la la-plus"></i>Baru</button>
                    </div>
                </div>

                <!-- End No resi -->

            </div>
        </div>

        <!--end::Portlet-->
    </div>
    <?php
    $this->load->view($this->controller . 'ViewJs');
    ?>
</div>

<?php
$this->load->view($this->controller . 'ViewJs');
?>