<div class="m-portlet">
    <div class="m-portlet__body">

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

        <ul class="nav nav-tabs  tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#monitoring" role="tab">MONITORING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pendaftaran" role="tab">DETAIL DATA PENDAFTARAN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#entry" role="tab">DETAIL DATA ENTRY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#verifikasi" role="tab">DETAIL DATA VERIFIKASI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#cetakbpkb" role="tab">DETAIL DATA CETAK BPKB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#laporan" role="tab">CETAK LAPORAN</a>
            </li>
        </ul>


        <div class="tab-content tabs card-block">
            <div class="tab-pane active" id="monitoring" role="tabpanel">

                <div class="card">
                    <div class="card-header text-center">
                        <h5>MONITORING TANGGAL 01 JANUARI 2020 S/D 01 JANUARI 2020</h5>
                    </div>

                    <div class="row m-4">

                        <div class="col-md-1 text-center">
                        </div>

                        <div class="col-md-2 text-center">
                            <label for="email-2" class="form-control form-control-center text-center" style="background-color:blue;color:white;"><strong>DAFTAR</strong></label>
                            <input type="text" name="nama" class="form-control text-center" style="background-color:blue;font-size:2em;" placeholder="9.636">
                        </div>

                        <div class="col-md-2 text-center">
                            <label for="email-2" class="form-control form-control-center text-center" style="background-color:blue;color:white;"><strong>ENTRY</strong></label>
                            <input type="text" name="nama" class="form-control text-center" style="background-color:blue;font-size:2em;" placeholder="9.636">
                        </div>

                        <div class="col-md-2 text-center">
                            <label for="email-2" class="form-control form-control-center text-center" style="background-color:blue;color:white;"><strong>VERIFIKASI</strong></label>
                            <input type="text" name="nama" class="form-control text-center" style="background-color:blue;font-size:2em;" placeholder="9.636">
                        </div>

                        <div class="col-md-2 text-center">
                            <label for="email-2" class="form-control form-control-center text-center" style="background-color:blue;color:white;"><strong>PRINT</strong></label>
                            <input type="text" name="nama" class="form-control text-center" style="background-color:blue;font-size:2em;" placeholder="9.636">
                        </div>

                        <div class="col-md-2 text-center">
                            <label for="email-2" class="form-control form-control-center text-center" style="background-color:blue;color:white;"><strong>PENYERAHAN</strong></label>
                            <input type="text" name="nama" class="form-control text-center" style="background-color:blue;font-size:2em;" placeholder="9.636">
                        </div>

                        <div class="col-md-1 text-center">
                        </div>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="child-table" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>NO. BPKB</th>
                                        <th>TNKB</th>
                                        <th>NO. RANGKA</th>
                                        <th>JENIS</th>
                                        <th>WILAYAH</th>
                                        <th>WAKTU ENTRY</th>
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
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
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
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Jacob</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="pendaftaran" role="tabpanel">
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

            <div class="tab-pane" id="entry" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h5>Child Rows (Show Extra / Detailed Information)</h5>
                        <span>The DataTables API has a number of methods available for attaching child rows to a parent row in the DataTable. This can be used to show additional information about a row, useful for cases where you wish to convey more information about a row than there is space for in the host table.</span>

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="child-table" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="verifikasi" role="tabpanel">

            </div>

            <div class="tab-pane" id="cetakbpkb" role="tabpanel">

            </div>

            <div class="tab-pane" id="laporan" role="tabpanel">

            </div>
        </div>
    </div>
</div>