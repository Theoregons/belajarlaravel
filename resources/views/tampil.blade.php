@extends('template')

@section('main')
    <h2> Ini Halaman Tabel </h2>
    {{-- <a href="{{ url('siswa/create') }}"><button class="btn btn-primary">Tambah Data</button></a> --}}
    <a href="{{ route('siswa.create') }}"><button class="btn btn-primary">Tambah Data</button></a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td><a href="{{ url('siswa/'.$item->id.'/edit') }}" class="btn btn-warning">Edit</a></td>
                    {{-- <td><a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning">Edit</a></td> --}}
                    <form action="{{ route('siswa.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <td><a href="{{ url('siswa/'.$item->id.'/edit') }}" class="btn btn-danger">Delete</a></td>
                    </form>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
