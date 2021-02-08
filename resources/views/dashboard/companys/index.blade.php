@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('lang.companys')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('lang.dashboard')</a></li>
                <li class="active">@lang('lang.companys')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">@lang('lang.companys') <small>{{ $companys->count() }}</small></h3>

                    <form action="{{ route('dashboard.companys.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('lang.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('lang.search')</button>
                                @if (auth()->user()->hasPermission('companys_create'))
                                    <a href="{{ route('dashboard.companys.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('lang.add')</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i> @lang('lang.add')</a>
                                @endif
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($companys->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('lang.name')</th>
                                <th>@lang('lang.text')</th>
                                <th>@lang('lang.action')</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($companys as $index=>$company)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->text }}</td>
                                    <td>
                                        @if (auth()->user()->hasPermission('companys_update'))
                                            <a href="{{ route('dashboard.companys.edit', $company->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('lang.edit')</a>
                                        @else
                                            <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> @lang('lang.edit')</a>
                                        @endif
                                        @if (auth()->user()->hasPermission('companys_delete'))
                                            <form action="{{ route('dashboard.companys.destroy', $company->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('lang.delete')</button>
                                            </form><!-- end of form -->
                                        @else
                                            <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('lang.delete')</button>
                                        @endif
                                    </td>
                                </tr>
                            
                            @endforeach
                            </tbody>

                        </table><!-- end of table -->
                        
                        
                    @else
                        
                        <h2>@lang('lang.no_data_found')</h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
