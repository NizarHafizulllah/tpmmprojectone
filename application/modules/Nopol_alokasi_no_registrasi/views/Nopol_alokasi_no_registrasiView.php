<div class="m-portlet">
    <div class="m-portlet__body">
        <div class="row">
            <div class="col-md-12">

                <ul class="nav nav-tabs  tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">SETTING ANTRIAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">PEMBATALAN ALOKASI NOPOL</a>
                    </li>
                </ul>

                <div class="tab-content tabs card-block">
                    <div class="tab-pane active" id="home1" role="tabpanel">
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">POLDA</label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <select id="" class="form-control">
                                        <option value="">- Pilih POLDA -</option>
                                        <option value="cheese">Cheese</option>
                                        <option value="h">Hanry Die</option>
                                        <option value="c">Come Leo</option>
                                        <option value="h">Hampri Catlin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-8 col-lg-4">
                                <button class="btn btn-primary ml-1" type="button" id="btnCariServer"><i class="la la-search"></i> CARI DATA</button>
                                <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#large-Modal"><i class="la la-plus"></i> BUAT ALOKASI BARU</button>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">KABUPATEN</label>
                            <div class="col-sm-6">
                                <div class="input-group m-0">
                                    <select id="" class="form-control">
                                        <option value="">- Pilih KABUPATEN -</option>
                                        <option value="cheese">Cheese</option>
                                        <option value="h">Hanry Die</option>
                                        <option value="c">Come Leo</option>
                                        <option value="h">Hampri Catlin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">NO. POLISI</label>
                            <div class="col-sm-2">
                                <input type="text" name="nama" class="form-control p.thick">
                            </div>
                        </div>

                        <hr>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>POLDA</th>
                                    <th>KD WILAYAH</th>
                                    <th>NO URUT</th>
                                    <th>HURUF SERI</th>
                                    <th>NOPOL</th>
                                    <th>WARNA TNKB</th>
                                    <th>JENIS KENDARAAN</th>
                                    <th>TGL INSERT</th>
                                    <th>TGL PAKAI</th>
                                    <th>REKOM</th>
                                    <th>TGL REKOM</th>
                                    <th>NO BPKB</th>
                                    <th>NO RANGKA</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class="tab-pane" id="profile1" role="tabpanel">
                        <div class="form-group input-group-sm row mb-2">
                            <label class="col-sm-2 col-form-label">NO POLISI</label>
                            <div class="col-sm-3">
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <button class="btn btn-primary ml-1"><i class="la la-check"></i> PROSES</button>
                        </div>

                        <div class="form-group input-group-sm row mb-2">
                            <label class="col-sm-2 col-form-label">NO POLISI</label>
                            <div class="col-sm-3">
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <button class="btn btn-primary ml-1"><i class="la la-check"></i> PROSES</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
$this->load->view($this->controller . 'ModalView');
?>