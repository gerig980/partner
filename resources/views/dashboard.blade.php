@extends('layouts.backend.app1')
@push('css')
<style>
    @import url('https://fonts.cdnfonts.com/css/general-sans');
</style>
@endpush
@include('layouts.backend.styling_scss')
@section('title', 'Dashboard')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row project-wrapper">
            <div class="col-xxl-8">
                <div class="row">
                    <div class="col-xl-4">
                        <a href="{{ route('contacts') }}">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-primary rounded-2 fs-2">
                                                <i data-feather="mail"></i>                                           
                                            </span>          
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Contacts</p>
                                            <div class="d-flex align-items-center mb-0">
                                                <div class="d-flex align-items-center mb-0">
                                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{ \App\Models\Contact::count() }}"></span></h4>                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </a>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <a href="">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-warning rounded-2 fs-2">
                                                <i data-feather="award"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Produkte</p>
                                            <div class="d-flex align-items-center mb-0">
                                                <div class="d-flex align-items-center mb-0">
                                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{ \App\Models\Product::count() }}"></span></h4>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </a>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <a href="">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-info rounded-2 fs-2">
                                                <i data-feather="clock"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Aktivitete</p>
                                            <div class="d-flex align-items-center mb-0">
                                                <div class="d-flex align-items-center mb-0">
                                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{ \App\Models\Activity::count() }}"></span></h4>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </a>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">    
                    {{-- <div>
                        <div class="row">
                            <div class="col-xl">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex">
                                        <h4 class="graphic-title">Aplikime në muaj</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body p-0 pb-2">
                                        <div class="chart-container">
                                            <div id="main" style="width: 100%;height:400px;"></div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <!-- end col -->
                        </div>
                    </div> --}}
                </div><!-- end row -->
            </div><!-- end col -->

            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="card-title mb-0"></h4>
                    </div><!-- end cardheader -->
                    <div class="card-body pt-2">
                        <div class="upcoming-scheduled">
                            <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="today" data-inline-date="true">
                        </div>

                        <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted"></h6>

                       
                        <div class="mini-stats-wid d-flex align-items-center mt-3">
                            
                         

                            <div class="flex-grow-1 ms-3">
                               
                            </div>
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0"></p>
                            </div>
                           
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.3.1/echarts.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    


{{-- <script>
var myChart = echarts.init(document.getElementById('main'));

// Draw the chart
myChart.setOption({
    color: ['#253e5f'],
            tooltip: {
                trigger: 'axis',
                axisPointer: {            
                    type: 'shadow'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [
                {
                    type: 'category',
                    data: ['Janar', 'Shkurt','Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtator', 'Tetor', 'Nentor', 'Dhjetor'],
                    axisTick: {
                        alignWithLabel: true
                    }
                }
            ],
            yAxis: [
                {
                    type: 'value'
                }
            ],
            series: [
                {
                    name: 'Totali i Aplikimeve',
                    type: 'bar',
                    barWidth: '50%',
                    data: [
                        {{count($jan)}},
                        {{count($feb)}}, 
                        {{count($march)}},
                        {{count($apr)}},
                        {{count($may)}},
                        {{count($june)}},
                        {{count($july)}},
                        {{count($aug)}},
                        {{count($sept)}},
                        {{count($oct)}},
                        {{count($nov)}},
                        {{count($dec)}},
                    ]
                }
            ]
});
</script> --}}
    @endpush