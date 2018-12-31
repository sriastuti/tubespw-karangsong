@extends('layouts.app')

@section('content')
<h4>{{ $tiket->usia }}</h4>
<p>{{ $tiket->harga }}</p>
<a href="{{ route('tiket.index') }}" class="btn btn-default">Kembali</a>
@endsection
