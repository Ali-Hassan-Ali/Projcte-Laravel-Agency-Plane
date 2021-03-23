@extends('layouts.home.app')

@section('content')

<section class="content pt-5 pb-lg-5">
    <div class="callout callout-info">
      <h2 class="text-center pb-3">@lang('lang.service')</h2>
      <div class="text-center">

        <a href="{{ route('reservations.index') }}" class="btn btn-info">
            @lang('lang.reservations')
        </a>

      </div>

      <div class="container">
          
      <form action="{{ route('reservations.store') }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('post') }}

            <div class="form-group">
                <label>@lang('lang.name')</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label>@lang('lang.phone')</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
            </div>

            <div class="form-group">
                <label>@lang('lang.count')</label>
                <input type="number" name="count" class="form-control" value="{{ old('count') }}">
            </div>

            <div class="form-group">
                <label>@lang('lang.plane_id')</label>
                <select name="plane_id" class="form-control" readonly checked>
                    <option value="{{ $planes->id }}" readonly checked>{{ $planes->trip }}</option>
                </select>
            </div>

            <div class="form-group">
                <label>@lang('lang.documents')</label>
                <input type="file" id="file-1" name="Files[]" class="file" multiple class="file"
                data-overwrite-initial="false" >
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('lang.add')</button>
            </div>

        </form><!-- end of form -->

        </div>

      <!-- /.modal -->
  </section>

@endsection