<div class="form-horizontal">
    <div class="form-group">
        <label for="" class="col-sm-2">No. Identitas</label>
        <div class="col-sm-4">
            <input name="no_identitas" type="text" class="form-control">
        </div>
        <div class="col-sm-6">
            <button id="kelurahan-button" class="btn btn-block btn-success" type="button" data-toggle="modal" data-target="#ambil-data-kecamatan">Set Data Kelurahan</button>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Nama Pemilik</label>
        <div class="col-sm-4">
            <textarea style="overflow-y: scroll; overflow-x: hidden; resize: none" name="nama_pemilik" class="form-control"></textarea>
        </div>
        <label for="" class="col-sm-2">Provinsi</label>
        <div class="col-sm-4">
            <input name="prop_id" type="hidden" class="form-control" readonly>
            <input name="prop_nama" type="text" class="form-control" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Alamat Pemilik</label>
        <div class="col-sm-4">
            <textarea style="overflow-y: scroll; overflow-x: hidden; resize: none" name="alamat_pemilik" class="form-control"></textarea>
        </div>
        <label for="" class="col-sm-2">Kabupaten</label>
        <div class="col-sm-4">
            <input name="kab_id" type="hidden" class="form-control" readonly>
            <input name="kab_nama" type="text" class="form-control" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Kode POS</label>
        <div class="col-sm-4">
            <input name="kode_pos" type="text" class="form-control">
        </div>
        <label for="" class="col-sm-2">Kecamatan</label>
        <div class="col-sm-4">
            <input name="kec_id" type="hidden" class="form-control" readonly>
            <input name="kec_nama" type="text" class="form-control" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">No. Ponsel</label>
        <div class="col-sm-4">
            <input name="no_ponsel" type="text" class="form-control">
        </div>
        <label for="" class="col-sm-2">Kelurahan</label>
        <div class="col-sm-4">
            <input name="kel_id" type="hidden" class="form-control" readonly>
            <input name="kel_nama" type="text" class="form-control" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Pekerjaan</label>
        <div class="col-sm-4">
            <select class="form-control select2-form" name="pekerjaan_pemilik" id="form-pekerjaan">
                <option value="">- Pilih Pekerjaan -</option>
                @foreach($data['pekerjaan'] as $pekerjaan)
                    <option value="{{$pekerjaan['pekerjaan_nama']}}">{{$pekerjaan['pekerjaan_nama']}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">Wilayah/Polres</label>
        <div class="col-sm-4">
            <select class="form-control select2-form" name="wilayah_id" id="form-wilayah">
                <option value="">- Pilih Wilayah/Polres -</option>
                @foreach($data['wilayah'] as $wilayah)
                    <option value="{{$wilayah['wilayah_id']}}">{{$wilayah['wilayah_nama']}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>