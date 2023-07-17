@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>EDIT KOMPLEK</h3>

        <form action="{{ url('/golongan/' . $row->gol_id) }}" method="POST">
            @method('PATCH')
            @csrf 
            <div class="mb-3">
                <label for="gol_kode" class="form-label">BLOK KOMPLEK</label>
                <input type="text" class="form-control" id="gol_kode" name="gol_kode" value="{{ $row->gol_kode }}">
            </div>
            <div class="mb-3">
                <label for="gol_nama" class="form-label">NAMA KOMPLEK</label>
                <input type="text" class="form-control" id="gol_nama" name="gol_nama" value="{{ $row->gol_nama }}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
@endsection
