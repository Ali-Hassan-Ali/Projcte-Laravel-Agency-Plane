<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ auth()->user()->image_path }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i><span>@lang('lang.dashboard')</span></a></li>

            @if (auth()->user()->hasPermission('users_read'))
                <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-users"></i><span>@lang('lang.users')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('companys_read'))
                <li><a href="{{ route('dashboard.companys.index') }}"><i class="fa fa-building"></i><span>@lang('lang.companys')</span></a></li>
            @endif
            
            @if (auth()->user()->hasPermission('planes_read'))
                <li><a href="{{ route('dashboard.planes.index') }}"><i class="fa fa-plane"></i><span>@lang('lang.planes')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('reservations_read'))
                <li><a href="{{ route('dashboard.reservations.index') }}"><i class="fa fa-ticket"></i><span>@lang('lang.reservations')</span></a></li>
            @endif


        </ul>

    </section>

</aside>

