<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" scr="{{ asset('/js/popUp_data.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
    <body>
        @extends('master')
            @section('content')
                    @if(!empty($mahasiswa))
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col"><center>ID</center></th>
                                    <th scope="col"><center>Nim</center></th>
                                    <th scope="col"><center>Nama</center></th>
                                    <th scope="col"><center>Kelas</center></th>
                                    <th scope="col"><center>Shift</center></th>
                                    <th scope="col"><center>Alamat</center></th>
                                    <th scope="col"><center>Tgl Lahir</center></th>
                                    <th scope="col"><center>JK</center></th>
                                    <th scope="col"><center>Email</center></th>
                                    <th scope="col"><center>Phone</center></th>
                                    <th scope="col"><center>Action</center></th>
                                </tr>
                            </thead>
                            @foreach ($mahasiswa as $data)
                                <tbody>
                                    <tr>
                                        <td>{{ $data->id_mahasiswa }}</td>
                                        <td>{{ $data->nim }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->kelas }}</td>
                                        <td>{{ $data->shift }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->tgl_lahir }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->phone }}</td>
                                    </tr>
                                </tbody>
                            @endforeach
                        @else
                            <p>DATA KOSONG!</p>
                        @endif
                        </table>
                        <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#exampleModal">CREATE</button>
            @endsection
    </body>
</html>
