<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
    <body>
        @extends('master')
            <div class="container"><br>
                <div class="model-fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">CREATE DATA</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    {!! Form::label('nim','NIM :',['class' => 'control-label']) !!}
                                    {!! Form::text('nim',null,['class'=> 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('nama','NAMA :',['class' => 'control-label']) !!}
                                    {!! Form::text('nama',null,['class'=> 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('kelas','KELAS :',['class' => 'control-label']) !!}
                                    {!! Form::text('kelas',null,['class'=> 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('shift','SHIFT :',['class' => 'control-label']) !!}
                                    {!! Form::text('shift',null,['class'=> 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('tgl_lahir','TGL LAHIR :',['class' => 'control-label']) !!}
                                    {!! Form::date('tgl_lahir',null,['class'=> 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('jenis_kelamin','JENIS KELAMIN :',['class' => 'control-label']) !!}
                                    {!! Form::text('jenis_kelamin',null,['class'=> 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email','EMAIL :',['class' => 'control-label']) !!}
                                    {!! Form::email('email',null,['class'=> 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('phone','PHONE :',['class' => 'control-label']) !!}
                                    {!! Form::text('phone',null,['class'=> 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('alamat','ALAMAT :',['class' => 'control-label']) !!}
                                    {!! Form::textarea('alamat',null,['class'=> 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('TAMBAH', ['class'=> 'btn btn-primary']) !!}
                                    {!! Form::submit('CANCEL', ['class'=> 'btn btn-danger']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </body>
</html>
