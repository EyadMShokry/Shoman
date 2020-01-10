@extends('layouts.admin-master')
@section('title', @trans_choice('adminpanel/dashboard.testimonials.title', 2))
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
                            <li class="breadcrumb-item"><a
                                        href="{{url('en/admin')}}">{{trans('adminpanel/general.home')}}</a></li>
                            <li class="breadcrumb-item active">{{trans_choice('adminpanel/dashboard.testimonials.title', 2)}}</li>
                            <li class="breadcrumb-item active">{{trans('adminpanel/dashboard.testimonials.add')}}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">@lang('adminpanel/dashboard.testimonials.add')</h3>
                            </div>
                            <!-- /.card-header -->
                            {{ Form::open(['url' => url(session('locale') . '/admin/testimonials'), 'role' => 'form', 'method' => 'post', 'files' => true]) }}
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {{ Form::label('name', trans('adminpanel/testemonials.label_name'), ['class' => 'control-label']) }}
                                        <label style="color:#F00;font-weight:bold">&nbsp*</label>
                                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('adminpanel/testemonials.placeholder_name')]) }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{ Form::label('position', trans('adminpanel/testemonials.label_position'), ['class' => 'control-label']) }}
                                        <label style="color:#F00;font-weight:bold">&nbsp*</label>
                                        {{ Form::text('position', null, ['class' => 'form-control', 'placeholder' => trans('adminpanel/testemonials.placeholder_position')]) }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {{ Form::label('quote', trans('adminpanel/testemonials.label_quote'), ['class' => 'control-label']) }}
                                        <label style="color:#F00;font-weight:bold">&nbsp*</label>
                                        {{ Form::textarea('quote', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{ Form::label('image', trans('adminpanel/general.form_labels.image'), ['class' => 'control-label']) }}
                                        <label style="color:#F00;font-weight:bold">&nbsp*</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                {{ Form::file('image', ['class' => 'custom-file-input']) }}
                                                <label class="custom-file-label"
                                                       for="image">{{trans('adminpanel/general.form_labels.choose_image')}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                {{ Form::submit(trans('adminpanel/general.form_action.submit'), ['class' => 'btn btn-primary']) }}
                            </div>
                            <!-- /.card-footer -->
                            {{ Form::close() }}
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection