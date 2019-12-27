@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                    
                   <div class="card text-center">
                      <div class="card-header">
                        <h4 class="float-left">Tambah Category</h4>
                      </div>
                      <div class="card-body">
                        <form action="{{ url('/category/store') }}" method="POST">

                           {{csrf_field()}}
                            <div class="form-group row">
                                <label for="jenis_category" class="col-sm-2 col-form-label">Jenis Category</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="jenis_category" name="jenis_category" placeholder="Jenis" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_category" class="col-sm-2 col-form-label">Nama Category</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_category" name="nama_category"  placeholder="Nama" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-right"></label>
                                <div class="col-sm-10">
                                    <button class="btn btn-inline btn-success mt-10">Simpan</button>
                                </div>
                            </div>
                    
                        </form>
                      </div>
    
                    </div>

                </div>
            
        </div>
    </div>
           
@endsection

@section("css")
    <link rel="stylesheet" href="{{url('template')}}/css/datatable/dataTables.bootstrap4.min.css">
@endsection

@section("javascript")
    <script src="{{url('template')}}/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('template')}}/js/datatable/jquery.dataTables.min.js"></script>

    <script>
       $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

    <script src="{{url('template')}}/js/app.js"></script>
@endsection
