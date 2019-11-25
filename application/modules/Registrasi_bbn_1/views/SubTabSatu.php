<div class="form-horizontal">
    <input name="kelurahan_default" type="hidden" value="{{$data['kab_id']}}">
    <input name="bpkb_id" type="hidden">
    <input name="berkas_id" type="hidden">
    <input name="current_histid" type="hidden">
    <input name="tpt_daftar_stnk" type="hidden">
    <input name="polda_nama" type="hidden">
    <input name="tgl_daftar" id="tgl_daftar_2" type="hidden">
    <div class="form-group">
        <label for="" class="col-sm-2">No. BPKB</label>
        <div class="col-sm-4">
            <input name="no_bpkb" type="text" class="form-control" readonly>
        </div>
        <label for="" class="col-sm-2">No. Reg BPKB</label>
        <div class="col-sm-4">
            <input name="nreg_bpkb" type="text" class="form-control" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Dikeluarkan di</label>
        <div class="col-sm-4">
            <input name="tempat_keluar" type="text" class="form-control" value="{{$data['default']['tempat_keluar']}}" readonly>
        </div>
        <label for="" class="col-sm-2">Tanggal</label>
        <div class="col-sm-2">
            <input name="tgl_bpkb" type="text" class="form-control" value="{{$data['default']['tgl_bpkb']}}" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">No. Rangka</label>
        <div class="col-sm-4">
            <input name="no_rangka" type="text" class="form-control">
        </div>
        <label for="" class="col-sm-2">No. Mesin</label>
        <div class="col-sm-4">
            <input name="no_mesin" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Merk</label>
        <div class="col-sm-4">
            <select class="form-control select2-form" name="merk_id" id="form-merk">
                <option value="">- Pilih Merk -</option>
                @foreach($data['merk'] as $merk)
                    <option value="{{$merk['merk_id']}}">{{$merk['merk_nama_r']}}</option>
                @endforeach
            </select>
        </div>
        <label for="" class="col-sm-2">Jenis</label>
        <div class="col-sm-4">
            <select class="form-control select2-form" name="jenis_id" id="form-jenis">
                <option value="">- Pilih Jenis -</option>
                @foreach($data['jenis'] as $jenis)
                    <option value="{{$jenis['jenis_id']}}">{{$jenis['jenis_nama']}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Type</label>
        <div class="col-sm-4">
            <input name="tipe" type="text" class="form-control">
        </div>
        <label for="" class="col-sm-2">Type 2</label>
        <div class="col-sm-4">
            <input name="tipe2" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Model</label>
        <div class="col-sm-4">
            <input name="model_alias" type="hidden">
            <select class="form-control select2-form" name="model_id" id="form-model">
                <option value="">- Pilih Model -</option>
                @foreach($data['model'] as $model)
                    <option value="{{$model['model_id']}}">{{$model['model_nama']}}</option>
                @endforeach
            </select>
        </div>
        <label for="" class="col-sm-2">Silinder</label>
        <div class="col-sm-4">
            <div class="input-group">
                <input name="vol_silinder" type="text" class="form-control">
                <span class="input-group-addon">CC</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Tahun Buat</label>
        <div class="col-sm-4">
            <input name="thn_buat" type="text" class="form-control">
        </div>
        <label for="" class="col-sm-2">Tahun Rakit</label>
        <div class="col-sm-4">
            <input name="thn_rakit" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Jumlah Roda</label>
        <div class="col-sm-4">
            <input name="jml_roda" type="text" class="form-control">
        </div>
        <label for="" class="col-sm-2">Jumlah Sumbu</label>
        <div class="col-sm-4">
            <input name="jml_sumbu" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Bahan Bakar</label>
        <div class="col-sm-4">
            <select class="form-control select2-form" name="bb_id" id="form-bahanbakar">
                <option value="">- Pilih Bahan Bakar -</option>
                @foreach($data['bahanbakar'] as $bahanbakar)
                    <option value="{{$bahanbakar['bb_id']}}">{{$bahanbakar['bb_nama']}}</option>
                @endforeach
            </select>
        </div>
        <label for="" class="col-sm-2">Warna</label>
        <div class="col-sm-4">
            <div class="input-group">
                <select class="form-control select2-form" name="warna_id" id="form-warna">
                    <option value="">- Pilih Warna -</option>
                    @foreach($data['warna'] as $warna)
                        <option value="{{$warna['warna_id']}}">{{$warna['warna_nama']}}</option>
                    @endforeach
                </select>
                <span class="input-group-btn">
                    <button class="btn btn-success" type="button" id="add-warna-modal">
                        <i class="glyphicon glyphicon-plus"></i>
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Peruntukan</label>
        <div class="col-sm-4">
            <select class="form-control select2-form" name="prt_id" id="form-prt">
                <option value="">- Pilih Peruntukan -</option>
                @foreach($data['peruntukan'] as $peruntukan)
                    <option value="{{$peruntukan['prt_id']}}">{{$peruntukan['prt_nama']}}</option>
                @endforeach
            </select>
        </div>
        <label for="" class="col-sm-2">No. TPT</label>
        <div class="col-sm-4">
            <input name="no_tpt" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Warna TNKB</label>
        <div class="col-sm-4">
            <select class="form-control select2-form" name="warnatnkb_id" id="form-warnatnkb">
                <option value="">- Pilih Warna TNKB -</option>
                @foreach($data['warnatnkb'] as $warnatnkb)
                    <option value="{{$warnatnkb['warnatnkb_id']}}">{{$warnatnkb['warnatnkb']}}</option>
                @endforeach
            </select>
        </div>
        <label for="" class="col-sm-2">No. SUT</label>
        <div class="col-sm-4">
            <input name="no_sut" type="text" class="form-control">
        </div>
    </div>
</div>