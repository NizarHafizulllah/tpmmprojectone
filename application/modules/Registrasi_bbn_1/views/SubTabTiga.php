<div class="form-horizontal">
    <div class="form-group">
        <label for="" class="col-sm-2">Jenis Daftaran</label>
        <div class="col-sm-4">
            <input name="jd_nama" type="hidden">
            <select class="form-control select2-form" name="jd_id" id="form-jd">
                <option value="">- Pilih Jenis Daftaran -</option>
                @foreach($data['jenisdaftaran'] as $jd)
                    <option value="{{$jd['jd_id']}}">{{$jd['jd_nama']}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">No. Faktur</label>
        <div class="col-sm-4">
            <input name="no_faktur" type="text" class="form-control">
        </div>
        <label for="" class="col-sm-2">Tanggal Faktur</label>
        <div class="col-sm-2">
            <input name="tgl_faktur" type="text" class="form-control datepicker">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">No. Pabean</label>
        <div class="col-sm-4">
            <input name="no_pabean" type="text" class="form-control">
        </div>
        <label for="" class="col-sm-2">Tanggal Pabean</label>
        <div class="col-sm-2">
            <input name="tgl_pabean" type="text" class="form-control datepicker">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Pelabuhan</label>
        <div class="col-sm-4">
            <input name="pelabuhan" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">No. PIB</label>
        <div class="col-sm-4">
            <input name="no_pib" type="text" class="form-control">
        </div>
        <label for="" class="col-sm-2">Tanggal PIB</label>
        <div class="col-sm-2">
            <input name="tgl_pib" type="text" class="form-control datepicker">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Cara Impor</label>
        <div class="col-sm-4">
            <select class="form-control" name="impmthd_id" id="form-impor">
                <option value="">- Pilih Cara Impor -</option>
                @foreach($data['caraimpor'] as $jd)
                    <option value="{{$jd['impmthd_id']}}">{{$jd['impmthd_name']}}</option>
                @endforeach
            </select>
        </div>
        <label for="" class="col-sm-2">Pemohon</label>
        <div class="col-sm-4">
            <div class="input-group">
                <select name="pemohon_id" id="form-select-pemohon-registrasi" class="form-control select2-form" required></select>
                <script id="registrasi-pemohon" type="text/x-handlebars-template">
                    <option value="">- Pilih Pemohon -</option>
                    @{{#each this}}
                    <option value="@{{kode}}">@{{nama}}</option>
                    @{{/each}}
                </script>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Nama Importir</label>
        <div class="col-sm-4">
            <input name="nama_importir" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Ket. Lain - lain</label>
        <div class="col-sm-4">
            <textarea name="ketr_pabean" class="form-control"></textarea>
        </div>
    </div>
</div>