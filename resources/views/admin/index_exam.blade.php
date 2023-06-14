@extends('admin.template.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ route('create.exam') }}" data-toggle="modal" data-target="#themphong">
                Thêm mới
            </a>
            <!-- Modal -->
            <div class="modal fade" id="themphong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm phòng
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('store.exam')}}" method="post">
                            @csrf

                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Ngày bắt đầu</label>
                                    <input class="form-control" type="datetime-local" name="start">
                                </div>
                                <div class="form-group">
                                    <label>Ngày kết thúc</label>
                                    <input class="form-control" type="datetime-local" name="end">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input class="form-control" type="text" name="password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <table class="table table-light">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên phòng thi</th>
                <th>Ngày giờ bắt đầu</th>
                <th>Ngày giờ kết thúc</th>
                <th>Mật khẩu</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dsphong as $key=>$item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->start}}</td>
                <td>{{$item->end}}</td>
                <td>{{$item->password}}</td>
                <td>
                    <form action="{{route('delete.exam',$item)}}" method="post">
                        @csrf
                        <a href="{{route('resultExam',$item->id)}}" class="btn btn-primary">Xem kết quả</a>
                        <a href="#" class="btn btn-warning" data-toggle="modal"
                            data-target="#phong{{$item->id}}">sửa</a>
                        <button type="submit" class="btn btn-danger">xóa</button>
                    </form>
                </td>
                <!-- Modal -->
                <div class="modal fade" id="phong{{$item->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin phòng {{$item->name}}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('update.exam',$item->id)}}" method="post">
                                @csrf

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input class="form-control" type="text" name="name" value="{{$item->name}}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày bắt đầu</label>
                                        <input class="form-control" type="datetime-local" name="start"
                                            value="{{date('Y-m-d\TH:i:s', strtotime($item->start))  }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày kết thúc</label>
                                        <input class="form-control" type="datetime-local" name="end"
                                            value="{{date('Y-m-d\TH:i:s', strtotime($item->end))}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input class="form-control" type="text" name="password"
                                            value="{{$item->password}}" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
