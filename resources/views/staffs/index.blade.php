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
                                <button class="btn btn-danger" type="button" onclick="ch(this.form, {{ \App\Order::where('staff_id',$staff->id)->count() }})">Delete</button>
                            </form>
                            <script>
                                function ch(f,id){
                                    swal({
                                            title: "Are you sure?",
                                            text: (id > 0)? "This staff id use "+ id +" count(s) in Order. You can not be delete this imaginary staff!" : "You will not be able to recover this imaginary staff!",
                                            type: "warning",
                                            showCancelButton: true,
                                            confirmButtonColor: "#DD6B55",
                                            confirmButtonText: (id == 0)?"Yes, delete it!":"Ok, I Know",
                                            cancelButtonText: "No, cancel plx!",
                                            closeOnConfirm: false,
                                            closeOnCancel: false,
                                            confirmButtonColor: "#63A8EB"
                                        },
                                        function (isConfirm) {
                                            if (isConfirm) {
                                                if (id ==  0){
                                                    swal("Deleted!", "Your imaginary staff has been deleted.", "success");
                                                    f.submit();
                                                }
                                                swal("Ok!", "Your imaginary staff deleting process has been canceled.", "success");
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