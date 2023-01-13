@extends('main.layout')
@section('content')
    <center>
        <h2>UBAH DATA MATA PELAJARAN</h2>
        <form action="/mapel/update/{{ $mapel->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <th width="25%">MATA PELAJARAN</th>
                    <th width="25%"><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></th>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button type="submit" class="button-primary">UBAH</button>
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection