@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('lang.dashboard')</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> @lang('lang.dashboard')</li>
            </ol>
        </section>

        <section class="content">

            <div class="row">

                {{-- planes--}}
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{ $planes_count }}</h3>

                            <p>@lang('lang.planes')</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-plane"></i>
                        </div>
                        <a href="{{ route('dashboard.planes.index') }}" class="small-box-footer">@lang('lang.read') <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{--companys--}}
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ $Companys_count }}</h3>

                            <p>@lang('lang.companys')</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-building"></i>
                        </div>
                        <a href="{{ route('dashboard.companys.index') }}" class="small-box-footer">@lang('lang.read') <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{--reservations--}}
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ $Reservations_count }}</h3>

                            <p>@lang('lang.reservations')</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-ticket"></i>
                        </div>
                        <a href="{{ route('dashboard.reservations.index') }}" class="small-box-footer">@lang('lang.read') <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{--users--}}
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ $users_count }}</h3>

                            <p>@lang('lang.users')</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="{{ route('dashboard.users.index') }}" class="small-box-footer">@lang('lang.read') <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div><!-- end of row -->

            <div class="box box-solid">

                <div class="box-header">
                    <h3 class="box-title">Sales Graph</h3>
                </div>
                <div class="box-body border-radius-none">
                    <div class="chart" id="line-chart" style="height: 250px;"></div>
                </div>
                <!-- /.box-body -->
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

@push('scripts')

    <script>
        
    </script>

@endpush