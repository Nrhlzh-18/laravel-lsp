@extends('main.layout')
@section('content')
    <center>
        <h2>TAMBAH DATA MENGAJAR</h2>
        <form action="/mengajar/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td width="25%">GURU</td>
                    <td width="25%">
                        <select name="guru_id">
                            <option selected disabled>PILIH GURU</option>
                            @foreach ($guru as $g)
                                <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="25%">MATA PELAJARAN</td>
                    <td width="25%">
                        <select name="mapel_id">
                            <option selected disabled>PILIH MAPEL</option>
                            @foreach ($mapel as $m)
                                <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="25%">KELAS</td>
                    <td width="25%">
                        <select name="kelas_id">
                            <option selected disabled>PILIH KELAS</option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button type="submit" class="button-primary">SIMPAN</button>
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection