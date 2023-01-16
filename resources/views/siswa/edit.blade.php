@extends('main.layout')
@section('content')
    <center>
        <h2>EDIT DATA SISWA</h2>
        <form action="/siswa/update/{{ $siswa->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td width="25%">NIS</td>
                    <td width="25%"><input type="text" name="nis" value="{{ $siswa->nis }}"></td>
                </tr>
                <tr>
                    <td width="25%">NAMA SISWA</td>
                    <td width="25%"><input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}"></td>
                </tr>
                <tr>
                    <td width="25%">JENIS KELAMIN</td>
                    <td width="25%">
                        <input type="radio" name="jk" value="L" {{ $siswa->jk == 'L' ? 'checked' : '' }}>Laki-Laki
                        <input type="radio" name="jk" value="P" {{ $siswa->jk == 'P' ? 'checked' : '' }}>Perempuan
                    </td>
                </tr>
                <tr>
                    <td width="25%">ALAMAT</td>
                    <td width="25%"><textarea name="alamat" cols="30" rows="5">{{ $siswa->alamat }}</textarea></td>
                </tr>
                <tr>
                    <td width="25%">KELAS</td>
                    <td>
                        <select name="kelas_id">
                            @foreach ($kelas as $k)
                                @if ($k->id == $siswa->kelas_id)
                                    <option value="{{ $k->id }}" selected>{{ $k->nama_kelas }}</option>   
                                @else
                                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="25%">PASSWORD</td>
                    <td width="25%"><input type="password" name="password" value="{{ $siswa->password }}"></td>
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