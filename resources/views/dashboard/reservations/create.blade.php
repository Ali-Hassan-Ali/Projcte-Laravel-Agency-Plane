@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('lang.reservations')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('lang.dashboard')</a></li>
                <li><a href="{{ route('dashboard.reservations.index') }}"> @lang('lang.reservations')</a></li>
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

                <form action="{{ route('dashboard.reservations.store') }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('post') }}

                    <div class="form-group">
                        <label>@lang('lang.name')</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('lang.phone')</label>
                        <input type="number" name="phone" class="form-control" value="{{ old('phone') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('lang.count')</label>
                        <input type="number" name="count" class="form-control" value="{{ old('count') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('lang.trip')</label>
                        <select name="plane_id" class="form-control">
                            @foreach ($planes as $plane)
                                <option value="{{ $plane->id }}" {{ old('plane_id') == $plane->id ? 'selected' : '' }}>{{ $plane->trip }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>@lang('lang.documents')</label>
                        <input type="file" id="file-1" name="documents[]" class="file" multiple class="file"
                        data-overwrite-initial="false" >
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('lang.add')</button>
                    </div>


                </form>

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
