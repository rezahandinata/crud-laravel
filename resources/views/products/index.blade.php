@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                    
                   <div class="card text-center">
                      <div class="card-header">
                        <h4 class="float-left">Products</h4>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{url('products/tambah')}}"><i class="fas fa-plus"></i> Tambah</a></div>
                      </div>
                      <div class="card-body">
                        <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Products</th>
                                <th>Nama Category</th>
                                <th>harga</th>
                                <th>Deskripsi</th>
                                <th>Berat</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                 @foreach($products as $prd)
                                <tr>
                                    <td>{{ $prd->id_products}}</td>
                                    <td>{{ $prd->nama_products}}</td>
                                    <td></td>
                                    <td>{{ $prd->harga}}</td>
                                    <td>{{ $prd->deskripsi}}</td>
                                    <td>{{ $prd->berat}}</td>
                                    <td>{{ $prd->gambar}}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{url('products/edit/'.encrypt($prd->id_products))}}"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="btn btn-danger" href=""><i class="fas fa-times"></i> Delete</a>
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
