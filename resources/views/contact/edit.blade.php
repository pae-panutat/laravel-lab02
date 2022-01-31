@extends('layouts.app')
@section('content')
    <div class="container">
       @if ($errors->all())
       <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
       @endif
        {!! Form::open(['action' => ['ContactController@update', $data->id], 'method' => 'PUT']) !!}
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('NAME') !!}
                    {!! Form::text('name', $data->name, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('E-MAIL') !!}
                    {!! Form::text('email', $data->email, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('PHONE') !!}
                    {!! Form::text('phone', $data->phone, ["class" => "form-control"]) !!}
                </div>
                <input type="submit" value="Update" class="btn btn-primary">
                <a href="/contact"   class="btn btn-danger" >Back</a>
            </div>
        {!! Form::close() !!}
    </div>

@endsection