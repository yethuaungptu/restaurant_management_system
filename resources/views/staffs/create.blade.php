@extends('layouts.app')

@section('content')
    <div class="container">
     <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a staff</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('staffs.store') }}">

                    @include('staffs.form')
                    <button type="submit" class="btn btn-primary">Add Staff</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection