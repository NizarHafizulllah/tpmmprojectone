<style type="text/css">
    #context-menu-layer {
        z-index: 999999999;
    }
</style>
<div class="page-body">
    <div class="row">
        <div class="col-md-12">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__body">
                    <form id="form_data">
                        <div class="form-group row mb-1">
                            <div class="col-md-4 col-lg-2">
                                <label for="userName-2" class="block">Tanggal</label>
                            </div>
                            <div class="col-md-8 col-lg-4">
                                <input id="v_tanggal" name="v_tanggal" type="text" class="required form-control form-control-sm tanggal" value="<?php echo date('d/m/Y'); ?>" placeholder="Tanggal">
                            </div>
                        </div>

                        <div class="form-group row mb-1">
                            <div class="col-md-4 col-md-2">
                                <label for="email-2" class="block">Jenis Pemohon</label>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-radio">
                                    <div class="radio radiofill radio-inverse radio-inline">
                                        <label class="m-radio">
                                            <input type="radio" name="pemohon_jenis" value="PRIBADI" id="pjPribadi" data-bv-field="pemohon_jenis" checked> Pribadi
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="radio radiofill radio-inverse radio-inline active">
                                        <label class="m-radio">
                                            <input type="radio" name="pemohon_jenis" value="BIROJASA" id="pjBirojasa" data-bv-field="pemohon_jenis"> Birojasa
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-1">
                            <div class="col-md-4 col-lg-2">
                                <label for="email-2" class="block">Pemohon</label>
                            </div>

                            <div class="col-md-8 col-lg-4">
                                <?php echo form_dropdown("pemohon", $arr_pemohon, '', 'id="pemohon" class="form-control form-control-sm m-1"'); ?>
                            </div>
                            <button class="btn btn-primary btn btn-sm mr-2" type="button">
                                <span>
                                    <i class="fa flaticon-refresh"></i>
                                    <span></span>
                                </span>
                            </button>
                            <button onclick="window.location('BbnSatuDataPemohon')" class="btn btn-primary btn btn-sm" type="button">
                                <span>
                                    <i class="fa flaticon-add"></i>
                                    <span></span>
                                </span>
                            </button>

                        </div>

                        <div class="form-group row mb-1">
                            <div class="col-md-4 col-lg-2">
                                <label for="userName-2" class="block"></label>
                            </div>
                            <div class="col-md-8 col-lg-4">
                                <button type="button" id="btnCariServer" class="btn btn-primary btn btn-sm ml-1"><i class=" flaticon-search"></i> Tampil Data</button>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row mb-2">
                            <div class="col-md-4 col-lg-2">
                                <label for="confirm-2" class="block">No Resi Pembayaran</label>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <input id="vBarcodeBank" name="vBarcodeBank" type="text" class="form-control form-control-sm required">
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="m-form__group form-group">
                                    <div class="m-checkbox-list">
                                        <label class="m-checkbox">
                                            <input type="hidden" name="vTypeKendaraan" value="0">
                                            <input type="checkbox" id="checkbox" name="vTypeKendaraan" value="1"> Diplomat
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <div class="col-md-4 col-lg-2">
                                <label for="confirm-2" class="block">No Rangka</label>
                            </div>
                            <div class="col-md-8 col-lg-4">
                                <input type="hidden" name="daftaran_id" id="daftaran_id">
                                <input id="vNoRangka" name="vNoRangka" type="text" class="form-control form-control-sm required">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <div class="col-md-4 col-lg-2">
                                <label for="userName-2" class="block"></label>
                            </div>
                            <div class="col-md-8 col-lg-10">
                                <button type="button" onclick="reset_form()" class="btn btn-primary btn btn-sm ml-1"><i class=" flaticon-add-circular-button"></i> Baru</button>
                                <button type="button" id="btnSimpan" class="btn btn-primary btn btn-sm ml-1"><i class="fa fa-save"></i> Simpan</button>
                                <button type="button" class="btn btn-primary btn btn-sm ml-1"><i class="flaticon-delete"></i> Hapus</button>
                                <button type="button" class="btn btn-primary btn btn-sm ml-1"><i class="fa fa-print"></i> Cetak</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__body">
            <div class="dt-responsive table-responsive">
                <table id="mytable" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NO BPKB</th>
                            <th>NO RANGKA</th>
                            <th>NO FAKTUR</th>
                            <th>BARCODE</th>
                            <th>PEMOHON</th>
                            <th>DIPLOMAT</th>
                            <th>PROSES</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
</div>


<?php
$this->load->view($this->controller . 'ViewJs');
?>