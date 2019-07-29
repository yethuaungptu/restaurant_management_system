@extends('layouts.app3')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="content-box big-box box-shadow">
                <h4><strong>Yearly Sale And Profit</strong></h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Total Sales</th>
                            <th>Costs</th>
                            <th>Profit</th>
                            <th>Year</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0; $i< 6; $i++)
                            <tr class="{{ ($i%2 ==0)? "info":"warning"}}">
                                <th scope="row">{{ $i+1 }}</th>
                                <td>{{ $total_sales[$i] }}</td>
                                <td>{{ $costs[$i]  }}</td>
                                <td>{{ $profits[$i] }}</td>
                                <td>{{ \Carbon\Carbon::now()->year-$i}}</td>

                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection