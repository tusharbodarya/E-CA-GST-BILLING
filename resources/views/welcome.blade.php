@extends('layouts.layout')
@section('title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Welcome</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Welcome</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted font-weight-medium">Sale Invoice</p>
                            <h4 class="mb-0">{{$data['SalesInvoice']}}</h4>
                        </div>

                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <i class="mdi mdi-sale font-size-24"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ url('/saleinvoice') }}" class="btn btn-primary waves-effect waves-light btn-sm">View Sale Invoice <i class="mdi mdi-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted font-weight-medium">Purchase Invoice</p>
                            <h4 class="mb-0">{{$data['PurchaseInvoice'] }}</h4>
                        </div>

                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <i class="fas fa-shopping-basket font-size-24"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ url('/purchaseinvoice') }}" class="btn btn-primary waves-effect waves-light btn-sm">View Purchase Invoice <i class="mdi mdi-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted font-weight-medium">Sale Challan</p>
                            <h4 class="mb-0">{{$data['SaleChallan']}}</h4>
                        </div>

                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <i class="fas fa-file-invoice-dollar font-size-24"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ url('/show-salechallan') }}" class="btn btn-primary waves-effect waves-light btn-sm">View Sale Challan <i class="mdi mdi-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted font-weight-medium">Purchase Challan</p>
                            <h4 class="mb-0">{{$data['PurchaseChallan']}}</h4>
                        </div>

                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <i class="fas fa-file-invoice font-size-24"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ url('/show-purchasechallan') }}" class="btn btn-primary waves-effect waves-light btn-sm">View Purchase Challan <i class="mdi mdi-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted font-weight-medium">Job Work Challan</p>
                            <h4 class="mb-0">{{$data['JobWorkChallan']}}</h4>
                        </div>

                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <i class="fas fa-network-wired font-size-24"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ url('/show-jobworkchallan') }}" class="btn btn-primary waves-effect waves-light btn-sm">View Job Work Challan <i class="mdi mdi-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted font-weight-medium">Bank Transaction</p>
                            <h4 class="mb-0">{{$data['CashTransaction']}}</h4>
                        </div>

                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <i class="mdi mdi-bank-transfer font-size-24"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ url('/add-transaction') }}" class="btn btn-primary waves-effect waves-light btn-sm">View Bank Transaction <i class="mdi mdi-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted font-weight-medium">Cash Transaction</p>
                            <h4 class="mb-0">0</h4>
                        </div>

                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <i class="mdi mdi-account-cash-outline font-size-24"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ url('/add-transaction') }}" class="btn btn-primary waves-effect waves-light btn-sm">View Cash Transaction <i class="mdi mdi-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-muted font-weight-medium">Accounts</p>
                            <h4 class="mb-0">{{$data['Accounts']}}</h4>
                        </div>

                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                            <span class="avatar-title">
                                <i class="mdi mdi-shield-account-outline font-size-24"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ url('/tbl-accounts') }}" class="btn btn-primary waves-effect waves-light btn-sm">View Accounts <i class="mdi mdi-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Monthly Sale</h4>

                    <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
            <!--end card-->
        </div>
        <!-- <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bar Chart</h4>

                    <div id="bar_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Line, Column & Area Chart</h4>

                    <div id="mixed_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Radial Chart</h4>

                    <div id="radial_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div> -->

    </div> <!-- end row -->
@endsection

@section('script')
    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- apexcharts init -->
    <!-- <script src="{{ asset('assets/js/pages/apexcharts.init.js') }}"></script> -->
    <script>
       options = {
    chart: { height: 350, type: "bar", toolbar: { show: !1 } },
    plotOptions: { bar: { dataLabels: { position: "top" } } },
    dataLabels: {
        enabled: !0,
        formatter: function (e) {
            return e + " ₹";
        },
        offsetY: -20,
        style: { fontSize: "12px", colors: ["#304758"] },
    },
    series: [
        {
            name: "Sale",
            data: ["{{$data['ts'][0]}}", "{{$data['ts'][1]}}", "{{$data['ts'][2]}}", "{{$data['ts'][3]}}", "{{$data['ts'][4]}}", "{{$data['ts'][5]}}", "{{$data['ts'][6]}}", "{{$data['ts'][7]}}", "{{$data['ts'][8]}}", "{{$data['ts'][9]}}", "{{$data['ts'][10]}}", "{{$data['ts'][11]}}"],
        },
    ],
    colors: ["#556ee6"],
    grid: { borderColor: "#f1f1f1" },
    xaxis: {
        categories: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ],
        position: "top",
        labels: { offsetY: -18 },
        axisBorder: { show: !1 },
        axisTicks: { show: !1 },
        crosshairs: {
            fill: {
                type: "gradient",
                gradient: {
                    colorFrom: "#D8E3F0",
                    colorTo: "#BED1E6",
                    stops: [0, 100],
                    opacityFrom: 0.4,
                    opacityTo: 0.5,
                },
            },
        },
        tooltip: { enabled: !0, offsetY: -35 },
    },
    fill: {
        gradient: {
            shade: "light",
            type: "horizontal",
            shadeIntensity: 0.25,
            gradientToColors: void 0,
            inverseColors: !0,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [50, 0, 100, 100],
        },
    },
    yaxis: {
        axisBorder: { show: !1 },
        axisTicks: { show: !1 },
        labels: {
            show: !1,
            formatter: function (e) {
                return e + " ₹";
            },
        },
    },
    title: {
        text: "Monthly Sale",
        floating: !0,
        offsetY: 320,
        align: "center",
        style: { color: "#444" },
    },
};
(chart = new ApexCharts(
    document.querySelector("#column_chart_datalabel"),
    options
)).render();
    </script>
@endsection
