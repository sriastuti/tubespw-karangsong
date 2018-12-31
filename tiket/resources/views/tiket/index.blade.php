@extends('layouts.app')

@section('content')
    <a href="{{ route('tiket.create') }}" class="btn btn-info btn-sm">Tiket Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Usia</th>
            <th>Tiket</th>
            <th>Opsi</th>
        </thead>
        <tbody>
            @foreach ($tikets as $tiket)
                <tr>
                    <td>{{ $tiket->id }}</td>
                    <td>{{ $tiket->usia }}</td>
                    <td>{{ $tiket->harga }}</td>
                    <td>
                        <form action="{{ route('tiket.destroy', $tiket->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('tiket.show', $tiket->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('tiket.edit', $tiket->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection