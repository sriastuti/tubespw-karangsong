@extends('layouts.app')

@section('content')
<h4>Tiket Baru</h4>
<form action="{{ route('tiket.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('usia') ? 'has-error' : '' }}">
        <label for="usia" class="control-label">USIA</label>
        <input type="text" class="form-control" name="usia" placeholder="Usia">
        @if ($errors->has('usia'))
            <span class="help-block">{{ $errors->first('usia') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
        <label for="harga" class="control-label">Harga</label>
        <input type="text" name="harga" cols="30" rows="5" class="form-control" />
        @if ($errors->has('harga'))
            <span class="help-block">{{ $errors->first('harga') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('tiket.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection