<div class="panel panel-default">
    <div class="box box-default">
        <form action="#" class="form row" id="form-cari-list-data">
            <div class="col-sm-1">
                <div class="form-group">
                    <label for="">Tanggal</label>
                </div>
            </div>
            <div class="col-sm-2">
                <input name="tgl" type="text" class="form-control datepicker" value="{{date('d-m-Y')}}" required>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-primary">Get From Server</button>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <input name="all" type="checkbox"> Tampilkan Semua
                </div>
            </div>
        </form>
    </div>
    <div class="clearfix"></div>
    <div id="table-registrasi-bbn-1"></div>
    <div class="box box-default" id="form-btn-action">
        <button class="btn btn-warning" id="btn-edit"><i class="glyphicon glyphicon-edit"></i> Edit</button>
    </div>
</div>