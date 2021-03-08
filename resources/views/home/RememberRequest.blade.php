@extends('layouts.home.app')

@section('content')

<section>
    <h2 class="text-center pt-5 pb-5 fw-bold">@lang('lang.RememberRequest')</h2>
</section>

<section id="footer-newsletter" class="text-white pt-5 pb-5" style="background: #096898">
    <div class="container wow bounceIn" data-wow-duration="3s">
        <h2 class="text-center">@lang('lang.helpmessges')</h2>
        <form action="" method="post">
            <div class="form-group">
                <label>@lang('lang.Description')</label>
                <textarea name="" rows="4" type="text" class="form-control"
                          placeholder="@lang('lang.Enter description')"></textarea>
                <button type="submit" class="btn btn-outline-light col-md-12" style="margin-top: 15px">@lang('lang.add')
                </button>
            </div>
        </form>
    </div><!--end of container-->
</section><!--end of section -->


@endsection