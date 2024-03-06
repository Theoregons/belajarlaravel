@extends('template')

@section('main')
    <h2> Edit Data Siswa </h2>
    <form action={{ route('siswa.update', $data->id) }} method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">NIS</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ $data->nis }}">
        </div>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama" value="{{ $data->nama }}">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control  @error('alamat') is-invalid @enderror" name="alamat" value="{{ $data->alamat }}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
