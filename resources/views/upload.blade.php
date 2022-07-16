@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="card">
          <div class="card-header">
            <h1>Upload Document</h1>
          </div>
          <div class="card-body">
            <form action="{{route ('simpan-up')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">No Dokumen</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="no_doc" id="inputEmail3" value="{{ date('d/m/Y').'/'.$kd }}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail2" class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-9">
                <input type="date" class="form-control" name="tgl_up" id="inputEmail2">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Institusi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="institusi" id="inputEmail3" placeholder="Institusi">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Project</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="project" id="inputEmail3" placeholder="Project">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail5" class="col-sm-3 col-form-label">Jenis Dokumen</label>
                <div class="col-sm-9">
                  <select class="form-control select2" style="width: 100%;" name="jenis_doc" id="inputEmail5">
                    <option value="Dok PO">Dok PO</option>
                    <option selected="selected" value="Dok Penawaran">Dok Penawaran</option>
                    <option value="Dok BAST">Dok BAST</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail5" class="col-sm-3 col-form-label">File</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" name="up_doc" id="inputEmail5">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Editor</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="editor" id="inputEmail3" placeholder="editor name">
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Upload</button>
            </form>
          </div>
        </div>
    </section>
@endsection