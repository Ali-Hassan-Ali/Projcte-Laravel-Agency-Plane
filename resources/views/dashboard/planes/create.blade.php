@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('lang.planes')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('lang.dashboard')</a></li>
                <li><a href="{{ route('dashboard.planes.index') }}"> @lang('lang.planes')</a></li>
                <li class="active">@lang('lang.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('lang.add')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.planes.store') }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('post') }}


                        <div class="form-group">
                            <label>@lang('lang.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('lang.trip')</label>
                            <input type="text" name="trip" class="form-control" value="{{ old('trip') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('lang.Seats')</label>
                            <input type="number" name="Seats" class="form-control" value="{{ old('Seats') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('lang.ticketprice')</label>
                            <input type="text" name="ticketprice" class="form-control" value="{{ old('ticketprice') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('lang.timetrip')</label>
                            <input type="datetime-local" name="timetrip" class="form-control" value="{{ old('timetrip') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('lang.company_id')</label>
                            <select name="company_id" class="form-control">
                                @foreach ($companys as $company)
                                    <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('lang.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
