@extends('layouts.app3')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="content-box big-box box-shadow">
                <h4><strong>Monthly Sale And Profit For This Year</strong></h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Total Sales</th>
                            <th>Costs</th>
                            <th>Profit</th>
                            <th>Month</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($result as $i => $data)
                            <?php $costs = 0; $profit = 0; $total_sales = 0;
                            for ($j =0; $j<count($data); $j++){
                                    $costs += ($data[$j]->costs);
                                    $profit += $data[$j]->profit;
                                    $total_sales += $data[$j]->total_sales;

                                }
                            ?>
                            <tr class="{{ (((int)($i)) %2 ==0)? "info":"warning"}}">
                                <th scope="row">{{ ((int)($i)) }}</th>
                                <td>{{ $total_sales }}</td>
                                <td>{{ $costs }}</td>
                                <td>{{ $profit  }}</td>
                                <td>{{ date("F", strtotime("2001-" . $i . "-01")) }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection