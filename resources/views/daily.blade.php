@extends('layouts.app3')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="content-box big-box box-shadow">
                <h4><strong>Daily Sale And Profit</strong></h4>
                     <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Total Sales</th>
                            <th>Costs</th>
                            <th>Profit</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr class="{{ ($data->id%2 ==0)? "info":"warning"}}">
                                <th scope="row">{{ $data->id }}</th>
                                <td>{{ $data->total_sales }}</td>
                                <td>{{ $data->costs  }}</td>
                                <td>{{ $data->profit }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection