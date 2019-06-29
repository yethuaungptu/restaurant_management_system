@extends('layouts.app3')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="content-box big-box box-shadow">
                <h4><strong>Category Edit</strong></h4>
                <form class="content-form " action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group col-md-12">
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control material" value="{{old('name') ??  $category->name}}" placeholder="Category Name">
                        </div>

                        <button type="submit" class="btn btn-success text-uppercase waves">Registration</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection