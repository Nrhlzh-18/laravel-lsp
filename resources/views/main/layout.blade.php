<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARACT PENILAIAN SISWA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    {{-- HEADER --}}
    <div class="header">
        <img src="{{ asset('gambar/header.jpg') }}" alt="header" width="100%" height="40%">
    </div>

    {{-- MENU --}}
    <div class="menu">
        <b>
            <a href="/home">HOME</a>
            @if (session('user')->role == 'admin')
                <a href="/guru/index">GURU</a>
                <a href="/jurusan/index">JURUSAN</a>
                <a href="/kelas/index">KELAS</a>
                <a href="/siswa/index">SISWA</a>
                <a href="/mapel/index">MATA PELAJARAN</a>
                <a href="/mengajar/index">MENGAJAR</a>
            @else
                <a href="/nilai/index">NILAI</a>    
            @endif
            <a href="/logout">LOGOUT</a>
        </b>
    </div>

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    <div class="footer">
        <center>
            <p>
                &copy; {{ date('Y') }} - UJIKOM LSP
            </p>
        </center>
    </div>
    
</body>
</html>