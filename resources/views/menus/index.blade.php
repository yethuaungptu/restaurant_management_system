@extends('layouts.app3')

@section('content')
    <div class="container-fluid">
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
                            <form action="{{ route('menus.destroy', $menu->id)}}" method="post" name="frm">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="button" onclick="ch(this.form);">Delete</button>
                            </form>
                            <script>
                                function ch(f){
                                    swal({
                                            title: "Are you sure?",
                                            text: "You will not be able to recover this imaginary menu!",
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
            <div>

            </div>
        </div>
@endsection