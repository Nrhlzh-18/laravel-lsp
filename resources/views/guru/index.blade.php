@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA GURU</h2>
            <a href="/guru/create" class="button-primary">TAMBAH DATA</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @else
                <p class="text-danger">{{ session('error') }}</p>
            @endif
            
            <table cellpadding="10">
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>NAMA GURU</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>PASSWORD</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($gurus as $guru)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $guru->nip }}</td>
                    <td>{{ $guru->nama_guru }}</td>
                    <td>{{ $guru->jk }}</td>
                    <td>{{ $guru->alamat }}</td>
                    <td>{{ $guru->password }}</td>
                    <td>
                        <a href="/guru/edit/{{ $guru->id }}" class="button-warning">EDIT</a>
                        <a href="/guru/destroy/{{ $guru->id }}" onclick="return confirm('yakin hapus?')" class="button-danger">HAPUS</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection