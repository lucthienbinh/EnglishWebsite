@extends('admin.layout.index')
 
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loai tin
                    <small>{{$loaitin->Ten}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
                @endif

                @if(session('thongbao'))
                    <div class = "alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                
                <form action="admin/loaitin/sua/{{$loaitin->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>The loai</label>
                        <select class="form-control" name="TheLoai">
                            @foreach($theloai as $tl)
                            <option
                            @if($loaitin->idTheLoai == $tl->id)
                                {{"selected"}}
                            @endif
                             value="{{$tl->id}}">{{$tl->Ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ten loai tin</label>
                        <input class="form-control" name="Ten" placeholder="Nhap ten loai tin" 
                        value="{{$loaitin->Ten}}"/>
                    </div>
                   
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection