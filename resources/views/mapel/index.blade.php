@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA MATA PELAJARAN</h2>
            <a href="/mapel/create" class="button-primary">TAMBAH DATA</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @else
                <p class="text-danger">{{ session('error') }}</p>
            @endif

            <table>
                <tr>
                    <th>NO</th>
                    <th>MATA PELAJARAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($mapels as $mapel)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mapel->nama_mapel }}</td>
                        <td>
                            <a href="/mapel/edit/{{ $mapel->id }}" class="button-warning">EDIT</a>
                            <a href="/mapel/destroy/{{ $mapel->id }}" onclick="return confirm('Yakin ingin menghapus?')" class="button-danger">HAPUS</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection