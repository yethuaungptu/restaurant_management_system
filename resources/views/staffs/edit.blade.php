@extends('layouts.app')
@section('title','Edit Details for ' .$staff->name)


@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Edit Detail for {{ $staff->name }} </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('staffs.update', ['staff' => $staff]) }}" method="POST">
                @method('PATCH')

                @include('staffs.form')

                <button type="submit" class="btn btn-primary">Update Staff</button>

            </form>
        </div>
    </div>
</div>

@endsection