@extends('layouts.master')

@yield('content')

@section('content')
<div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tanya Jawab</h3>
            </div>
            <div class="card-body">
                  <b style="font-size: 20px;">{{ $artikel->judul }}</b>
                  <br>
                    {{ $artikel->isi }}
                  <br><br>
                  <br>{{ $artikel->tag }}<br>
                  <hr/>
                    
            </div>
        </div>
    </div>

@endsection