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
                <div class="modal-body">
                    {!! Form::model($edit,['method' => 'PATCH', 'action' => ['PagesController@update', $edit->id ]]) !!}
                            @include('form',['submitButtonText' => 'Update'])
                    {!! Form::close() !!}
                </div>
            </div>
    </body>
</html>
