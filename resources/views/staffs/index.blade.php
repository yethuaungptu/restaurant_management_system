@extends('layouts.app3')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-sm-12">

            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <div class="col-sm-12">
            <h1 class="display-3">Staff</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('staffs.create')}}" class="btn btn-primary">New Staff</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th colspan="2" class="text-center">Action</th>

                </thead>
                <tbody>
                @foreach($staffs as $staff)
                    <tr>
                        <td>{{$staff->id}}</td>
                        <td>{{$staff->name}}</td>
                        <td>{{$staff->email}}</td>
                        <td>
                            <a href="{{ route('staffs.edit',$staff->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('staffs.destroy', $staff->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>

            </div>
        </div>
@endsection