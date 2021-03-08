@extends('layouts.home.app')

@section('content')

<section class="content pt-5 pb-lg-5">
    <div class="callout callout-info">
      <h2 class="text-center pb-3">@lang('lang.serviceservice')</h2>
      <div class="text-center">

        <a href="{{ route('reservations.create') }}" class="btn btn-info">
            @lang('lang.add')
        </a>

      </div>


            <h3 class="text-center">@lang('lang.trip')</h3>
        <table class="table table-hover container mt-5">
            <thead> 
            <tr>
                <th>#</th>
                <th>@lang('lang.action')</th>
                <th>@lang('lang.trip')</th>
                <th>@lang('lang.ticketprice')</th>
                <th>@lang('lang.timetrip')</th>
                <th>@lang('lang.company_id')</th>
            </tr>
            </thead>
            
            <tbody>
            @foreach ($planes as $index=>$plane)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <a href="{{ route('reservations.show', $plane->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('lang.add')</a>
                    </td>
                    <td>{{ $plane->trip }}</td>
                    <td>{{ $plane->ticketprice }}</td>
                    <td>{{ $plane->timetrip }}</td>
                    <td>{{ $plane->company->name }}</td>
                </tr>
            @endforeach
            </tbody>

        </table><!-- end of table -->
        


      <!-- /.modal -->
  </section>

@endsection