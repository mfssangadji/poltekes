<div class="modal fade bs-example-modal-lg f-add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Tambah Arsip</h4>
      </div>
      <div class="modal-body">
        <form id="form-add" method="post" action="{{route('arsip')}}" data-parsley-validate class="form-horizontal form-label-left">
          @csrf
          <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama File <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="nama_file" name="nama_file" required="required" class="form-control ">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">File <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="file" id="file" name="file" required="required" class="">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary add">Simpan</button>
        <button type="button" class="btn btn-primary update">Ubah</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>