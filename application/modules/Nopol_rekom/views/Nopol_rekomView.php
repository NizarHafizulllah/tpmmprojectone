<div class="m-portlet">
    <div class="m-portlet__body">
        <div class="row">
            <div class="col-md-12">

                <ul class="nav nav-tabs  tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Input Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Detail Data</a>
                    </li>
                </ul>

                <div class="tab-content tabs card-block">
                    <div class="tab-pane active" id="home1" role="tabpanel">

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">No. Polisi</label>
                            <div class="col-sm-2">
                                <input type="text" name="nama" class="form-control">
                            </div>

                            <div class="col-md-8 col-lg-4">
                                <button class="btn btn-primary ml-1" type="button" id="btnCariServer"><i class="la la-search"></i> Cari Data</button>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Status No. Polisi</label>
                            <div class="col-sm-2">
                                <label for="email-2" class="form-control form-control-center text-center"><strong>BLM TERPAKAI</strong></label>
                            </div>

                            <div class="col-sm-8">
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Nama Pemohon</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Pemohon">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Alamat Pemohon</label>
                            <div class="col-sm-6">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Alamat Pemohon"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-3">
                                <div class="input-group m-0">
                                    <select id="" class="form-control">
                                        <option value="">- Pilih Pekerjaan -</option>
                                        <option value="cheese">Cheese</option>
                                        <option value="h">Hanry Die</option>
                                        <option value="c">Come Leo</option>
                                        <option value="h">Hampri Catlin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">No. Rangka</label>
                            <div class="col-sm-3">
                                <input type="text" name="nama" class="form-control" placeholder="No. Rangka">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">No. Mesin</label>
                            <div class="col-sm-3">
                                <input type="text" name="nama" class="form-control" placeholder="No. Mesin">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Merk</label>
                            <div class="col-sm-3">
                                <div class="input-group m-0">
                                    <select id="" class="form-control">
                                        <option value="">- Pilih Merk -</option>
                                        <option value="cheese">Cheese</option>
                                        <option value="h">Hanry Die</option>
                                        <option value="c">Come Leo</option>
                                        <option value="h">Hampri Catlin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-3">
                                <div class="input-group m-0">
                                    <select id="" class="form-control">
                                        <option value="">- Pilih Jenis -</option>
                                        <option value="cheese">Cheese</option>
                                        <option value="h">Hanry Die</option>
                                        <option value="c">Come Leo</option>
                                        <option value="h">Hampri Catlin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Warna</label>
                            <div class="col-sm-3">
                                <div class="input-group m-0">
                                    <select id="" class="form-control">
                                        <option value="">- Pilih Warna -</option>
                                        <option value="cheese">Cheese</option>
                                        <option value="h">Hanry Die</option>
                                        <option value="c">Come Leo</option>
                                        <option value="h">Hampri Catlin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-2">
                                <input type="text" name="nama" class="form-control" placeholder="Tahun">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Silinder</label>
                            <div class="col-sm-2">
                                <input type="text" name="nama" class="form-control" placeholder="Isi Silinder">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-2">
                                <button type="button" id="btnBaru" class="btn btn-primary"><i class="la la-save"> </i> Simpan</button>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="profile1" role="tabpanel">
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">No. Awal S/d Akhir</label>
                            <div class="col-sm-4">

                                <div class="input-daterange input-group tanggalspan mb-1">
                                    <input type="text" class="input-sm form-control form-control m-input tanggal" id="CrTanggalAwal" value="<?php echo date('d/m/Y'); ?>" name="CrTanggalAwal" placeholder="Tanggal Awal">
                                    <div class="input-group-append">
                                        <span class="input-group-text">S/d</span>
                                    </div>
                                    <input type="text" class="input-sm form-control form-control m-input tanggal" id="CrTanggalAkhir" name="CrTanggalAkhir" placeholder="Tanggal Akhir" value="<?php echo date('d/m/Y'); ?>">
                                </div>

                            </div>

                            <div class="col-md-8 col-lg-4">
                                <button class="btn btn-primary ml-1" type="button" id="btnCariServer"><i class="la la-search"></i> Cari Data</button>
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
    </div>
</div>