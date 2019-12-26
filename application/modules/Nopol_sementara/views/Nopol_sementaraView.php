<div class="m-portlet">
    <div class="m-portlet__body">
        <div class="row">
            <div class="col-md-12">

                <ul class="nav nav-tabs  tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#InputData" role="tab">Input Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#DetailData" role="tab">Detail Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Perpanjang" role="tab">Perpanjang Masa No. Sementara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#DetailPerpanjang" role="tab">Detail Data Perpanjangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#CetakSTCK" role="tab">Cetak STCK</a>
                    </li>
                </ul>

                <div class="tab-content tabs card-block">
                    <div class="tab-pane active" id="InputData" role="tabpanel">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group row mb-4">
                                    <label class="col-sm-2 col-form-label"><strong>Penanggung Jawab</strong></label>
                                    <div class="col-sm-6">
                                        <div class="input-group input-group-lg m-0">
                                            <select id="" class="form-control">
                                                <option value="">- Pilih Penanggung Jawab -</option>
                                                <option value="cheese">Cheese</option>
                                                <option value="h">Hanry Die</option>
                                                <option value="c">Come Leo</option>
                                                <option value="h">Hampri Catlin</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-lg-4">
                                        <button class="btn btn-primary btn-lg ml-1" type="button" id="btnCariServer"><i class="la la-refresh"></i></button>
                                        <button class="btn btn-primary btn-lg ml-1" data-toggle="modal" data-target="#large-Modal" type="button" id="btnCariServer"><i class="la la-plus"></i></button>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-2 col-form-label">No. Rangka</label>
                                    <div class="col-sm-4 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="No. Rangka">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-2 col-form-label">Nama Pemohon</label>
                                    <div class="col-sm-6 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Nama Pemohon">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-2 col-form-label">Alamat Pemohon</label>
                                    <div class="col-sm-6 input-group input-group-sm">
                                        <textarea rows="3" cols="3" class="form-control" placeholder="Alamat Pemohon"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-6">
                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <select id="" class="form-control">
                                            <option value="">- Pilih Pekerjaan -</option>
                                            <option value="cheese">Cheese</option>
                                            <option value="h">Hanry Die</option>
                                            <option value="c">Come Leo</option>
                                            <option value="h">Hampri Catlin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">No. Mesin</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="No. Mesin">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Merk</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <select id="" class="form-control">
                                            <option value="">- Pilih Merk -</option>
                                            <option value="cheese">Cheese</option>
                                            <option value="h">Hanry Die</option>
                                            <option value="c">Come Leo</option>
                                            <option value="h">Hampri Catlin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Jenis</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <select id="" class="form-control">
                                            <option value="">- Pilih Jenis -</option>
                                            <option value="cheese">Cheese</option>
                                            <option value="h">Hanry Die</option>
                                            <option value="c">Come Leo</option>
                                            <option value="h">Hampri Catlin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Model</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <select id="" class="form-control">
                                            <option value="">- Pilih Model -</option>
                                            <option value="cheese">Cheese</option>
                                            <option value="h">Hanry Die</option>
                                            <option value="c">Come Leo</option>
                                            <option value="h">Hampri Catlin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Warna TNKB</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <select id="" class="form-control">
                                            <option value="">- Pilih Warna TNKB -</option>
                                            <option value="cheese">Cheese</option>
                                            <option value="h">Hanry Die</option>
                                            <option value="c">Come Leo</option>
                                            <option value="h">Hampri Catlin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Tipe</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type="text" name="nama" class="form-control" placeholder="Tipe">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Warna</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <select id="" class="form-control">
                                            <option value="">- Pilih Warna -</option>
                                            <option value="cheese">Cheese</option>
                                            <option value="h">Hanry Die</option>
                                            <option value="c">Come Leo</option>
                                            <option value="h">Hampri Catlin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <button class="col-sm-4 btn btn-primary" type="button" id="btnCariServer"><i class="la la-search"></i> Ambil No. Polisi</button>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group input-group" id="basic-addon9">
                                                <input type="text" name="nama" class="col-sm-2 form-control text-center mr-1" placeholder="X">
                                                <input type="text" name="nama" class="col-sm-3 form-control text-center mr-1" placeholder="XXXX">
                                                <input type="text" name="nama" class="col-sm-2 form-control text-center" placeholder="XXX">
                                            </span>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <input id="checkbox18" type="checkbox" checked="">
                                        <label for="checkbox18">
                                            Nopol YX
                                        </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" name="nama" class="form-control" placeholder="No. Polisi">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6">

                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <button class="btn btn-primary btn-sm" type="button" id="btnCariServer"><i class="la la-search"></i> Set Kelurahan</button>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Provinsi</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Provinsi">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Kabupaten</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Kabupaten">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Kecamatan</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Kecamatan">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Kelurahan</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Kelurahan">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Tahun</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Tahun">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Silinder</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type="text" name="nama" class="form-control" placeholder="Silinder">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">No. STCK</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type="text" name="nama" class="form-control" placeholder="No. STCK">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-sm-12">
                                <label class=" col-sm-2 col-form-label"></label>
                                <button class="btn btn-primary mr-2" type="button" id="btnCariServer"><i class="la la-search"></i> Simpan</button>

                                <button class="btn btn-primary mr-2" type="button" id="btnCariServer"><i class="la la-search"></i> Baru</button>

                                <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#large-Modal-Baru" type="button" id="btnCariServer"><i class="la la-search"></i> Alokasi No. Polisi Baru</button>

                                <button class="btn btn-primary" data-toggle="modal" data-target="#large-Modal-YX" type="button" id="btnCariServer"><i class="la la-search"></i> Alokasi No. Polisi YX</button>
                            </span>
                        </div>

                    </div>

                    <div class="tab-pane" id="DetailData" role="tabpanel">
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Tanggal Awal</label>
                            <div class="col-sm-4">

                                <div class="input-daterange input-group input-group-sm tanggalspan mb-1">
                                    <input type="text" class="input-sm form-control form-control m-input tanggal" id="CrTanggalAwal" value="<?php echo date('d/m/Y'); ?>" name="CrTanggalAwal" placeholder="Tanggal Awal">
                                    <div class="input-group-append">
                                        <span class="input-group-text">S/d</span>
                                    </div>
                                    <input type="text" class="input-sm form-control form-control m-input tanggal" id="CrTanggalAkhir" name="CrTanggalAkhir" placeholder="Tanggal Akhir" value="<?php echo date('d/m/Y'); ?>">
                                </div>

                            </div>

                            <div class="col-md-8 col-lg-4">
                                <button class="btn btn-primary ml-1" type="button" id="btnCariServer"><i class="la la-search"></i> Cari Data</button>
                                <button class="btn btn-primary ml-1" type="button" id="btnCariServer"><i class="la la-file"></i> Laporan</button>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">No. Rangka</label>
                            <div class="col-sm-4 input-group input-group-sm">
                                <input type=" text" name="nama" class="form-control" placeholder="No. Rangka">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="Perpanjang" role="tabpanel">

                        <div class="form-group row mb-4">
                            <label class="col-sm-2 col-form-label"><strong>Kode No. Sementara</strong></label>
                            <div class="col-sm-4 input-group input-group-lg">
                                <input type=" text" name="nama" class="form-control" placeholder="Kode No. Sementara">
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row mb-0">
                            <label class="col-sm-2 col-form-label">No. Rangka</label>
                            <div class="col-sm-4 input-group input-group-sm">
                                <input type=" text" name="nama" class="form-control" placeholder="No. Rangka">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <label class="col-sm-2 col-form-label">Nama Pemohon</label>
                            <div class="col-sm-6 input-group input-group-sm">
                                <input type=" text" name="nama" class="form-control" placeholder="Nama Pemohon">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <label class="col-sm-2 col-form-label">Alamat Pemohon</label>
                            <div class="col-sm-6 input-group input-group-sm">
                                <textarea rows="3" cols="3" class="form-control" placeholder="Alamat Pemohon"></textarea>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Pekerjaan">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">No. Mesin</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="No. Mesin">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Merk</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Merk">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Jenis</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Jenis">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Warna</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Warna">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">No. Polisi</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group input-group" id="basic-addon9">
                                                <input type="text" name="nama" class="col-sm-2 form-control text-center mr-1" placeholder="X">
                                                <input type="text" name="nama" class="col-sm-3 form-control text-center mr-1" placeholder="XXXX">
                                                <input type="text" name="nama" class="col-sm-2 form-control text-center" placeholder="XXX">
                                            </span>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <button class="btn btn-primary ml-1" type="button" id="btnCariServer"><i class="la la-save"></i> Simpan</button>
                                        <button class="btn btn-primary ml-1" type="button" id="btnCariServer"><i class="la la-plus"></i> Baru</button>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Warna TNKB</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Warna TNKB">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Tahun</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Tahun">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">Isi Silinder</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="Isi Silinder">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-sm-4 col-form-label">No. STCK</label>
                                    <div class="col-sm-8 input-group input-group-sm">
                                        <input type=" text" name="nama" class="form-control" placeholder="No. STCK">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="DetailPerpanjang" role="tabpanel">
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Tanggal Awal</label>
                            <div class="col-sm-4">

                                <div class="input-daterange input-group input-group-sm tanggalspan mb-1">
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
                    </div>

                    <div class="tab-pane" id="CetakSTCK" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Penanggung Jawab</label>
                                    <div class="col-sm-6">
                                        <div class="input-group input-group">
                                            <select id="" class="form-control">
                                                <option value="">- Pilih Penanggung Jawab -</option>
                                                <option value="cheese">Cheese</option>
                                                <option value="h">Hanry Die</option>
                                                <option value="c">Come Leo</option>
                                                <option value="h">Hampri Catlin</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <button class="btn btn-primary btn-md" type="button" id="btnCariServer"><i class="la la-search"></i> Cari Data</button>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
                                    <div class="col-sm-4">

                                        <div class="input-daterange input-group input-group-sm tanggalspan mb-1">
                                            <input type="text" class="input-sm form-control form-control m-input tanggal" id="CrTanggalAwal" value="<?php echo date('d/m/Y'); ?>" name="CrTanggalAwal" placeholder="Tanggal Awal">
                                            <div class="input-group-append">
                                                <span class="input-group-text">S/d</span>
                                            </div>
                                            <input type="text" class="input-sm form-control form-control m-input tanggal" id="CrTanggalAkhir" name="CrTanggalAkhir" placeholder="Tanggal Akhir" value="<?php echo date('d/m/Y'); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-sm-2 col-form-label">No. Cetak STCK</label>
                                    <div class="col-sm-4">

                                        <div class="input-group input-group-sm mb-1">
                                            <input type="text" class="input-sm form-control form-control" name="CrTanggalAwal" placeholder="No. Awal">
                                            <div class="input-group-append">
                                                <span class="input-group input-group-sm input-group-text">S/d</span>
                                            </div>
                                            <input type="text" class="input-sm form-control form-control" name="CrTanggalAkhir" placeholder="No. Akhir">
                                        </div>
                                    </div>
                                </div>

                            </div>
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