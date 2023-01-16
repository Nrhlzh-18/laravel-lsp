@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>TAMBAH DATA NILAI</h2>
            <form action="/nilai/store" method="post">
                @csrf
                <table width="50%">
                    <tr>
                        <td width="25%">GURU MAPEL</td>
                        <td width="25%">
                            <select name="mengajar_id">
                                <option selected disabled>PILIH GURU MAPEL</option>
                                @foreach ($mengajar as $m)
                                    <option value="{{ $m->id }}">{{ $m->mapel->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">SISWA</td>
                        <td width="25%">
                            <select name="siswa_id">
                                <option selected disabled>PILIH SISWA</option>
                                @foreach ($siswa as $s)
                                    <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">UH</td>
                        <td width="25%">
                            <input type="number" name="uh">
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">UTS</td>
                        <td width="25%">
                            <input type="number" name="uts">
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="25%">UAS</td>
                        <td width="25%">
                            <input type="number" name="uas">
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
        </b>
    </center>
@endsection