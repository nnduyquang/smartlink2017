@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tintucs.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'tintucs.store','method'=>'POST','files'=>true)) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tiêu Đề:</strong>
                {!! Form::text('tieude', null, array('placeholder' => 'Nội dung','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô Tả Ngắn:</strong>
                {!! Form::text('motangan', null, array('placeholder' => 'Mô Tả Ngắn','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nội Dung:</strong>
                {!! Form::textarea('noidung',null, array('placeholder' => 'Nội Dung','id'=>'summernote','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hình Chủ Đề</strong>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        {{ Html::image('','',array('id'=>'showHinhChuDe'))}}
                    </div>
                </div>
                {!! Form::file('hinhchude',array('id'=>'chooseHinhChuDe','accept'=>'image/jpeg,image/jpg,image/png')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnDangTin" type="submit" class="btn btn-primary">Đăng Tin</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
