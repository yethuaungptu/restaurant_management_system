@extends('layouts.app3')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="content-box big-box box-shadow">
                <h4><strong>Category Add</strong></h4>
                <form class="content-form " method="post" action="{{ route('sales.store') }}">
                    @csrf
                    <div class="form-group form-horizontal">
                        <div class="form-group">
                            <label for="total" class="col-sm-2 control-label">Total Sale Today</label>
                            <div class="col-sm-10">
                                <input type="number" name="total_sales" class="form-control material" id="total" value="{{(int) (\App\Order::whereDate('created_at' , \Carbon\Carbon::today())->get()->sum('total')) }}" readonly >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="costs" class="col-sm-2 control-label">Total Cost Today</label>
                            <div class="col-sm-10">
                                <input type="number" name="costs" class="form-control material" onkeyup="setval();" value="0" id="costs" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit" class="col-sm-2 control-label">Total Profit</label>
                            <div class="col-sm-10">
                                <input type="number" name="profit" class="form-control material" id="profit" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger waves text-uppercase">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function setval() {
            $('#profit').val($('#total').val()-$('#costs').val());
        }
    </script>




@endsection