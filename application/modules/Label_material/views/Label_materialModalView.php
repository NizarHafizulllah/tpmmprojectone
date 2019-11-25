
    <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pembuatan Label Barcode</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                </div>
                <div class="modal-body">
                    <form id="form-baru">

                    <div class="row m-0">
                        <div class="col-sm-12 mb-1">
                            <div class="card m-0">
                                <div class="card-block">
                                    
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
                                                <label for="email-2" class="block">Jumlah Buku</label>
                                            </div>
                                            <div class="col-md-8 col-lg-6">
                                               <input type="text" name="v_jumlah_buku" id="v_jumlah_buku" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row m-0">
                        <div class="col-sm-5 mb-1">
                            <div class="card m-0">
                                <div class="card-block">

                                    <div class="form-group row mb-1">
                                        <div class="col-md-12 col-lg-12">
                                            <label>
                                                <input type='hidden' value='1' name='v_is_no_bpkb_null'>
                                                <input type="checkbox" name="v_is_no_bpkb_null" id="v_is_no_bpkb_null" value="0" class="form-control-sm">
                                                <i class="helper"></i> No. BPKB Dikosongkan
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-1">
                                        <div class="col-md-6 col-lg-6">
                                            <label for="email-2" class="block">Seri BPKB</label>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <input type="text" name="v_seri_bpkb" id="v_seri_bpkb" class="form-control form-control-sm" value="<?php echo $this->session['vl_seri_bpkb']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-1">
                                        <div class="col-md-6 col-lg-6">
                                            <label for="email-2" class="block">Kode Wilayah</label>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <input type="text" name="v_kode_wialayah" id="v_kode_wialayah" class="form-control form-control-sm" value="<?php echo $this->session['vl_kode_wil_bpkb']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-1">
                                        <div class="col-md-6 col-lg-6">
                                            <label for="email-2" class="block">No Awal</label>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <input type="text" name="v_no_awal" id="v_no_awal" class="form-control form-control-sm">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-1">
                                        <div class="col-md-6 col-lg-6">
                                            <label for="email-2" class="block">No Akhir</label>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <input type="text" name="v_no_akhir" id="v_no_akhir" class="form-control form-control-sm" readonly>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="card">
                                <div class="card-block">
                                    
                                    <div class="form-group row mb-1">
                                        <div class="col-md-12 col-lg-12">
                                            <label>
                                                &nbsp;
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-1">
                                        <div class="col-md-6 col-lg-6">
                                            <label for="email-2" class="block">Bulan & Tahun No Reg</label>
                                        </div>
                                        <div class="col-md-6 col-lg-5">
                                            <input type="text" name="v_bulan_tahun_bpkb" id="v_bulan_tahun_bpkb" class="form-control form-control-sm" value="<?php echo '/'.number2roman(date('m'), true).'/'.date('Y'); ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-1">
                                        <div class="col-md-6 col-lg-6">
                                            <label for="email-2" class="block">Akhiran No Reg</label>
                                        </div>
                                        <div class="col-md-6 col-lg-5">
                                            <input type="text" name="v_akhiran_reg" id="v_akhiran_reg" class="form-control form-control-sm" value="<?php echo $this->session['vl_akhiran_noreg']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-1">
                                        <div class="col-md-6 col-lg-6">
                                            <label for="email-2" class="block">No Awal Reg</label>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <input type="text" name="v_reg_no_awal" id="v_reg_no_awal" class="form-control form-control-sm">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-1">
                                        <div class="col-md-6 col-lg-6">
                                            <label for="email-2" class="block">No Akhir Reg</label>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <input type="text" name="v_reg_no_akhir" id="v_reg_no_akhir" class="form-control form-control-sm" readonly>
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
    