<div class="row">
    <div class="col-lg-12">
        <div class="m-portlet" id="m_portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon">
                            <i class="flaticon-calendar"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            List Data BPKB
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="<?= site_url('Registrasi_bbn_1/baru'); ?>" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air btn-sm">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>Entry Data BPKB</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="userName-2" class="block">Tanggal</label>
                            <div class="input-group input-group-md">
                                <input id="tanggal" name="tanggal" type="text" class="required form-control mr-1 tanggal">
                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-search"></i> Ambil Data Server</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="dt-responsive table-responsive">
                        <table id="mytable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No BPKB</th>
                                    <th>No Reg BPKB</th>
                                    <th>Tgl BPKB</th>
                                    <th>No Rangka</th>
                                    <th>No Mesin</th>
                                    <th>No Polisi</th>
                                    <th>Merk</th>
                                    <th>Model</th>
                                    <th>Jenis</th>
                                    <th>Jml Roda</th>
                                    <th>Warna TNKB</th>
                                    <th>No Faktur</th>
                                    <th>Nama Pemilik</th>
                                    <th>Nama Pemohon</th>
                                    <th>Operator</th>
                                </tr>
                            </thead>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php 
$this->load->view($this->controller.'ListDataJs');
?>