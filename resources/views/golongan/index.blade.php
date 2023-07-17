@extends('layouts.app')

@section('content')

<div class="container">

    <h3>DAFTAR KOMPLEK RUMAH</h3>
    <a href="{{ url('golongan/create') }}" class="btn btn-warning mb-3">TAMBAH DATA KOMPLEK</a>

    <table class="table table-striped table-hover">
        <thead class="table-success">
            <tr>
                <th>NO</th>
                <th>BLOK KOMPLEK</th>
                <th>NAMA KOMPLEK</th>
                <th>EDIT</th>
                <th>HAPUS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->gol_id }}</td>
                <td>{{ $row->gol_kode }}</td>
                <td>{{ $row->gol_nama }}</td>
                <td><a href="{{ url('golongan/' . $row->gol_id . '/edit') }}" class="btn btn-success btn-sm">Edit</a></td>
                <td>
                    <form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
