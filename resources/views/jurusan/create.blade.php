@extends('main.layout')
@section('content')
    <center>
        <h2>TAMBAH DATA JURUSAN</h2>
        <form action="/jurusan/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td width="25%">JURUSAN</td>
                    <td width="25%"><input type="text" name="nama_jurusan"></td>
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