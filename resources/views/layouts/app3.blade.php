<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Restaurant Management System') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/metisMenu/dist/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/Waves/dist/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/sweetalert/dist/sweetalert.css') }}">



    <link rel="stylesheet" href="{{ asset('js/selects/cs-select.css') }}">
    <link rel="stylesheet" href="{{ asset('js/selects/cs-skin-elastic.css') }}">

    <link rel="stylesheet" href="{{ asset('bower_components/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/zabuto_calendar/zabuto_calendar.min.css') }}">
    <script src="{{ asset('js/menu/modernizr.custom.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/maps/style.css') }}">

    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <!--[if lt IE 9]-->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

    <script src="{{ asset('bower_components/html5shiv/dist/html5shiv.min.js') }}"></script>
    <script src="{{ asset('bower_components/respondJs/dest/respond.min.js') }}"></script>

    <![endif]-->
</head>
<body>
<div id="preloader" class="preloader table-wrapper">
    <div class="table-row">
        <div class="table-cell">
            <div class="la-ball-scale-multiple la-3x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>
<div id="main-wrapper" class="main-wrapper">
    @include('nav3')

    <div id="content" class="content">
        @yield('content')
    </div>

    <!--Welcome notification-->



</div>

<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>
<script src="{{ asset('bower_components/Waves/dist/waves.min.js') }}"></script>
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('bower_components/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js') }}"></script>
<script src="{{ asset('bower_components/cta/dist/cta.min.js') }}"></script>

<!--Menu-->
<script src="{{ asset('js/menu/classie.js') }}"></script>
<script src="{{ asset('js/menu/gnmenu.js') }}"></script>

<!--Selects-->
<script src="{{ asset('js/selects/selectFx.js') }}"></script>

<!--Flot-->
<script src="{{ asset('bower_components/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('bower_components/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('bower_components/flot.curvedlines/curvedLines.js') }}"></script>
<script src="{{ asset('js/flot/jquery.flot.orderBars.js') }}"></script>

<!--Custom Flot Charts-->
<script src="{{ asset('js/flot/line-chart-1.js') }}"></script>
<script src="{{ asset('js/flot/line-chart-2.js') }}"></script>
<script src="{{ asset('js/flot/line-chart-3.js') }}"></script>
<script src="{{ asset('js/flot/bar-chart.js') }}"></script>

<!--C3.js-->
<script src="{{ asset('bower_components/d3/d3.min.js') }}"></script>
<script src="{{ asset('bower_components/c3/c3.min.js') }}"></script>

<!--EasyPieChart-->
<script src="{{ asset('bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>

<!--Zabuto Calendar-->
<script src="{{ asset('bower_components/zabuto_calendar/zabuto_calendar.min.js') }}"></script>

<!--Simple Weather-->
<script src="{{ asset('bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>

<!--Notification-->
<script src="{{ asset('js/notifications/notificationFx.js') }}"></script>
<script src="{{ asset('bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>


<!--Custom Scripts-->
<script src="{{ asset('js/common.js') }}"></script>

<script>
    $(function () {

        // show the notification
        setTimeout(function () {
            // create the notification
            var notification = new NotificationFx({
                message: '<span>Welcome back, {{ Auth::user()->name }}</span>',
                layout: 'attached',
                effect: 'bouncyflip',
                ttl: 4000,
                wrapper: document.getElementById("welcome"),
                type: 'notice', // notice, warning, success or error
            });
            notification.show();
        }, 1200);

        /*c3.js*/
        var chart = c3.generate({
            bindto: '#reg-history',
            size: {
                height: 90
            },
            data: {
                columns: [
                    ['New users', 30, 35, 45, 33, 48, 54, 41, 66, 49, 43, 38, 46]
                ]
            },
            legend: {
                show: false
            },
            color: {
                pattern: ['#fff']
            },
            point: {
                r: 3
            },
            axis: {
                x: {
                    show: false
                },
                y: {
                    show: false
                }
            }
        });
        //EasyPieChart
        $('.easypiechart').easyPieChart({
            lineCap: 'square',
            trackColor: '#cccccc',
            barColor: '#42b382',
            lineWidth: 5,
            scaleLength: 0
        });

        //Zabuto Calendar
        $("#calendar-widget").zabuto_calendar({
            language: "en",
            cell_border: false,
            today: true,
            show_days: true,
            nav_icon: {
                prev: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>'
            }
        });

        //Simple Weather
        /* Does your browser support geolocation? */
        if ("geolocation" in navigator) {
            $('#weather').show();
        } else {
            $('#weather').hide();
        }

        function geolocation() {
            navigator.geolocation.getCurrentPosition(positionFound, positionNotFound)
        }
        geolocation();

        function positionFound(position) {
            loadWeather(position.coords.latitude + ',' + position.coords.longitude); //load weather using your lat/lng coordinates
        }

        function positionNotFound(error) {
            $("#weather").html('<div class="big-box yellow">Permission to check your location is denied. To allow it go to your browser settings.</div>'); //showing warning message about browsers permissions
        }


        function loadWeather(location, woeid) {
            $.simpleWeather({
                location: location,
                woeid: woeid,
                unit: 'c',
                success: function (weather) {
                    //Weather widget markup
                    html = '<div class="weather-container text-center"><h4 class="weather-city zero-m">Weather forecast in ' + weather.city + '</h4><div class="i-block big-box"><i class="block yellow icon-' + weather.forecast[0].code + '"></i>' + weather.forecast[0].day + ' / ' + weather.forecast[0].high + '&deg;C</div>';
                    html += '<div class="i-block big-box"><i class="block blue icon-' + weather.forecast[1].code + '"></i>' + weather.forecast[1].day + ' / ' + weather.forecast[1].high + '&deg;C</div>';
                    html += '<div class="i-block big-box"><i class="block red icon-' + weather.forecast[2].code + '"></i>' + weather.forecast[2].day + ' / ' + weather.forecast[2].high + '&deg;C</div></div>';


                    $("#weather").html(html);
                },
                error: function (error) {
                    $("#weather").html('<p>' + error + '</p>');
                }
            });
        }

        var months = ["January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December"];

        //Tooltips for Flot Charts
        if ($(".flot-chart")[0]) {
            $(".flot-chart").bind("plothover", function (event, pos, item) {
                if (item) {
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);

                    if (item.seriesIndex == 1){
                        $(".flot-tooltip").html((y/100)*Number($('#topOC').html())+" , "+$('#mename'+item.dataIndex).val())
                            .css({top: item.pageY+5, left: item.pageX+5, width:150})
                            .fadeIn(200);
                    }else if(item.seriesIndex == 0) {
                        $(".flot-tooltip").html((y/100)*Number($('#topO').val())+" , "+new Date($('#ti'+item.dataIndex).val()).getDate()+"-"+ months[new Date($('#ti'+item.dataIndex).val()).getMonth()])
                            .css({top: item.pageY+5, left: item.pageX+5, width:150})
                            .fadeIn(200);
                    }

                } else {
                    $(".flot-tooltip").hide()
                }
            });

            $("<div class='flot-tooltip'></div>").appendTo("body");
        }
    });
</script>
</body>
</html>
