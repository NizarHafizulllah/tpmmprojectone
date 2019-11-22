<div class="row">
    <div class="col-sm-12">
        <!-- Bootstrap tab card start -->
        <div class="card">
            <div class="card-header">
                <h5>Bootstrap Tab</h5>

            </div>
                <ul class="nav nav-pills">
                  <li><a href="#tab1" class="active" data-toggle="tab">One</a></li>
                  <li><a href="#tab2" data-toggle="tab">Two</a></li>
                  <li><a href="#tab3" data-toggle="tab">Three</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab1">
                        <p>This is the content for tab 1.</p>

                        <ul class="nav nav-pills">
                          <li><a href="#tab1-1" data-toggle="tab">Subtab One</a></li>
                          <li><a href="#tab1-2" data-toggle="tab">Subtab Two</a></li>
                          <li><a href="#tab1-3" data-toggle="tab">Subtab Three</a></li>
                        </ul>

                        <div class="tab-content" style="margin-bottom:50px">
                            <div class="tab-pane fade active in" id="tab1-1">This is the content for subtab 11.</div>
                            <div class="tab-pane fade" id="tab1-2">This is the content for subtab 12.</div>
                            <div class="tab-pane fade" id="tab1-3">This is the content for subtab 13.</div>
                        </div>

                    </div>
                    
                    <div class="tab-pane fade" id="tab2">
                        <p>This is the content for tab 2.</p>
                    </div>
                    
                    <div class="tab-pane fade" id="tab3">
                        <p>This is the content for tab 3.</p>

                        <ul class="nav nav-pills">
                          <li><a href="#tab3-1" data-toggle="tab">Subtab One</a></li>
                          <li><a href="#tab3-2" data-toggle="tab">Subtab Two</a></li>
                          <li><a href="#tab3-3" data-toggle="tab">Subtab Three</a></li>
                        </ul>

                        <div class="tab-content" style="margin-bottom:50px">
                            <div class="tab-pane fade active in" id="tab3-1">This is the content for subtab 31.</div>
                            <div class="tab-pane fade" id="tab3-2">This is the content for subtab 32.</div>
                            <div class="tab-pane fade" id="tab3-3">This is the content for subtab 33.</div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Bootstrap tab card end -->
    </div>
</div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-block">

                    <ul class="nav nav-tabs tabs" role="tablists">

                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#entri_data_bpkb" role="tab">Entri Data BPKB</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#list_data" role="tab">List Data</a>
                        </li>
                    </ul>

                    <div class="tab-content tabs card-block">


                        <?php $this->load->view('TabSatu'); ?>

                        
                        <?php $this->load->view('TabDua'); ?>
                    </div>


                     <div class="row">
                                <div class="col-sm-2 mb-2">
                                    <label for="email-2" class=""> <strong>No. Resi Pembayaran</strong></label>
                                </div>

                                <div class="col-sm-4 mb-2">
                                    <div class="input-group mb-0">
                                        <input type="text" class="form-control mr-1" placeholder="No. Resi Pembayaran">
                                        <span class="input-group-addon btn btn-primary" id="basic-addon10">
                                            <span class=""><i class="icofont icofont-refresh"></i></span>
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
                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="No. Rekom">
                                </div>
                            </div>

                    <div class="row">
                                <div class="col-sm-2 mb-2">
                                    <button class="btn btn-primary btn btn-sm btn-block"><i class="icofont icofont-refresh"></i>Ambil No. Polisi</button>
                                </div>

                                <div class="col-sm-1">
                                    <input id="userName-2" name="userName" type="text" class="required form-control form-control-uppercase form-control-center form-control-bold">
                                </div>

                                <div class="col-sm-1">
                                    <input id="userName-2" name="userName" type="text" class="required form-control form-control-uppercase form-control-center form-control-bold">
                                </div>

                                <div class="col-sm-1">
                                    <input id="userName-2" name="userName" type="text" class="required form-control form-control-uppercase form-control-center form-control-bold">
                                </div>

                                <div class="col-sm-2">
                                    <label for="email-2" class="form-control form-control-center"><strong>BLM TERPAKAI</strong></label>
                                </div>

                                <div class="col-2">
                                    <button class="btn btn-primary btn btn-sm btn-block"><i class="icofont icofont-save"></i>Simpan</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-primary btn btn-sm btn-block"><i class="icofont icofont-plus"></i>Baru</button>
                                </div>
                            </div>

                </div>


            </div>
        </div>
    </div>
</div>