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
            @if(isset($edit))
                {!! Form::hidden('id', $edit->id) !!}
            @endif
            <div class="container"><br>
                <div class="model-fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">CREATE DATA</h3>
                               <a href="/home"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button></a>
                            </div>
                            <div class="modal-body">
                                {{csrf_field() }}
                                {{-- error nim --}}
                                @if($errors->any())
                                    <div class="form-group {{$errors->has('nim') ? 'has-error' : 'has-success'}}">
                                @else
                                    <div class="form-group">
                                @endif
                                    {!! Form::label('nim','NIM :',['class' => 'control-label']) !!}
                                    {!! Form::text('nim',null,['class'=> 'form-control']) !!}
                                    @if($errors->has('nim'))
                                        <span class="help-block">{{ $errors->first('nim') }}</span>
                                @endif
                                </div>
                                {{-- error nama --}}
                                @if($errors->any())
                                    <div class="form-group {{$errors->has('nama')  ? 'has-error' : 'has-success' }}">
                                @else
                                    <div class="form-group">
                                @endif
                                    {!! Form::label('nama','NAMA :',['class' => 'control-label']) !!}
                                    {!! Form::text('nama',null,['class'=> 'form-control']) !!}
                                    @if($errors->has('nama'))
                                        <span class="help-block">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                                {{-- error jurusan --}}
                                @if($errors->any())
                                    <div class="form-group {{$errors->has('jurusan') ? 'has-error' : 'has-success'}}">
                                @else
                                    <div class="form-group">
                                @endif
                                    {!! Form::label('jurusan','JURUSAN :',['class'=> 'control-label']) !!}
                                    {!! Form::text('jurusan',null,['class'=> 'form-control']) !!}
                                    @if($errors->has('jurusan'))
                                        <span class="help-block">{{$errors->first('jurusan') }}</span>
                                    @endif
                                    </div>
                                {{-- error shift --}}
                                @if($errors->any())
                                    <div class="form-group {{$errors->has('shift')  ? 'has-error' : 'has-success'}} ">
                                @else
                                    <div class="form-group">
                                @endif
                                    {!! Form::label('shift','SHIFT :',['class' => 'control-label']) !!}
                                    {!! Form::text('shift',null,['class'=> 'form-control']) !!}
                                    @if($errors->has('shift'))
                                        <span class="help-block">{{ $errors->first('shift')}}</span>
                                    @endif
                                </div>
                                {{-- error tgl_lahir --}}
                                @if($errors->any())
                                    <div class="form-group {{$errors->has('tgl_lahir') ? 'has-error' : 'has-success'}} ">
                                @else
                                    <div class="form-group">
                                @endif
                                    {!! Form::label('tgl_lahir','TGL LAHIR :',['class' => 'control-label']) !!}
                                    {!! Form::date('tgl_lahir', !empty($edit) ? $edit->tgl_lahir->format('Y-m-d') : null,['class'=> 'form-control', 'id' => 'tgl_lahir']) !!}
                                    @if($errors->has('tgl_lahir'))
                                        <span class="help-block">{{ $errors->first('tgl_lahir')}}</span>
                                    @endif
                                </div>
                                {{-- error jenis_kelamin --}}
                                @if($errors->any())
                                    <div class="form-group {{$errors->has('jenis_kelamin')  ? 'has-error' : 'has-success'}}">
                                 @else
                                    <div class="form-group">
                                @endif
                                    {!! Form::label('jenis_kelamin','JENIS KELAMIN :',['class' => 'control-label']) !!}
                                    {!! Form::text('jenis_kelamin',null,['class'=> 'form-control']) !!}
                                    @if($errors->has('jenis_kelamin'))
                                        <span class="help-block">{{ $errors->first('jenis_kelamin') }}</span>
                                    @endif
                                </div>
                                {{-- error email --}}
                                @if($errors->any())
                                    <div class="form-group {{$errors->has('email')  ? 'has-error' : 'has-success'}}">
                                 @else
                                    <div class="form-group">
                                @endif
                                    {!! Form::label('email','EMAIL :',['class' => 'control-label']) !!}
                                    {!! Form::email('email',null,['class'=> 'form-control']) !!}
                                    @if($errors->has('email'))
                                        <span class="help-block">{{$errors->first('email') }}</span>
                                    @endif
                                </div>
                                {{-- error Phone --}}
                                @if($errors->any())
                                    <div class="form-group {{$errors->has('phone')  ? 'has-error' : 'has-success'}}">
                                 @else
                                    <div class="form-group">
                                @endif
                                    {!! Form::label('phone','PHONE :',['class' => 'control-label']) !!}
                                    {!! Form::text('phone',null,['class'=> 'form-control']) !!}
                                    @if($errors->has('phone'))
                                        <span class="help-block">{{$errors->first('phone') }}</span>
                                    @endif
                                </div>
                                {{-- kode Access--}}
                                @if($errors->any())
                                    <div class="form-group {{ $errors->has('kodeAccess') ? 'has-error' : 'has-success'}}">
                                @else
                                    <div class="form-group">
                                @endif
                                    <div class="form-group">
                                        {!! Form::label('kodeAccess','KODE ACCESS :',['class'=> 'control-label']) !!}
                                        {!! Form::text('kodeAccess',null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                {{-- error alamat --}}
                                @if($errors->any())
                                    <div class="form-group {{$errors->has('alamat')  ? 'has-error' : 'has-success'}}">
                                 @else
                                    <div class="form-group">
                                @endif
                                    {!! Form::label('alamat','ALAMAT :',['class' => 'control-label']) !!}
                                    {!! Form::textarea('alamat',null,['class'=> 'form-control']) !!}
                                    @if($errors->has('alamat'))
                                        <span class="help-block">{{$errors->first('alamat') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-controll'])!!}
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </body>
</html>
