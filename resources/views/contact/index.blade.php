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
              <div class="row">
              <a href="{{ route('contact.edit', $row->id) }}"  class="btn btn-warning btn-sm" >EDIT</a><div>&nbsp;</div>
                <form method="post" class="delete_form" action="{{ route('contact.destroy', $row->id) }}">
                    @csrf @method('DELETE')
                    <input type="submit" name="_method" data-name="{{ $row->name }}" value="DELETE" class="btn btn-danger btn-sm deleteForm" >
                    <!-- <input type="submit" name="_method" value="DELETE" class="btn btn-danger btn-sm"  onclick="return confirm('คุณต้องการลบข้อมูลคุณ {{$row->name}} ?')" > -->
                </form>
              </div>
            </td>
            </tr>
            @endforeach
        </tbody>
    </div>
@endsection