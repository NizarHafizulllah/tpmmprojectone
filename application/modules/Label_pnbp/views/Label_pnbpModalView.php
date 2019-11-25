
    <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pembuatan Label PNBP</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                </div>
                <div class="modal-body">
                    <form id="form-baru">

                    <div class="row m-0">
                        <div class="col-sm-12 mb-1">
                             <div class="m-portlet m-portlet--mobile">
                                <div class="m-portlet__body">
                                    
                                        <div class="form-group row mb-1">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="email-2" class="block">Jenis Penerbitan</label>
                                            </div>
                                            <div class="col-md-8 col-lg-9">
                                                <?php 
                                                $arr_jenis = array( '' => '',
                                                                    1 => "BBN1 / R2", 
                                                                    2 => "BBN1 / R4",
                                                                    3 => "GANTI KEPEMILIKAN / R2",
                                                                    4 => "GANTI KEPEMILIKAN / R4",
                                                                    5 => "DUPLIKAT, GANTI BUKU / R2",
                                                                    6 => "DUPLIKAT, GANTI BUKU / R4",
                                                                    7 => "EX LUAR DAERAH / R2",
                                                                    8 => "EX LUAR DAERAH / R4",
                                                                    );
                                                echo form_dropdown("v_jenis_penerbitan",$arr_jenis,'','id="v_jenis_penerbitan" class="form-control form-control-sm"'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="email-2" class="block">Wilayah Kerja</label>
                                            </div>
                                            <div class="col-md-8 col-lg-6">
                                                <?php 
                                                    echo form_dropdown("v_wilayah_kerja",$arr_wilayah,'','id="v_wilayah_kerja" class="form-control form-control-sm"'); 
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="email-2" class="block">Tanggal Dikeluarkan</label>
                                            </div>
                                            <div class="col-md-8 col-lg-6">
                                               <input type="text" name="v_tanggal_dikeluarkan" id="v_tanggal_dikeluarkan" class="form-control form-control-sm tanggal" value="<?php echo date('d/m/Y'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="email-2" class="block">Jumlah Data</label>
                                            </div>
                                            <div class="col-md-8 col-lg-6">
                                               <input type="text" name="v_jumlah_buku" id="v_jumlah_buku" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="email-2" class="block">Bulan & Tahun</label>
                                            </div>
                                            <div class="col-md-8 col-lg-6">
                                                <input type="text" name="v_bulan_tahun_bpkb" id="v_bulan_tahun_bpkb" class="form-control form-control-sm" value="<?php echo '/'.number2roman(date('m'), true).'/'.date('Y'); ?>" readonly>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <button type="button" id="btnSimpan" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    