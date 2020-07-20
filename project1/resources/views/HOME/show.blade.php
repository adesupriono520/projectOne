<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/show.css') }}">
    <title>Show</title>
</head>
    <body>
        @extends('master')
        @section('content')
            <table class="table table-dark">
                <tr>
                    <th><a href="/home"><span class="glyphicon glyphicon-remove"></span></a></th>
                    <td><center><h2>PROFILE MAHASISWA</h2></center></td>
                </tr>
                <tr>
                    <th>ID Masasiswa</th>
                    <td>{{ $show->id }}</td>
                </tr>
                <tr>
                    <th>Nim</th>
                    <td>{{ $show->nim }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $show->nama }}</td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>{{ $show->kelas }}</td>
                </tr>
                <tr>
                    <th>Shift</th>
                    <td>{{ $show->shift }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $show->alamat }}</td>
                </tr>
                <tr>
                    <th>TGL Lahir</th>
                    <td>{{ $show->tgl_lahir->format('d-m-Y') }}</td>
                </tr>
                <tr>
                    <th>JK</th>
                    <td>{{ $show->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $show->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $show->phone }}</td>
                </tr>
            </table>
        @endsection
    </body>
</html>
