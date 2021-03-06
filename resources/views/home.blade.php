@extends('layouts.app3')

@section('content')
    <!--Content-->

        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>Dashboard</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="content-box ultra-widget">
                            <div class="w-content big-box">
                                <div class="w-progress">
                                    <span class="w-amount blue">{{ \App\Order::whereDate('created_at' , \Carbon\Carbon::today())->get()->sum('total') }} Ks</span>
                                    <br>
                                    <span class="text-uppercase w-name">Today Sale</span>
                                </div>
                                <span class="w-refresh w-p-icon"><i class="fa fa-usd"></i></span>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="content-box ultra-widget">
                            <div class="w-content big-box">
                                <div class="w-progress">
                                    <span class="w-amount green">{{ \App\Menu::query()->count() }}</span>
                                    <br>
                                    <span class="text-uppercase w-name">Total Menu</span>
                                </div>
                                <span class="w-refresh w-p-icon"><i class="fa fa-list-alt"></i></span>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="content-box ultra-widget">
                            <div class="w-content big-box">
                                <div class="w-progress">
                                    <span class="w-amount red">{{ \App\Order::whereDate('created_at' , \Carbon\Carbon::today())->get()->count() }}</span>
                                    <br>
                                    <span class="text-uppercase w-name">Today orders</span>
                                </div>
                                <span class="w-refresh w-p-icon"><i class="fa fa-cart-plus"></i></span>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="content-box ultra-widget">
                            <div class="w-content big-box">
                                <div class="w-progress">
                                    <span class="w-amount yellow">{{ \App\Category::query()->count() }}</span>
                                    <br>
                                    <span class="text-uppercase w-name">Total Category</span>
                                </div>
                                <span class="w-refresh w-p-icon"><i class="fa fa-calendar"></i></span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="content-box biggest-box red-bg">
                                <div class="pull-left">
                                    <span class="block">Yesterday Sales</span>
                                    <h1 class="text-uppercase zero-m">{{ \App\Order::whereDate('created_at' , \Carbon\Carbon::yesterday())->get()->sum('total') }} Ks</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content-box biggest-box yellow-bg">
                                <div class="pull-left">
                                    <span class="block">Yesterday Orders</span>
                                    <h1 class="text-uppercase zero-m">{{ \App\Order::whereDate('created_at' , \Carbon\Carbon::yesterday())->get()->count() }}</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="content-box biggest-box blue-bg">
                                <div class="pull-left">
                                    <span class="block">Top Order</span>
                                    <h1 class="text-uppercase zero-m">{{ \App\Order::max('total') }} Ks</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content-box biggest-box green-bg">
                                <div class="pull-left">
                                    <span class="block">Top Menu</span>
                                    <h1 class="text-uppercase zero-m">{{ (\App\Menu::all()->isNotEmpty())? \App\Menu::orderBy('count','desc')->first()->name: 'No Menu for now'}}</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="content-title big-box i-block">
                        <h4 class="zero-m">Top 5 Waiter </h4>
                        <div class="content-tools i-block pull-right">
                            <a class="repeat-btn">
                                <i class="fa fa-repeat"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Config option 1</a></li>
                                <li><a href="#">Config option 2</a></li>
                            </ul>
                            <a class="close-btn">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="big-box">
                        @for($i = 0; $i < \App\Order::groupBy('staff_id')->limit(5)->get()->count(); $i++)
                        <div class="member-info">
                            <img src="img/team/admin.png" alt="admin" class="img-circle">
                            <span class="member-name">{{ \App\Order::groupBy('staff_id')->selectRaw('count(*) as total, staff_id')->orderBy('total','desc')->get()[$i]->staff->name }}</span>
                            <span class="member-role red pull-right">{{\App\Order::groupBy('staff_id')->selectRaw('count(*) as total, staff_id')->orderBy('total','desc')->get()[$i]->total}}</span>
                        </div>
                        @endfor
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-box">
                    <div class="blue-bg big-box calendar text-center">
                        <div class="content-title i-block">
                            <h4 class="zero-m">Today</h4>
                            <div class="content-tools i-block pull-right">
                                <a class="repeat-btn">
                                    <i class="fa fa-repeat"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Config option 1</a></li>
                                    <li><a href="#">Config option 2</a></li>
                                </ul>
                                <a class="close-btn">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="small-box">
                            <div class="weekday"></div>
                            <div class="date"></div>
                            <div class="month-year"><span class="month"></span> / <span class="year"></span></div>
                        </div>
                    </div>

                    <div class="big-box">
                        <div id="calendar-widget"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="content-box">
                    <div class="content-title big-box i-block">
                        <h4 class="zero-m">Bar Chart Example</h4>
                        <div class="content-tools i-block pull-right">
                            <a class="repeat-btn">
                                <i class="fa fa-repeat"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Config option 1</a></li>
                                <li><a href="#">Config option 2</a></li>
                            </ul>
                            <a class="close-btn">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                        <div class="chart-legend left">
                            <div class="pull-left item">
                                <span id="new-visitor" class="text-lowercase block">Top sale per 10days</span><span class="position-title blue" id="topsa">{{ max($data) }} Ks</span>
                                <input type="hidden" id="data1" value="">
                            </div>
                            <span id="new-orders" class="text-lowercase block">Top Order count per 10menus</span><span class="position-title red" id="topOC">{{ \App\Menu::max('count') }}</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    @for($i=0; $i< 10; $i++)
                        <input type="hidden" id="data{{$i+2}}" value="{{ $data[$i] }}">
                        <input type="hidden" id="ti{{$i}}" value="{{ $dtime[$i]['created_at'] }}">
                    @endfor
                    <input type="hidden" id="topO" value="{{ max($data) }}">
                    @for($j=0; $j<10; $j++)
                        @if($j<count($menuC))
                            <input type="hidden" id="men{{ $j+2 }}" value="{{ ($menuC[$j])? $menuC[$j]['count']: 0 }}">
                            <input type="hidden" id="mename{{ $j }}" value="{{ $menuC[$j]['name'] }}">
                        @else
                            <input type="hidden" id="men{{ $j+2 }}" value="0">
                        @endif
                    @endfor
                    <input type="hidden" id="topM" value="{{ \App\Menu::max('count') }}">
                    <div class="big-box ">
                        <div id="bar-chart" class="flot-chart flot-big"></div>
                    </div>
                </div>


            </div>

        </div>

        <!--Footer-->
        <div class="footer">© 2015 Copyright</div>
    <div id="welcome"></div>
@endsection

