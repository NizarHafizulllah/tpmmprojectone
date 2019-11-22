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

                        <ul class="nav nav-tabs tabs" role="tablists">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#list_data" role="tab">List Data</a>
                            </li>
                        </ul>

                        <div class="tab-content tabs card-block">


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

                                <ul class="nav nav-tabs  tabs" role="tablists">
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

                                    <div class="tab-pane active" id="identitas_kendaraan" role="tabpanel">
                                        <div class="row">

                                            <div class="col-md-4 mb-0">

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">No. BPKB</label>
                                                    <input id="no_bpkb" name="no_bpkb" type="text" class="input-group-sm required form-control" placeholder="No. BPKB">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Tanggal</label>
                                                    <input id="userName-2" name="userName" type="text" class="input-group-sm required form-control" placeholder="Tanggal">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Merk</label>
                                                    <div class="input-group input-group-sm mb-0">
                                                        <select id="" class="form-control mr-1">
                                                            <option value="">- Pilih Merk -</option>
                                                            <option value="cheese">Cheese</option>
                                                            <option value="h">Hanry Die</option>
                                                            <option value="c">Come Leo</option>
                                                            <option value="h">Hampri Catlin</option>
                                                        </select>
                                                        <button class="input-group-addon btn btn-primary btn-sm" id="basic-addon10">
                                                            <span class=""><i class="icofont icofont-refresh"></i></span>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Tipe</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Tipe">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Tahun Buat</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Tahun Buat">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Jumlah Sumbu</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Jumlah Sumbu">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Peruntukan</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Peruntukan">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">No. SUT</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="No. SUT">
                                                </div>

                                            </div>

                                            <div class="col-md-4 mb-0">

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">No. Reg BPKB</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="No. Reg BPKB">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">No. Rangka</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="No. Rangka">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Jenis</label>
                                                    <div class="input-group input-group-sm mb-0">
                                                        <select id="" class="form-control mr-1">
                                                            <option value="">- Pilih Jenis -</option>
                                                            <option value="cheese">Cheese</option>
                                                            <option value="h">Hanry Die</option>
                                                            <option value="c">Come Leo</option>
                                                            <option value="h">Hampri Catlin</option>
                                                        </select>
                                                        <span class="input-group-addon btn btn-primary btn-sm" id="basic-addon10">
                                                            <span class=""><i class="icofont icofont-refresh"></i></span>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Tipe 2</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Tipe">
                                                </div>


                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Tahun Rakit</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Tahun Rakit">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Bahan Bakar</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Bahan Bakar">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">No. TPT</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="No. TPT">
                                                </div>

                                            </div>

                                            <div class="col-md-4 mb-0">
                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Dikeluarkan di</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Dikeluarkan di">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">No. Mesin</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="No. Mesin">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Model</label>
                                                    <div class="input-group input-group-sm mb-0">
                                                        <select id="" class="form-control mr-1">
                                                            <option value="">- Pilih Model -</option>
                                                            <option value="cheese">Cheese</option>
                                                            <option value="h">Hanry Die</option>
                                                            <option value="c">Come Leo</option>
                                                            <option value="h">Hampri Catlin</option>
                                                        </select>
                                                        <span class="input-group-addon btn btn-primary btn-sm mr-1" id="basic-addon10">
                                                            <span class=""><i class="icofont icofont-refresh"></i></span>
                                                        </span>
                                                        <span class="input-group-addon btn btn-primary btn-sm" id="basic-addon10">
                                                            <span class=""><i class="icofont icofont-plus"></i></span>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Silinder</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Silinder">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Jumlah Roda</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Jumlah Roda">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Warna</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Warna">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Warna TNKB</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Warna TNKB">
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="identitas_pemilik" role="tabpanel">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">No. Identitas</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="No. Identitas">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Nama Pemilik</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Nama Pemilik">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Alamat Pemilik</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Alamat Pemilik">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Kode Pos</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Kode Pos">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">No. Ponsel</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="No. Ponsel">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Pekerjaan</label>
                                                    <div class="input-group input-group-sm mb-0">
                                                        <select id="" class="form-control mr-1">
                                                            <option value="">- Pilih Pekerjaan -</option>
                                                            <option value="cheese">Cheese</option>
                                                            <option value="h">Hanry Die</option>
                                                            <option value="c">Come Leo</option>
                                                            <option value="h">Hampri Catlin</option>
                                                        </select>
                                                        <span class="input-group-addon btn btn-primary btn-sm" id="basic-addon10">
                                                            <span class=""><i class="icofont icofont-refresh"></i></span>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Wilayah / Polres</label>
                                                    <div class="input-group input-group-sm mb-0">
                                                        <select id="" class="form-control mr-1">
                                                            <option value="">- Pilih Wilayah -</option>
                                                            <option value="cheese">Cheese</option>
                                                            <option value="h">Hanry Die</option>
                                                            <option value="c">Come Leo</option>
                                                            <option value="h">Hampri Catlin</option>
                                                        </select>
                                                        <span class="input-group-addon btn btn-primary btn-sm" id="basic-addon10">
                                                            <span class=""><i class="icofont icofont-refresh"></i></span>
                                                        </span>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Set Data Kelurahan</label>
                                                    <button class="btn btn-primary btn-block btn-sm"><i class="icofont icofont-search"></i>Set Data Kelurahan</button>
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Provinsi</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Provinsi">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Kabupaten</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Kabupaten">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Kecamatan</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Kecamatan">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Kelurahan</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Kelurahan">
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="identitas_pabean" role="tabpanel">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Jenis Daftaran</label>
                                                    <div class="input-group input-group-sm mb-0">
                                                        <select id="" class="form-control mr-1">
                                                            <option value="">- Pilih Jenis Daftaran -</option>
                                                            <option value="cheese">Cheese</option>
                                                            <option value="h">Hanry Die</option>
                                                            <option value="c">Come Leo</option>
                                                            <option value="h">Hampri Catlin</option>
                                                        </select>
                                                        <span class="input-group-addon btn btn-primary btn-sm" id="basic-addon10">
                                                            <span class=""><i class="icofont icofont-refresh"></i></span>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">No Faktur</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="No. Faktur">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">No. Pabean</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="No. Pabean">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Pelabuhan</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Pelabuhan">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">No. PIB</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="No. PIB">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Nama Importir / APM</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control" placeholder="Nama Importir / APM">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Cara Import</label>
                                                    <div class="input-group input-group-sm mb-0">
                                                        <select id="" class="form-control mr-1">
                                                            <option value="">- Pilih Cara Import-</option>
                                                            <option value="cheese">Cheese</option>
                                                            <option value="h">Hanry Die</option>
                                                            <option value="c">Come Leo</option>
                                                            <option value="h">Hampri Catlin</option>
                                                        </select>
                                                        <span class="input-group-addon btn btn-primary btn-sm" id="basic-addon10">
                                                            <span class=""><i class="icofont icofont-refresh"></i></span>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Ket. Lain - lain</label>
                                                    <textarea rows="3" cols="3" class="form-control" placeholder="Faktur Form A Tanggal:"></textarea>
                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Pemohon</label>
                                                    <div class="input-group input-group-sm mb-0">
                                                        <select id="" class="form-control mr-1">
                                                            <option value="">- Pilih Pemohon -</option>
                                                            <option value="cheese">Cheese</option>
                                                            <option value="h">Hanry Die</option>
                                                            <option value="c">Come Leo</option>
                                                            <option value="h">Hampri Catlin</option>
                                                        </select>
                                                        <span class="input-group-addon btn btn-primary btn-sm mr-1" id="basic-addon10">
                                                            <span class=""><i class="icofont icofont-refresh"></i></span>
                                                        </span>
                                                        <span class="input-group-addon btn btn-primary btn-sm" id="basic-addon10">
                                                            <span class=""><i class="icofont icofont-plus"></i></span>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label class="block">Tanggal Faktur</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Tanggal Pabean</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control">
                                                </div>

                                                <div class="form-group input-group-sm row m-1">
                                                    <label for="userName-2" class="block">Tanggal PIB</label>
                                                    <input id="userName-2" name="userName" type="text" class="required form-control">
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <hr>

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

                            <div class="tab-pane" id="list_data" role="tabpanel">

                                <div class="row">
                                    <div class="col-sm-2 mb-2">
                                        <label for="userName-2" class="block">Tanggal BPKB</label>
                                    </div>

                                    <div class="col-sm-2">
                                        <input id="userName-2" name="userName" type="text" class="required form-control form-control-uppercase form-control-center form-control-bold">
                                    </div>

                                    <div class="col-2">
                                        <button class="btn btn-primary btn btn-sm btn-block"><i class="icofont icofont-social-cloudapp"></i>Ambil Data Server</button>
                                    </div>

                                    <div class="col-sm-2 text-left">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" id="checkbox" name="Language" value="HTML">
                                                <span class="cr">
                                                    <i class="cr-icon icofont icofont-ui-check txt-inverse"></i>
                                                </span>
                                                <span>Tampilkan Semua</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="dt-responsive table-responsive mt-2">
                                    <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th> ID</th>
                                                <th>Register</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Telp</th>
                                                <th>HP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>


                </div>


            </div>
        </div>
    </div>
</div>