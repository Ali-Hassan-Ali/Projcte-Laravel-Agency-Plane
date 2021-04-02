@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('lang.companys')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('lang.dashboard')</a></li>
                <li><a href="{{ route('dashboard.companys.index') }}"> @lang('lang.companys')</a></li>
                <li class="active">@lang('lang.edit')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('lang.edit')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.companys.update', $company->id) }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                        <label>@lang('lang.name')</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('lang.phone')</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('lang.guarded')</label>
                        <input type="text" name="guarded" class="form-control" value="{{ old('guarded') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('lang.count')</label>
                        <input type="number" name="count" class="form-control" value="{{ old('count') }}">
                    </div>


                    <div class="form-group">
                        <label>@lang('lang.trip')</label>
                        <select name="plane_id" class="form-control">
                            <option value=""></option>
                            @foreach ($planes as $plane)
                                <option value="{{ $plane->id }}" {{ old('plane_id') == $plane->id ? 'selected' : '' }}>{{ $plane->trip }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>@lang('lang.documents')</label>
                        <input type="file" id="file-1" name="Files[]" class="file" multiple class="file"
                        data-overwrite-initial="false" >
                    </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('lang.edit')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
