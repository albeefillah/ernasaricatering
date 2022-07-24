@extends('backend/layout-master')
@section('content')
      <!-- Content Wrapper. Contains page content -->
  
    
    <!-- /.content-header -->
    <div class="card">
      <div class="card-header">
        <h2>Manajemen User</h2>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <a href="{{ route('user.create') }}" class="btn btn-success" style="margin-bottom:10px;">+ Tambah User</a>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Level</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($user as $key => $item)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $item->name }}</td>
              {{-- <td><img src="{{ asset('storage/fotouser/'. $item->foto) }}" alt="" width="50%"></td> --}}
              <td>{{ $item->username }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->level->level }}</td>
              <td>
                <center>
                  <a class="btn btn-info" href="{{ route('user.edit', $item->id) }}" ><i class="fa fa-pencil-alt"></i></a>
                  <a class="btn btn-danger" href="{{ route('user.destroy', $item->id) }}"  onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" ><i class="fa fa-trash" ></i></a>
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