<div class="m-portlet">
    <div class="m-portlet__body">
        <ul class="nav nav-tabs  tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#entry" role="tab">ENTRY DATA PENYERAHAN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#list" role="tab">LIST DATA PENYERAHAN</a>
            </li>
        </ul>

        <div class="tab-content tabs card-block">
            <div class="tab-pane active" id="entry" role="tabpanel">

                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mb-2">
                            <label class="col-1 col-form-label">No. BPKB</label>
                            <div class="col-3">
                                <input type="text" id="no_bpkb1" name="no_bpkb1" class="form-control" placeholder="No. BPKB">
                            </div>
                            <div class="col-7">
                                <button class=" btn btn-primary ml-1" type="button" id="btnambildataserver"><i class="la la-search"></i> AMBIL DATA SERVER</button>
                                <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#large-Modal"><i class="la la-plus"></i> BARU</button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-3">
                        <div class="form-group row mb-2">
                            <label class="col-4 col-form-label">No. BPKB</label>
                            <div class="col-8">
                                <input type="text" id="no_bpkb" name="no_bpkb" class="form-control" placeholder="No. BPKB">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-4 col-form-label">Tgl. BPKB</label>
                            <div class="col-8">
                                <input type="text" id="tgl_bpkb" name="tgl_bpkb" class="form-control" placeholder="Tgl. BPKB">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-4 col-form-label">No. Polisi</label>
                            <div class="col-8">
                                <input type="text" id="no_polisi" name="no_polisi" class="form-control" placeholder="No. Polisi">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-4 col-form-label">Merk</label>
                            <div class="col-8">
                                <input type="text" id="merk" name="merk" class="form-control" placeholder="Merk">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-4 col-form-label">Type</label>
                            <div class="col-8">
                                <input type="text" id="type" name="type" class="form-control" placeholder="Type">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-4 col-form-label">Jenis</label>
                            <div class="col-8">
                                <input type="text" id="jenis" name="jenis" class="form-control" placeholder="Jenis">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-4 col-form-label">Model</label>
                            <div class="col-8">
                                <input type="text" id="model" name="model" class="form-control" placeholder="Model">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-4 col-form-label">Pemilik</label>
                            <div class="col-8">
                                <input type="text" id="pemilik" name="pemilik" class="form-control" placeholder="Pemilik">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-4 col-form-label">Pemohon</label>
                            <div class="col-8">
                                <input type="text" id="pemohon" name="pemohon" class="form-control" placeholder="Pemohon">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block ml-1" type="button" id="btnambildataserver"><i class="la la-plus"></i> TAMBAH DATA</button>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row mb-2">
                            <label class="col-4 col-form-label">BPKB Awal</label>
                            <div class="col-8">
                                <input type="text" id="pemilik" name="pemilik" class="form-control" placeholder="No. BPKB Awal">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-4 col-form-label">BPKB Akhir</label>
                            <div class="col-8">
                                <input type="text" id="pemohon" name="pemohon" class="form-control" placeholder="No. BPKB Akhir">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block ml-1" type="button" id="btnambildataserver"><i class="la la-plus"></i> TAMBAH DATA</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="card">
                            <div class="m-portlet__body">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="dt-responsive table-responsive">
                                            <table id="mytable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>NO.</th>
                                                        <th>NO BPKB</th>
                                                        <th>TGL. BPKB</th>
                                                        <th>NO. POLISI</th>
                                                        <th>MERK</th>
                                                        <th>TYPE</th>
                                                        <th>JENIS</th>
                                                        <th>MODEL</th>
                                                        <th>NAMA PEMILIK</th>
                                                        <th>PEMOHON</th>
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
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>Jacob</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
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

                                        <hr>

                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Tgl. Ambil</label>
                                            <div class="col-sm-3">
                                                <input id="tanggal" name="tanggal" type="text" value="<?php echo date('d/m/Y'); ?>" class="required form-control mr-1 tanggal">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Pemohon</label>
                                            <div class="col-sm-10">
                                                <div class="input-group m-0">
                                                    <select id="" class="form-control">
                                                        <option value="">- Pilih Pemohon -</option>
                                                        <option value="cheese">Cheese</option>
                                                        <option value="h">Hanry Die</option>
                                                        <option value="c">Come Leo</option>
                                                        <option value="h">Hampri Catlin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <label class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <textarea rows="3" cols="3" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <button class="btn btn-primary btn-block ml-1" type="button" id="btnambildataserver"><i class="la la-print"></i> SIMPAN & CETAK TANDA TERIMA</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane" id="list" role="tabpanel">
                <div class="form-group row mb-2">
                    <label class="col-sm-2 col-form-label">Tgl. Awal S/d Akhir</label>
                    <div class="col-sm-4">

                        <div class="input-daterange input-group tanggalspan mb-1">
                            <input type="text" class="input-sm form-control m-input tanggal" id="CrTanggalAwal" value="<?php echo date('d/m/Y'); ?>" name="CrTanggalAwal" placeholder="Tanggal Awal">
                            <div class="input-group-append">
                                <span class="input-group-text">S/d</span>
                            </div>
                            <input type="text" class="input-sm form-control m-input tanggal" id="CrTanggalAkhir" name="CrTanggalAkhir" placeholder="Tanggal Akhir" value="<?php echo date('d/m/Y'); ?>">
                        </div>

                    </div>

                    <div class="col-md-8 col-lg-4">
                        <button class="btn btn-primary ml-1" type="button" id="btnCariServer"><i class="la la-search"></i> AMBIL DATA SERVER</button>
                    </div>

                </div>

                <hr>

                <table class="table">
                    <thead>
                        <tr>
                            <th>NO. REKOM</th>
                            <th>NOPOL</th>
                            <th>NO RANGKA</th>
                            <th>NO MESIN</th>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th>MERK</th>
                            <th>JENIS</th>
                            <th>WARNA</th>
                            <th>TAHUN</th>
                            <th>SILINDER</th>
                            <th>TGL. PENGAJUAN</th>
                            <th>TGL. AKHIR</th>

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
                            <td>Jacob</td>
                            <td>Thornton</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>