@extends('layouts.app')

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
            <h1 class="display-3">Menus</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('menus.create')}}" class="btn btn-primary">New menu</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Count</th>
                    <th>Category</th>
                    <th colspan="2" class="text-center">Action</th>

                </thead>
                <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <td>{{$menu->id}}</td>
                        <td>{{$menu->name}}</td>
                        <td>{{$menu->price}}</td>
                        <td>{{$menu->count}}</td>
                        <td>{{$menu->category->name}}</td>
                        <td>
                            <a href="{{ route('menus.edit',$menu->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('menus.destroy', $menu->id)}}" method="post">
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