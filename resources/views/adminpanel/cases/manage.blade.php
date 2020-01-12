@extends('layouts.admin-master')
@section('title', @trans_choice('adminpanel/dashboard.cases.title', 2))
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
                            <li class="breadcrumb-item active">{{trans_choice('adminpanel/dashboard.cases.title', 2)}}</li>
                            @if($case['id'])
                                <li class="breadcrumb-item active">{{trans('adminpanel/dashboard.cases.edit')}}</li>
                            @else
                                <li class="breadcrumb-item active">{{trans('adminpanel/dashboard.cases.add')}}</li>
                            @endif
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
                                @if($case['id'])
                                    <h3 class="card-title">@lang('adminpanel/dashboard.cases.edit')</h3>
                                @else
                                    <h3 class="card-title">@lang('adminpanel/dashboard.cases.add')</h3>
                                @endif
                            </div>
                            <!-- /.card-header -->
                            {{ Form::open(['url' => $formAction, 'role' => 'form', 'files' => true]) }}
                            @if($case['id'])
                                @method('PUT')
                            @endif
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
                                        {{ Form::label('name', trans('adminpanel/cases.label_name'), ['class' => 'control-label']) }}
                                        <label style="color:#F00;font-weight:bold">&nbsp*</label>
                                        {{ Form::text('name', $case['name'], ['class' => 'form-control', 'placeholder' => trans('adminpanel/cases.placeholder_name')]) }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{ Form::label('date', trans('adminpanel/cases.label_date'), ['class' => 'control-label']) }}
                                        <label style="color:#F00;font-weight:bold">&nbsp*</label>
                                        {{ Form::date('date', $case['date'], ['class' => 'form-control', 'placeholder' => trans('adminpanel/cases.placeholder_date')]) }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {{ Form::label('description', trans('adminpanel/cases.label_description'), ['class' => 'control-label']) }}
                                        <label style="color:#F00;font-weight:bold">&nbsp*</label>
                                        {{ Form::textarea('description', $case['description'], ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{ Form::label('image', trans('adminpanel/general.form_labels.image'), ['class' => 'control-label']) }}
                                        <label style="color:#F00;font-weight:bold">&nbsp*</label>
                                        @if($case['image'])
                                            <img id="image-preview" class="img-fluid img-circle row" width="100px"
                                                 alt="{{$case['name']}}"
                                                 src="{{asset('images/adminpanel/cases/' . $case['image'])}}"/>
                                        @else
                                            <img id="image-preview" class="img-fluid img-circle row" width="100px"
                                                 alt="{{$case['name']}}"
                                                 src="{{asset('images/user.png')}}"/>
                                        @endif
                                        <br/>
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
                                @if($case['id'])
                                    {{ Form::submit(trans('adminpanel/general.form_action.update'), ['class' => 'btn btn-primary']) }}
                                @else
                                    {{ Form::submit(trans('adminpanel/general.form_action.submit'), ['class' => 'btn btn-primary']) }}
                                @endif
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