@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>EDIT PELANGGAN</h3>

        <form action="{{ url('/pelanggan') }}" method="POST">
            @csrf 
            <div class="mb-3">
                <label>KODE PELANGGAN</label>
                <input type="text" class="form-control" name="pel_no" value="{{ $row->pel_no }}">
            </div> 
            <div class="mb-3">
                <label>NAMA PELANGGAN</label>
                <input type="text" class="form-control" name="pel_nama" value="{{ $row->pel_nama }}">
            </div>
            <div class="mb-3">
                <label>ALAMAT KOMPLEK</label>
                <textarea name="pel_alamat" class="form-control" rows="5" required>{{ $row->pel_alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label>NO HP</label>
                <input type="text" class="form-control" name="pel_hp" value="{{ $row->pel_hp }}">
            </div>
            <div class="mb-3">
                <label>NO KTP</label>
                <input type="text" class="form-control" name="pel_ktp" value="{{ $row->pel_ktp }}">
            </div>
            <div class="mb-3">
                <label>BLOK KOMPLEK</label>
                <select class="form-control select2" name="pel_id_gol" id="pel_id_gol" required>
                    @foreach ($gol as $item)
                        <option value="{{ $item->gol_id }}">{{ $item->gol_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>STATUS</label>
                <select id="pel_aktif" class="form-control" name="pel_aktif" required>
                    <option value="Y">AKTIF</option>
                    <option value="N">TIDAK AKTIF</option>
                </select>
            </div>
            <div class="mb-3">
                <label>ADMIN</label>
                <select class="form-control select2" name="pel_id_user" id="pel_id_user" required>
                    @foreach ($use as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
