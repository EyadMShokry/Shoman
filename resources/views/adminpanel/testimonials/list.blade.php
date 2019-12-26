@extends('layouts.admin-master')
@section('title', @trans('adminpanel/dashboard.testimonials.title'))
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('en/admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">@lang('adminpanel/dashboard.testimonials.title')</li>
                            <li class="breadcrumb-item active">@lang('adminpanel/dashboard.testimonials.list')</li>
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
                            <h3 class="card-title">@lang('adminpanel/dashboard.testimonials.title')</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover datatable">
                                <thead>
                                <tr>
                                    <th>@lang('adminpanel/dashboard.testimonials.name')</th>
                                    <th>@lang('adminpanel/dashboard.testimonials.position')</th>
                                    <th>@lang('adminpanel/dashboard.testimonials.quote')</th>
                                    <th>@lang('adminpanel/dashboard.testimonials.image')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($testimonials as $testimonial)
                                <tr>
                                    <td>{{$testimonial->name}}</td>
                                    <td>{{$testimonial->position}}</td>
                                    <td>{{$testimonial->quote}}</td>
                                    <td><img width="100px" class="img-fluid rounded-circle" alt="{{$testimonial->name}}" src="{{asset('images/' . $testimonial->image)}}" /></td>
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
