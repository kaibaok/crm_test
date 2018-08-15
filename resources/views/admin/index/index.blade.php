@extends("admin.layout")
@section('title') {{$title}}
@endsection

@section("rightcontent")
<!-- page content -->
<!-- top tiles -->
<div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-shopping-cart"></i> Đơn hàng</span>
        <div class="count">{{ $data['total'] }}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-shopping-cart"></i> Đơn hàng đã đặt</span>
        <div class="count">{{ $data['pCart'] }}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-shopping-cart"></i> Đơn hàng đang giao</span>
        <div class="count">{{ $data['gCart'] }}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-shopping-cart"></i> Đơn hàng hoàn tất</span>
        <div class="count">{{ $data['sCart'] }}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Thành viên online</span>
        <div class="count green">{{ $data['memberOnline'] }}</div>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Tổng thành viên</span>
        <div class="count green">{{ $data['totalMember'] }}</div>
    </div>
</div>
<!-- /top tiles -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph">
            <div class="row x_title">
                <div class="col-md-9">
                    <h3>Doanh thu 12 tháng</h3>
                </div>
                <div class="col-md-3 pull-right">
                    <div class="col-md-12 col-sm-12 col-xs-12 xdisplay_inputx form-group has-feedback">
                        <form action="" method="GET" id="fromChart">
                            <lable > Chọn năm : <select class="form-control" name="year" id="choose_year" onchange="fromChart.submit()">
                                @for($y = 2017; $y <= date("Y"); $y++)
                                    @php $select = ($year == $y) ? "selected" : "" @endphp
                                    <option value="{{ $y }}" {{ $select }}> {{ $y }} </option>
                                @endfor
                            </select>
                            </lable>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                <div style="width: 100%;">
                    <canvas id="mybarChart"></canvas>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection @section('js')
<script>
if ($('#mybarChart').length) {
    var ctx = document.getElementById("mybarChart");
    var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
            datasets: [{
                label: 'Doanh thu năm {{ $year }}',
                backgroundColor: "#26B99A",
                data: [{!!implode(",", $listData)!!}]
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}
</script>
@endsection