@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA JURUSAN</h2>
            <a href="/jurusan/create" class="button-primary">TAMBAH DATA</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @else
                <p class="text-danger">{{ session('error') }}</p>
            @endif

            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>JURUSAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($jurusans as $jurusan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $jurusan->nama_jurusan }}</td>
                        <td>
                            <a href="/jurusan/edit/{{ $jurusan->id }}" class="button-warning">EDIT</a>
                            <a href="/jurusan/destroy/{{ $jurusan->id }}" onclick="return confirm('Yakin ingin menghapus?')" class="button-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection