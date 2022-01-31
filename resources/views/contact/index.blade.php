@extends('layouts.app')
@section('content')
    <div class="container" align="center">
        <h2>ข้อมูลติดต่อลูกค้า</h2>
        <div class="col-md-12 text-right">
        <a href="/contact/create"   class="btn btn-primary my-2" >Create</a>
        </div>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PHONE</th>
            <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
            <th scope="row">{{ $row->id }}</th>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->phone }}</td>
            <td>
                <a href="{{ route('contact.edit', $row->id) }}"  class="btn btn-warning btn-sm" >EDIT</a>
                <a href="/contact/create"  class="btn btn-danger btn-sm" >Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </div>
@endsection