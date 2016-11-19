
    <h1 style="font-size:20pt">Tabel Master pendidikan</h1>

    <h3></h3>
    <br />
    <button class="btn btn-raised btn-sm btn-success" onclick="add_data()"><i class="glyphicon glyphicon-plus"></i> Tambah Data</button>
    <button class="btn btn-raised btn-sm btn-primary" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Refresh</button>
    <button class="btn btn-raised btn-sm btn-info" onclick="import_excel()"><i class=" fa fa-file-excel-o"></i> Import Excel</button>
    <a href= "<?php echo base_url('master_pendidikan/export_excel') ?>" class="btn btn-raised btn-sm btn-warning"><i class="fa fa-file-excel-o"></i> Export Excel</a>
    <br />
    <br />
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>

                <th>Jenis Pendidikan</th>
                <th>Kode </th>
                <th>Level </th>
                <th style="width:125px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>

        <tfoot>
        <tr>

                <th>Jenis pendidikan</th>
                <th>Kode </th>
                <th>Level </th>
                 <th>Aksi</th>
        </tr>
        </tfoot>
    </table>



<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Form Master Data pendidikan</h3>
        </div>
        <div class="modal-body form">
            <form action="#" id="form" class="form-horizontal">
                <input type="hidden" value="" name="id"/>
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-md-3">Jenis Pendidikan</label>
                        <div class="col-md-9">
                            <input name="jenis_pendidikan" placeholder="Jenis pendidikan" class="form-control" type="text">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">kode pendidikan</label>
                        <div class="col-md-9">
                            <input name="kode_pendidikan" placeholder="Kode pendidikan" class="form-control" type="text">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Level pendidikan</label>
                        <div class="col-md-9">
                            <input name="level_pendidikan" placeholder="Level pendidikan" class="form-control" type="text">
                            <span class="help-block"></span>
                        </div>
                    </div>


                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-raised btn-sm btn-primary">Save</button>
            <button type="button" class="btn btn-raised btn-sm btn-danger" data-dismiss="modal">Cancel</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


<!-- Bootstrap modal import excel -->
<div class="modal fade" id="modal_excel" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Import Data pendidikan</h3>
        </div>
        <div class="modal-body form">
            <form method="post" action="<?php echo site_url('master_pendidikan/upload'); ?>" id="excel" name="file" class="form-horizontal" enctype="multipart/form-data">
              <input type="file" name="userfile" id="userfile"/>
              <input type="submit" value="submit" name="submit" id="submit"/>
        </div>
        <div class="modal-footer">

            <button type="button" class="btn btn-raised btn-sm btn-danger" data-dismiss="modal">Cancel</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
