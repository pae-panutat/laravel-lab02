@extends('layouts.app')
@section('content')
    <div class="container">
        {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST']) !!}
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('NAME') !!}
                    {!! Form::text('name', null, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('E-MAIL') !!}
                    {!! Form::text('email', null, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('PHONE') !!}
                    {!! Form::text('phone', null, ["class" => "form-control"]) !!}
                </div>
                <input type="submit" value="บันทึก" class="btn btn-primary">
            </div>
        {!! Form::close() !!}
    </div>
@endsection