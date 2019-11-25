                
                <div class="tab-pane active" id="entri_data_bpkb" role="tabpanel">

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="userName-2" class="block">Tanggal</label>
                                        <div class="">
                                            <input id="userName-2" name="userName" type="text" class="required form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-9">
                                    <div class="form row mb-2">
                                        <div class="col-sm-3">
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optradio"> No. BPKB
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <input id="confirm-2" name="confirm" type="text" class="form-control required block placeholder_color" placeholder="No BPKB">
                                        </div>
                                    </div>

                                    <div class="form row mb-2">
                                        <div class="col-sm-3">
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optradio"> No. Reg BPKB
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-sm-5">
                                            <input id="confirm-2" name="confirm" type="text" class="form-control required" placeholder="No. Rek BPKB">
                                        </div>
                                    </div>

                                    <div class="form row mb-2">
                                        <div class="col-sm-3">
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optradio"> Barcode Berkas
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-sm-5">
                                            <input id="confirm-2" name="confirm" type="text " class="form-control required" placeholder="Barcode Berkas">
                                        </div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light btn-block"><i class="icofont icofont-search"></i> Cari Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <ul class="nav nav-tabs tabs" role="tablists">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#identitas_kendaraan" role="tab">I. Identitas Kendaraan</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#identitas_pemilik" role="tab">II. Identitas Pemilik</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#identitas_pabean" role="tab">III. Identitas Pabean / Asal Usul</a>
                                </li>
                            </ul>

                            <div class="tab-content tabs card-block m-1">

                                <?php $this->load->view('SubTabSatu'); ?>

                                 <?php $this->load->view('SubTabDua'); ?>

                                <?php $this->load->view('SubTabTiga'); ?>

                            </div>

                            <hr>

                           
                        </div>