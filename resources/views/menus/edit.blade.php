@extends('layouts.app')
@section('title','Edit Details for ' .$menu->name)


@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Edit Detail for {{ $menu->name }} </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('menus.update', ['menu' => $menu]) }}" method="POST">
                @method('PATCH')

                @include('menus.form')


                <button type="submit" class="btn btn-primary">Update Menu</button>


            </form>
        </div>
    </div>
</div>

@endsection