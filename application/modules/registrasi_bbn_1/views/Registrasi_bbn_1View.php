<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-block">

                    <div class="input-group-sm form-group row mb-2">
                        <label class="col-1">Tanggal</label>

                        <div class="col-4 input-daterange input-group input-group-sm norekspan mb-1">
                            <input type="text" class="input-sm form-control form-control-sm" name="CrNoRekBPKBAwal" id="CrNoRekBPKBAwal" placeholder="Tanggal Reg. Awal">
                            <span class="input-group-addon">s/d</span>
                            <input type="text" class="input-sm form-control form-control-sm" name="CrNoRekBPKBAkhir" id="CrNoRekBPKBAkhir" placeholder="Tanggal Reg. Akhir">
                        </div>

                        <div class="col-2 text-left m-0">
                            <button type="button" class=" btn btn-primary btn btn-block btn-sm"><i class="icofont icofont-search"></i>Ambil Data</button>
                        </div>

                        <div class="col-3 text-left">
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

                        <div class="col-2 text-right">
                            <button type="button" class=" btn btn-primary btn btn-sm ml-1" data-toggle="modal" data-target="#large-Modal"><i class="icofont icofont-plus"></i>Tambah Data</button>
                        </div>
                    </div>

                    <hr>

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
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
$this->load->view($this->controller . 'ModalView');
?>