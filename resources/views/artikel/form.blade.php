@extends('layouts.master')

@yield('content')

@section('content')
<form role="form" action="/artikel" method="POST">
    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter judul">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea type="text" class="form-control" id="isi" name="isi" placeholder="Isi"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <textarea type="text" class="form-control" id="slug" name="slug" placeholder="slug"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" id="tag" name="tag" placeholder="tag">
                  </div>
                  <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="simpan">
                </div>
              </form>

@endsection