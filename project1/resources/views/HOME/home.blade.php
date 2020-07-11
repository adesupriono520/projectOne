<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->nim }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->kelas }}</td>
                                        <td>{{ $data->shift }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->tgl_lahir }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>
                                            <div class="box-button">
                                                {{ link_to('home/'.$data->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
                                            </div>
                                            <div class="box-button">
                                                {{ link_to('home/' .$data->id. '/edit', 'Edit',['class' =>'btn btn-warning btn-sm']) }}
                                            </div>
                                            <div class="box-button">
                                                {!! Form::open(['method' => 'DELETE', 'action' => ['PagesController@destroy',$data->id]]) !!}
                                                {!! Form::submit('Delete',['class' => 'btn btn-danger btn-sm']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        @else
                            <p>DATA KOSONG!</p>
                        @endif
                        </table>
                        <div class="table-nav">
                            <div class="paging">
                                {{ $mahasiswa->links() }}
                            </div>
                        </div><br>
                        <div class="tombol-nav">
                            <a href="create"><button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#exampleModal">CREATE</button></a>
                        </div>
            @endsection
            @section('footer')
                    @include('HOME.footer')
            @endsection
    </body>
</html>
