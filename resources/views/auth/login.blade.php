@extends('layouts.app')

@section('content')

<section id="login">

    <div class="bg__login"
         style="background: linear-gradient(rgba(0,0,0, 0.6), rgba(0,0,0, 0.7)), url('./dist/images/mind.jpg') center/cover no-repeat;"></div>

    <div class="container">

        <div class="row">

            <div class="col-10 mx-auto col-md-8 bg-white mx-auto pt-4">
                <h2 class="fw-300 text-center"><span class="text-info">@lang('lang.tbasheer')</span></h2>
                <hr>

                <form action="{{ route('login') }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('post') }}
                    <!--Email -->
                    <div class="form-group">
                        <label for="email">@lang('lang.email')</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!--password -->
                    <div class="form-group">
                        <label for="pwd">@lang('lang.password')</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                       @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!--                    Login by Remember Me-->

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label for="customCheck1" class="custom-control-label">@lang('lang.RememberMe')</label>
                        </div>
                    </div>
                    <!--                    Login form-->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">@lang('lang.login')</button>
                    </div>
                    <p class="text-center">@lang('lang.CreateNewAccount') <a href="register">@lang('lang.register')</a></p>
                    <p class="text-center">@lang('lang.RedirectHomePages') <a href="/">@lang('lang.home')</a></p>

                </form><!--end fo form-->

            </div><!--end of col-auto-->

        </div><!--end of row-->

    </div><!--end of container-->

</section> <!--end of banner section-->


@endsection
