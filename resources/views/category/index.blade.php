@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                    
                   <div class="card text-center">
                      <div class="card-header">
                        <h4 class="float-left">Category</h4>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{url('category/tambah')}}"><i class="fas fa-plus"></i> Tambah</a></div>
                      </div>
                      <div class="card-body">
                        <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Jenis</th>
                                <th>Nama Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                 @foreach($category as $cat)
                                <tr>
                                    <td>{{ $cat->id_category}}</td>
                                    <td>{{ $cat->jenis_category}}</td>
                                    <td>{{ $cat->nama_category}}</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="{{url('category/edit/'.encrypt($cat->id_category))}}"><i class="fas fa-edit"></i> Edit</a>

                                        <a class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah yakin?')" href="{{ url('category/delete/'.encrypt($cat->id_category)) }}">
                                            <i class="fas fa-times"></i> Delete</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                         </table>
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
