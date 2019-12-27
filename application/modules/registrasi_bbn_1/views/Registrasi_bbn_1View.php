<div class="row">
    <div class="col-lg-12">
        <div class="m-portlet" id="m_portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon">
                            <i class="flaticon-add"></i>
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

                            <div class="form-group row mb-0 nobpkbspan">
                                <div class="col-sm-3 col-form-label">
                                    <div class="form-check-inline">
                                        <label class="m-radio">
                                            <input type="radio" name="jeniscari" id="jeniscari0" value="0" data-bv-field="jeniscari" checked> No BPKB
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <input id="v_cari_no_bpkb" name="v_cari_no_bpkb" type="text" class="required form-control mr-1">
                                </div>
                            </div>

                            <div class="form-group row mb-0 noregspan">
                                <div class="col-sm-3 col-form-label">
                                    <div class="form-check-inline">
                                        <label class="m-radio">
                                            <input type="radio" name="jeniscari" id="jeniscari1" value="1" data-bv-field="jeniscari"> No Reg BPKB
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <input id="v_cari_no_reg" name="v_cari_no_reg" type="text" class="required form-control mr-1">
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
                                    <input id="v_cari_barcode" name="v_cari_barcode" type="text" class="required form-control mr-1">
                                </div>

                                <div class="col-sm-2">
                                    <button type="button" id="btnCari" class="btn btn-primary btn-md waves-effect waves-light"><i class="la la-search"></i> CARI DATA</button>
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
                            <div class="col-6">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">No. Identitas</label>
                                    <div class="col-sm-9">
                                        <input id="no_identitas" name="no_identitas" type="text" class="required form-control" placeholder="No. Identitas">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Nama Pemilik</label>
                                    <div class="col-sm-9">
                                        <input id="nama_pemilik1" name="nama_pemilik[]" type="text" class="required form-control mb-1" placeholder="Nama Pemilik 1" maxlength="36">
                                        <input id="nama_pemilik2" name="nama_pemilik1[]" type="text" class="required form-control" placeholder="Nama Pemilik 2" maxlength="36">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Alamat Pemilik</label>
                                    <div class="col-sm-9">
                                        <input id="alamat_pemilik1" name="alamat_pemilik[]" type="text" class="required form-control mb-1" placeholder="Alamat Pemilik 1" maxlength="36">
                                        <input id="alamat_pemilik2" name="alamat_pemilik[]" type="text" class="required form-control mb-1" placeholder="Alamat Pemilik 2" maxlength="36">
                                        <input id="alamat_pemilik3" name="alamat_pemilik[]" type="text" class="required form-control" placeholder="Alamat Pemilik 3" maxlength="36">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Kode Pos</label>
                                    <div class="col-sm-9">
                                        <input id="kode_pos" name="kode_pos" type="text" class="required form-control" placeholder="Kode Pos">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">No. Ponsel</label>
                                    <div class="col-sm-9">
                                        <input id="no_ponsel" name="no_ponsel" type="text" class="required form-control" placeholder="No. Ponsel">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("pekerjaan", $arr_pekerjaan, '', 'id="pekerjaan" class="form-control mr-2 drpdwn"');
                                        ?>
                                    </div>
                                </div>


                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Wilayah Polres</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("wilayah_polres", $arr_wilayah, '', 'id="wilayah_polres" class="form-control mr-2"');
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Provinsi</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("provinsi", $arr_provinsi, '', 'id="provinsi" class="form-control"');
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Kabupaten</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("kabupaten", array(), '', 'id="kabupaten" class="form-control"');
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Kecamatan</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("kecamatan", array(), '', 'id="kecamatan" class="form-control"');
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Kelurahan</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("keluarahan", array(), '', 'id="keluarahan" class="form-control"');
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="identitas_pabean" role="tabpanel">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Jenis Daftaran</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("jenis_daftaran", $arr_jenisdaftaran, '', 'id="jenis_daftaran" class="form-control"');
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">No. Faktur</label>
                                    <div class="col-sm-9">
                                        <input id="no_faktur" name="no_faktur" type="text" class="required form-control" placeholder="No. Faktur">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Tanggal Faktur</label>
                                    <div class="col-sm-9">
                                        <input id="tanggal_entry" name="tanggal_entry" type="text" value="<?php echo date('d/m/Y'); ?>" class="required form-control tanggal">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Importir / APM</label>
                                    <div class="col-sm-9">
                                        <input id="nama_importir" name="nama_importir" type="text" class="required form-control" placeholder="Nama Importir / APM">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Cara Import</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("cara_impor", $arr_impor, '', 'id="cara_impor" class="form-control mr-2"');
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Ket. Lain lain</label>
                                    <div class="col-sm-9">
                                        <textarea rows="3" cols="3" class="form-control" id="keterangan" name="keterangan" placeholder="Faktur Form A Tanggal:"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Pemohon</label>
                                    <div class="col-sm-9">
                                        <?php
                                        echo form_dropdown("pemohon", $arr_pemohon, '', 'id="pemohon" class="form-control mr-2"');
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">No. Pabean</label>
                                    <div class="col-sm-9">
                                        <input id="no_pabean" name="no_pabean" type="text" class="required form-control" placeholder="No. Pabean">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Tanggal Pabean</label>
                                    <div class="col-sm-9">
                                        <input id="tanggal_pabean" name="tanggal_pabean" type="text" value="<?php echo date('d/m/Y'); ?>" class="required form-control tanggal">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Pelabuhan</label>
                                    <div class="col-sm-9">
                                        <input id="pelabuhan" name="pelabuhan" type="text" class="required form-control" placeholder="Pelabuhan">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">No. PIB</label>
                                    <div class="col-sm-9">
                                        <input id="no_pib" name="no_pib" type="text" class="required form-control" placeholder="No. PIB">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-3 col-form-label">Tanggal PIB</label>
                                    <div class="col-sm-9">
                                        <input id="tanggal_pib" name="tanggal_pib" type="text" value="<?php echo date('d/m/Y'); ?>" class="required form-control tanggal">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <hr>

                <!-- No resi -->

                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mb-2">
                            <label class="col-2 col-form-label"><strong>No. Resi Pembayaran</strong></label>
                            <div class="col-4">
                                <input type="text" class="form-control mr-1" name="no_resi_pembayaran" id="no_resi_pembayaran" placeholder="No. Resi Pembayaran">
                            </div>

                            <div class="col-2">
                                <button class="btn btn-primary ml-1" type="button" id="btnCariServer"><i class="la la-refresh"></i></button>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-2 col-form-label"></label>
                            <div class="col-2">
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

                </div>

                <div class="row">
                    <div class="col-2 mb-2">
                        <label for="email-2" class=""> <strong>No. Rekom</strong></label>
                    </div>

                    <div class="col-4 mb-2">
                        <input id="no_rekom" name="no_rekom" type="text" class="required form-control" placeholder="No. Rekom">
                    </div>
                </div>

                <div class="form-group row">
                    <button class="col-2 btn btn-primary" type="button" id="btnCariServer"><i class="la la-download"></i> AMBIL NO. POLISI</button>

                    <div class="col-4">
                        <div class="input-group">
                            <span class="input-group input-group" id="basic-addon9">
                                <input type="text" id="nopol_satu" name="nopol_satu" class="col-2 form-control text-center mr-1" placeholder="X">
                                <input type="text" id="nopol_dua" name="nopol_dua" class="col-3 form-control text-center mr-1" placeholder="XXXX">
                                <input type="text" id="nopol_tiga" name="nopol_tiga" class="col-2 form-control text-center" placeholder="XXX">
                            </span>
                        </div>
                    </div>

                    <div class="col-2">
                        <label class="form-control text-center"><strong>BLM TERPAKAI</strong></label>
                    </div>

                    <div class="col-4">
                        <button class="btn btn-primary"><i class="la la-save"></i> SIMPAN</button>
                        <button class="btn btn-primary"><i class="la la-plus"></i> BARU</button>
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