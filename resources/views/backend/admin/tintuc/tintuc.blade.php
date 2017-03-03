@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Tin Tức</h2>
            </div>
            <div class="pull-right">
                @permission(('tintuc-create'))
                <a class="btn btn-success" href="{{ route('tintucs.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>
                    Tạo Mới Tin Tức</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>STT</th>
            <th>Tiêu Đề</th>
            <th>Tác Giả</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tintucs as $key => $tintuc)
            @if(Auth::user()->hasRole('admin'))
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $tintuc->tieude }}</td>
                    <td>{{ $tintuc->users->name }}</td>
                    <td>
                        @permission(('tintuc-edit'))
                        <a class="btn btn-primary" href="{{ route('tintucs.edit',$tintuc->id) }}">Edit</a>
                        @endpermission
                        @permission(('tintuc-delete'))
                        {!! Form::open(['method' => 'DELETE','route' => ['tintucs.destroy', $tintuc->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Xóa Bài Viết', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        @endpermission
                    </td>
                </tr>
            @elseif(!($tintuc->name=='admin'))
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $tintuc->tieude }}</td>
                    <td>{{ $tintuc->mota }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('tintucs.show',$tintuc->id) }}">Show</a>
                        @permission(('role-edit'))
                        <a class="btn btn-primary" href="{{ route('tintucs.edit',$tintuc->id) }}">Edit</a>
                        @endpermission
                        @permission(('role-delete'))
                        {!! Form::open(['method' => 'DELETE','route' => ['tintucs.destroy', $tintuc->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Xóa Bài Viết', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        @endpermission
                    </td>
                </tr>
            @endif
        @endforeach
    </table>
    {!! $tintucs->render() !!}

@stop