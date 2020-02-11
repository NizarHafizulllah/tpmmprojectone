<div class="m-portlet">
    <div class="m-portlet__body">
        <div class="row">
            <div class="col-md-12">

                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">No. BPKB</label>
                    <div class="col-sm-3">
                        <input type="text" name="nama" class="form-control" placeholder="No. BPKB">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">No. Rangka</label>
                    <div class="col-sm-3">
                        <input type="text" name="nama" class="form-control" placeholder="No. Rangka">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Barcode Berkas</label>
                    <div class="col-sm-3">
                        <input type="text" name="nama" class="form-control" placeholder="Barcode Berkas">
                    </div>
                    <div class="col-md-8 col-lg-4">
                        <button class="btn btn-info ml-1" type="button" id="btnCariServer"><i class="la la-search"></i> CARI DATA </button>
                        <button class="btn btn-warning ml-1" data-toggle="modal" data-target="#large-Modal"><i class="la la-plus"></i> BARU</button>
                    </div>
                </div>

                <hr>

                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Tanggal Verifikasi</label>
                    <div class="col-sm-3">
                        <input type="text" name="nama" class="form-control tanggal" value="<?php echo date('d/m/Y'); ?>" placeholder="Tanggal">
                    </div>

                    <div class="col-md-8 col-lg-4">
                        <button class="btn btn-success ml-1" type="button" id="btnCariServer"><i class="la la-check"></i> VERIFIKASI</button>
                        <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#large-Modal"><i class="la la-edit"></i> RUBAH</button>
                    </div>
                </div>

                <hr>

                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">No. BPKB</label>
                    <div class="col-sm-3">
                        <input type="text" name="nama" class="form-control" placeholder="No. BPKB">
                    </div>
                    <label class="col-sm-2 col-form-label">Tempat</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control" placeholder="Tempat">
                    </div>
                </div>

                <hr>

                <ul class="nav nav-tabs  tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#i" role="tab">I. IDENTITAS PEMILIK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#ii" role="tab">II. IDENTITAS KENDARAAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#iii" role="tab">III. DOK. REG PERTAMA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#iv" role="tab">IV. DIKELUARKAN OLEH/NOREG</a>
                    </li>
                </ul>

                <div class="tab-content tabs card-block">
                    <div class="tab-pane active" id="i" role="tabpanel">

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Nama Pemilik</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Pemilik">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Alamat Pemilik</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="Alamat Pemilik">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">No. Identitas</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="No. Identitas">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="Pekerjaan">
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="ii" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">No. Polisi</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="No. Polisi">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Merk</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Merk">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Type</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Type">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Type 2</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Type 2">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Jenis</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Jenis">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Model</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Model">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Tahun Buat</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Tahun Buat">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Silinder</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Silinder">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Warna</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Warna">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">No. Rangka</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="No. Rangka">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">No. Mesin</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="No. Mesin">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Jml Roda</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Jml Roda">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Jml Sumbu</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Jml Sumbu">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Bahan Bakar</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Bahan Bakar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="iii" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">No. Faktur</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="No. Faktur">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Tgl. Faktur</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Tgl. Faktur">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">APM / Importir</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="APM / Importir">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">No. Form A/B</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="No. Form A/B">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Tgl. Form A/B</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Tgl. Form A/B">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Kantor Bea Cukai</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Kantor Bea Cukai">
                                    </div>
                                </div>


                            </div>

                            <div class="col-sm-6">

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">No. SUT</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="No. SUT">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">No. TPT</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="No. TPT">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">No. PIB</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="No. PIB">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Tgl. PIB</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Tgl. PIB">
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Ket. Lain lain</label>
                                    <div class="col-sm-8">
                                        <textarea rows="3" cols="3" class="form-control" placeholder="Ket. Lain lain"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="iv" role="tabpanel">
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Dikeluarkan Oleh</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="Dikeluarkan Oleh">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">No. Reg BPKB</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="No. Reg BPKB">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>