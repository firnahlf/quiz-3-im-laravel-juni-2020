@extends('layouts.master')

@yield('content')

@section('content')

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Artikel</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
        <a href="/artikel/create" class="btn btn-primary"> + Tambah Artikel</a>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Action</th>
            <th></th>
            <th></th>
        </tr>
        
        @foreach($artikel ?? [] as $key => $a)
        <tr>
            <td>{{ $a -> id }}</td>
            <td>{{ $a->judul }}</td>
            <td>{{ $a->isi }}</td>
            <td><a href="/artikel/{{$a->id}}/edit" class="btn btn-primary"> Edit</a>
            <form action="/artikel/{{$a->id}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
            </form>
            <a href="/artikel/{{$a->id}}" class="btn btn-primary"> show</a></td>
        </tr>
        @endforeach
   
</table>

@endsection



        