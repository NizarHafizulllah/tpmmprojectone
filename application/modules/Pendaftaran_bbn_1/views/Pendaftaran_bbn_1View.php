<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\pages\data-table\css\buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\css\style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\css\jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\datedropper\css\datedropper.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha256-rByPlHULObEjJ6XQxW/flG2r+22R5dKiAoef+aXWfik=" crossorigin="anonymous" />

<script src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>

<script src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
<!-- Custom js -->
<script src="<?php echo base_url('assets/adminty/'); ?>\files\assets\pages\data-table\js\data-table-custom.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.6.4/jquery.contextMenu.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha256-rByPlHULObEjJ6XQxW/flG2r+22R5dKiAoef+aXWfik=" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\icon\font-awesome\css\font-awesome.min.css">
<style type="text/css">
    
    #select2-pemohon-container{
        padding: 2px 2px 2px 4px;
    }
    .select2-selection__arrow{
        top: 4px;
    }
    #context-menu-layer{
        z-index: 999999999;
    }


</style>
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
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
                        <div class="col-md-4 col-lg-2">
                            <label for="email-2" class="block">Jenis Pemohon</label>
                        </div>
                        <div class="col-sm-10">
                            <div class="form-radio">
                                <div class="radio radiofill radio-inverse radio-inline">
                                    <label>
                                        <input type="radio" name="pemohon_jenis" value="PRIBADI" data-bv-field="pemohon_jenis" checked>
                                        <i class="helper" ></i>Pribadi
                                    </label>
                                </div>
                                <div class="radio radiofill radio-inverse radio-inline active">
                                    <label>
                                        <input type="radio" name="pemohon_jenis" value="BIROJASA" data-bv-field="pemohon_jenis" >
                                        <i class="helper"></i>Birojasa
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
                            <?php echo form_dropdown("pemohon",$arr_pemohon,'','id="pemohon" class="form-control form-control-sm m-1"'); ?> 
                        </div>
                        <button class="btn btn-inverse btn btn-sm"><i class="icofont icofont-refresh"></i></button>
                        <button onclick="window.open='BbnSatuDataPemohon'" class=" btn btn-inverse btn btn-sm ml-1 waves-effect"><i class="icofont icofont-ui-add"></i></button>
                    </div>

                    <div class="form-group row mb-1">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block"></label>
                        </div>
                        <div class="col-md-8 col-lg-4">
                            <button type="button" id="btnCariServer" class="btn btn-inverse btn btn-sm ml-1"><i class="icofont icofont-search"></i>Tampil Data</button>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group row mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="confirm-2" class="block">No Resi Pembayaran</label>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <input id="vBarcodeBank" name="vBarcodeBank" type="text" class="form-control required" value="XXXXX">
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="checkbox-fade fade-in-inverse">
                                <label>
                                    <input type="hidden" name="vTypeKendaraan" value="0">
                                    <input type="checkbox" id="checkbox" name="vTypeKendaraan" value="1">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-inverse"></i>
                                    </span>
                                    <span>Diplomat</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="confirm-2" class="block">No Rangka</label>
                        </div>
                        <div class="col-md-8 col-lg-4">
                            <input id="vNoRangka" name="vNoRangka" type="text" class="form-control required">
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block"></label>
                        </div>
                        <div class="col-md-8 col-lg-10">
                            <button type="button" class="btn btn-inverse btn btn-sm ml-1"><i class="icofont icofont-ui-add"></i>Baru</button>
                            <button type="button" id="btnSimpan" class="btn btn-inverse btn btn-sm ml-1"><i class="icofont icofont-save"></i>Simpan</button>
                            <button type="button" class="btn btn-inverse btn btn-sm ml-1"><i class="icofont icofont-trash"></i>Hapus</button>
                            <button type="button" class="btn btn-inverse btn btn-sm ml-1"><i class="icofont icofont-print"></i>Cetak</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-block">
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
    $this->load->view($this->controller.'ViewJs');
 ?>