@extends('backend/layout-master')
@section('content')
      <!-- Content Wrapper. Contains page content -->
  
    
    <!-- /.content-header -->
    <div class="card">
      <div class="card-header">
        <h2>Manajemen Menu Makanan</h2>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <a href="{{ route('menu.create') }}" class="btn btn-success" style="margin-bottom:10px;">+ Tambah Menu</a>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Tipe</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($menu as $key => $item)
            <tr>
              <td>{{ $key+1 }}</td>
              <td style="width:100px;"><img src="{{ asset('storage/fotomenu/'. $item->foto) }}" width="70%" ></td>
              <td>{{ $item->nama_menu }}</td>
              <td>{{ $item->harga }}</td>
              <td>{{ $item->deskripsi }}</td>
              <td>{{ $item->tipe }}</td>
              <td>
                <center>
                  <a class="btn btn-info" href="{{ route('menu.edit', $item->id) }}" ><i class="fa fa-pencil-alt"></i></a>
                  <a class="btn btn-danger" href="{{ route('menu.destroy', $item->id) }}"  onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" ><i class="fa fa-trash" ></i></a>
                </center>
              </td>
            </tr>
            @endforeach
          </tbody>
         
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection