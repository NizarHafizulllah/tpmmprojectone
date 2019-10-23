<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No. BPKB</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No. Rangka</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-success form-control"><i class="icofont icofont-database"> </i> Cari Data</button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Barcode</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" id="btnBaru" class="btn btn-primary form-control"><i class="icofont icofont-ui-add"> </i> Baru (F11)</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Verifikasi</label>
                                    <div class="col-sm-3">
                                        <input type="date" name="nama" pattern="" class="form-control">
                                    </div>
                                     <div class="col-sm-3">
                                        <button type="button" id="btnVerifikasi" class="btn btn-primary form-control"><i class="icofont icofont-save"> </i> Verifikasi BPKB (F10)</button>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" id="btnRubah" class="btn btn-warning form-control"><i class="icofont icofont-edit"> </i> Rubah (F5)</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No. BPKB</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <label class="col-sm-1 col-form-label">Tempat</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs md-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#TabPemilik" role="tab">I. Identitas Pemilik</a>
                                        <div class="slide"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#TabKendaraan" role="tab">II. Identitas Kendaraan</a>
                                        <div class="slide"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#TabRegPertama" role="tab">III. Dokumen Reg. Pertama</a>
                                        <div class="slide"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#TabDikeluarkanOleh" role="tab">IV. Dikeluarkan Oleh/No. Reg</a>
                                        <div class="slide"></div>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content card-block">
                                    <div class="tab-pane active" id="TabPemilik" role="tabpanel">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama Pemilik</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nama" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Alamat Pemilik</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows=3></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Pekerjaan Pemilik</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nama" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">No. Identitas</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nama" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="TabKendaraan" role="tabpanel">
                                        <p class="m-0">2.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                                    </div>
                                    <div class="tab-pane" id="TabRegPertama" role="tabpanel">
                                        <p class="m-0">3. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p>
                                    </div>
                                    <div class="tab-pane" id="TabDikeluarkanOleh" role="tabpanel">
                                        <p class="m-0">4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    $this->load->view($this->controller.'ViewJs');
?>