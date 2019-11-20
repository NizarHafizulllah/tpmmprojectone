<style>
    .btn-lg {
        font-size: 14px;
    }

    .btn-sm {
        font-size: 12px;
    }
</style>

<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">

                    <!-- Begin Page Content -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group-sm form-group row mb-2">
                                <label class="col-6">Tgl. Pendaftaran</label>
                                <div class="col-6">
                                    <input id="no_bpkb" name="no_bpkb" type="text" class="input-group-sm required form-control" placeholder="Tanggal">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <form>
                                <div class="form-group input-group-sm row">
                                    <div class="col-3">
                                        <label for="email-2" class="block">Pemohon</label>
                                    </div>
                                    <div class="col-7">
                                        <div class="input-group input-group-sm mb-0">
                                            <select id="" class="form-control mr-1">
                                                <option value="">- Pilih Pemohon -</option>
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
                                </div>

                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="email-2" class="block">Jenis Pemohon</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-radio">
                                            <div class="radio radiofill radio-primary radio-inline">
                                                <label>
                                                    <input type="radio" name="pemohon_jenis" value="PRIBADI" id="pjPribadi" data-bv-field="pemohon_jenis" checked>
                                                    <i class="helper"></i>Pribadi
                                                </label>
                                            </div>
                                            <div class="radio radiofill radio-primary radio-inline active">
                                                <label>
                                                    <input type="radio" name="pemohon_jenis" value="BIROJASA" id="pjBirojasa" data-bv-field="pemohon_jenis">
                                                    <i class="helper"></i>Birojasa
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group-sm form-group row mb-2">
                                <label class="col-4">No. BPKB</label>
                                <div class="col-8">
                                    <div class="input-daterange input-group input-group-sm norekspan mb-1">
                                        <input type="text" class="input-sm form-control form-control-sm" name="CrNoRekBPKBAwal" id="CrNoRekBPKBAwal" placeholder="No. Rek BPKB Awal">
                                        <span class="input-group-addon">s/d</span>
                                        <input type="text" class="input-sm form-control form-control-sm" name="CrNoRekBPKBAkhir" id="CrNoRekBPKBAkhir" placeholder="No. Rek BPKB Akhir">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row mb-1">
                                <div class="col-8">
                                    <button type="button" id="btnCariServer" class="btn btn-primary btn btn-sm"><i class="icofont icofont-search"></i>Ambil Data Server</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>