<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Registrasi BBN1</h3>
    </div>
    <div class="box box-default">
        <div class="tab-content" style="border: 1px solid #EEE">
            <div role="tabpanel" class="tab-pane active" id="data-one">
                <div class="box box-default">
                    <input type="hidden" id="edit">
                    <form action="#" class="form row" id="form-cari-data">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="">Tanggal Registrasi</label>
                                <div>
                                    <input name="tgl_daftar" id="tgl_daftar" type="text" class="form-control datepicker" value="{{date('d-m-Y')}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="form-horizontal">
                                <label for="">Pencarian</label>
                                <div class="form-group">
                                    <label class="col-sm-3">
                                        <select name="is_cari" class="form-control">
                                            <option value="0">No BPKB</option>
                                            <option value="1">No Reg BPKB</option>
                                            <option value="2">Barcode Berkas</option>
                                        </select>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="cari" class="form-control" aria-label="...">
                                    </div>
                                    <div class="col-sm-2">
                                        <button class="btn btn-primary" id="cari-data">
                                            <i class="glyphicon glyphicon-search"></i> Cari Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
                <div class="box box-default">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#one" aria-controls="one" role="tab" data-toggle="tab">I. Identitas Kendaraan</a>
                        </li>
                        <li role="presentation">
                            <a href="#two" aria-controls="two" role="tab" data-toggle="tab">II. Identitas Pemilik</a>
                        </li>
                        <li role="presentation">
                            <a href="#three" aria-controls="three" role="tab" data-toggle="tab">III. Identitas Pabean/Asal-usul</a>
                        </li>
                    </ul>
                    <form action="#" class="form row" id="form-register-bbn1">
                        <!-- Tab panes -->
                        <div class="tab-content" style="border: 1px solid #EEE">
                            <div role="tabpanel" class="tab-pane active" id="one">
                               <?php $this->load->view('SubTabSatu'); ?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="two">
                                <?php $this->load->view('SubTabDua'); ?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="three">
                                <?php $this->load->view('SubTabTiga'); ?>
                            </div>
                        </div>
                        <!-- End Tab Content -->
                        <div class="clearfix"></div>
                        <div class="form-horizontal" style="margin-top: 15px; padding: 10px;border: 1px solid #EEE">
                            <div class="form-group">
                                <label for="" class="col-sm-2">No. Resi Pembayaran</label>
                                <div class="col-sm-4">
                                    <input name="barcode" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2">No. Rekom</label>
                                <div class="col-sm-4">
                                    <input name="no_rekom" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group" id="nopol-container">
                                <label for="" class="col-sm-2">No. Polisi</label>
                                <div class="col-sm-3">
                                    <input name="no_polisi" type="text" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-success" id="add-nopol">Ambil No. Polisi</button>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-2">
                                    <input type="submit" class="btn btn-block btn-lg btn-primary" id="form-registrasi-submit" value="SIMPAN">
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-block btn-lg btn-primary">Baru</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="list-two">
                <?php $this->load->view($this->controller.'ListData'); ?>
            </div>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#data-one" aria-controls="one" role="tab" data-toggle="tab" id="data-form">Entry Data BPKB</a>
            </li>
            <li role="presentation">
                <a href="#list-two" aria-controls="two" role="tab" data-toggle="tab">List Data</a>
            </li>
        </ul>
    </div>
</div>


<!-- Modal -->
<div id="ambil-data-kecamatan" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Data Detail Kelurahan</h4>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="form-horizontal">
                        <label for="">Pencarian</label>
                        <form action="#" class="form row" id="form-cari-kel-kec-data">
                            <div class="form-group">
                                <label class="col-sm-3">
                                    <select name="is_cari" class="form-control" id="kel-kec-tipe">
                                        <option value="list-kelurahan">Kelurahan</option>
                                        <option value="list-kecamatan">Kecamatan</option>
                                    </select>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="cari" class="form-control" aria-label="..." id="kel-kec-cari">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="table-kelurahan-bbn-1"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="ambil-data-kel-kec">Ambil Data Kelurahan</button>
            </div>
        </div>

    </div>
</div>