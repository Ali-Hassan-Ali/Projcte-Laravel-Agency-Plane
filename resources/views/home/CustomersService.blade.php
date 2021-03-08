@extends('layouts.home.app')

@section('content')

<div class="container bg-grey mt-5 mb-5">
    <div class="row">
      <div class="col-sm-4">
        <h1 class="mt-5 ml-5 aa"><i class="fa fa-users  fa-2x"></i></h1>
      </div>
      <div class="col-sm-8">
        <h2>@lang('lang.service')</h2><br>
        <h4><strong>@lang('lang.me'):</strong> @lang('lang.ser').</h4><br>
        <sth3rong><i class="fa fa-phone mr-2"></i> @lang('lang.Phone'):</strong> +249 0912905226 - +249123853358<br>
        <strong><i class="fa fa-envelope mr-2"></i> @lang('lang.Email'):</strong> strategic2020@gmail.com<br>
        <strong><i class="fa fa-whatsapp mr-2"></i> @lang('lang.Whatsapp'):</strong> +249 123853358<br><br>
      </div>
    </div>
</div>


@endsection