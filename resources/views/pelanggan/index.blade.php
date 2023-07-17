@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>DATA PELANGGAN</h3>
        <a href="{{ url('pelanggan/create') }}" class="btn btn-warning mb-3">TAMBAH DATA PELANGGAN</a>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA PELANGGAN</th>
                    <th>ALAMAT KOMPLEK</th>
                    <th>NO HP</th>
                    <th>NO KTP</th>
                    <th>BLOK KOMPLEK</th>
                    <th>STATUS</th>
                    <th>TANGGAL MASUK</th>
                    <th>ADMIN</th>
                    <th>EDIT</th>
                    <th>HAPUS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $row)
                <tr>
                    <td>{{ $row->pel_id }}</td>
                    <td>{{ $row->pel_nama }}</td>
                    <td>{{ $row->pel_alamat }}</td>
                    <td>{{ $row->pel_hp }}</td>
                    <td>{{ $row->pel_ktp }}</td>
                    <td>{{ $row->pel_id_gol }}</td>
                    <td>{{ $row->pel_aktif }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>{{ $row->pel_id_user }}</td>
                    <td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
