@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA KELAS</h2>
            <a href="/kelas/create" class="button-primary">TAMBAH DATA</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @else
                <p class="text-danger">{{ session('error') }}</p>
            @endif

            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>KELAS</th>
                    <th>JURUSAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($kelas as $k)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->nama_kelas }}</td>
                    <td>{{ $k->jurusan->nama_jurusan }}</td>
                    <td>
                        <a href="/kelas/edit/{{ $k->id }}" class="button-warning">EDIT</a>
                        <a href="/kelas/destroy" class="button-danger" onclick="return confirm('Yakin Hapus?')">HAPUS</a>
                    </td>
                @endforeach
            </table>
        </b>
    </center>
@endsection