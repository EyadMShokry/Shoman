@extends('layouts.admin-master')
@section('title', @trans_choice('adminpanel/dashboard.cases.title', 2))
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                @include('flash::message')
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a
                                        href="{{url('en/admin')}}">{{trans('adminpanel/general.home')}}</a></li>
                            <li class="breadcrumb-item active">{{trans_choice('adminpanel/dashboard.cases.title', 2)}}</li>
                            <li class="breadcrumb-item active">{{trans('adminpanel/dashboard.cases.list')}}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{trans_choice('adminpanel/dashboard.cases.title', 2)}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="testimonials" class="table table-bordered table-hover datatable">
                                <thead>
                                <tr>
                                    <th>@lang('adminpanel/dashboard.cases.name')</th>
                                    <th>@lang('adminpanel/dashboard.cases.date')</th>
                                    <th>@lang('adminpanel/dashboard.cases.description')</th>
                                    <th>@lang('adminpanel/dashboard.cases.image')</th>
                                    <th>@lang('adminpanel/general.actions')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cases as $case)
                                    @if ($case->active)
                                        @php
                                            $toggle_status = 0;
                                            $src_icon = asset('icons/action_active.gif');
                                        @endphp
                                    @else
                                        @php
                                            $toggle_status = 1;
                                            $src_icon = asset('icons/action_inactive.gif');
                                        @endphp
                                    @endif
                                    <tr id="item-{{$case->id}}">
                                        <td>{{$case->name}}</td>
                                        <td>{{$case->date}}</td>
                                        <td>{{$case->description}}</td>
                                        <td><img width="100px" class="img-fluid rounded-circle"
                                                 alt="{{$case->name}}"
                                                 src="{{asset('images/adminpanel/cases/' . $case->image)}}"/>
                                        </td>
                                        <td style="text-align:center">
                                            <a href="{{ url(session('locale') . '/' . 'admin/cases/' . $case->id . '/edit')}}"
                                               title="{{trans('adminpanel/general.form_action.edit')}}"><img
                                                        src="{{asset('icons/action_edit.gif')}}"
                                                        alt="{{trans('adminpanel/general.form_action.edit')}}"></a>
                                            <a id="status-{{$case->id}}"
                                               href="javascript:ToggleActive('{{$toggle_status}}', '{{$case->id}}', 'cases')"
                                               title="{{trans('adminpanel/general.table_action.toggle')}}"><img
                                                        src="{{$src_icon}}"
                                                        alt="{{trans('adminpanel/general.table_action.toggle')}}"></a>
                                            <a href="javascript:DeleteItem('{{$case->id}}', 'cases', 'images/adminpanel/cases/{{$case->image}}')"
                                               title="{{trans('adminpanel/general.form_action.delete')}}"><img
                                                        src="{{asset('icons/action_delete.gif')}}"
                                                        alt="{{trans('adminpanel/general.form_action.delete')}}"></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection