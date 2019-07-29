@extends('layouts.app3')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="content-box big-box box-shadow">
                <h4><strong>Category Add</strong></h4>
                <form class="content-form " method="post" action="{{ route('category.store') }}">
                    @csrf
                    <div class="form-group col-md-12">
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control material" value="{{old('name') }}" placeholder="Category Name">
                        </div>

                        <button type="submit" class="btn btn-success text-uppercase waves">Registration</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="content-box big-box">
                <h4 class="zero-m"><strong>Category List</strong></h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr class="{{ ($category->id%2 ==0)? "info":"warning"}}">
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td><a href="{{ route('category.edit',$category->id)}}" role="button" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <form action="{{ route('category.destroy', $category->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="button" onclick="ch(this.form, {{ \App\Menu::where('category_id',$category->id)->count() }})">Delete</button>
                                    </form>
                                    <script>
                                        function ch(f,id){
                                            swal({
                                                    title: "Are you sure?",
                                                    text: (id > 0)? "This category use in "+ id +" menus. You will not be able to recover this imaginary category!" : "You will not be able to recover this imaginary category!",
                                                    type: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonColor: "#DD6B55",
                                                    confirmButtonText: "Yes, delete it!",
                                                    cancelButtonText: "No, cancel plx!",
                                                    closeOnConfirm: false,
                                                    closeOnCancel: false,
                                                    confirmButtonColor: "#63A8EB"
                                                },
                                                function (isConfirm) {
                                                    if (isConfirm) {
                                                        swal("Deleted!", "Your imaginary menu has been deleted.", "success");
                                                        f.submit();
                                                    } else {
                                                        swal("Cancelled", "Your imaginary menu is safe :)", "error");
                                                    }
                                                });

                                        }
                                    </script>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection