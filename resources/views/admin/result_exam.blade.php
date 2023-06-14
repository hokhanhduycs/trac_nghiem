@extends('admin.template.layout')

@section('content')
<div class="container-fluid">
    <br>
    <table class="table table-light">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên thí sinh</th>
                <th>Ngày sinh</th>
                <th>Đơn vị</th>
                <th>Thời gian làm bài(phút)</th>
                <th>Điểm</th>
                <th>Xếp loại</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dsketqua as $key=>$item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->name}}</td>
                <td>{{date('d-m-Y', strtotime($item->birth))}}</td>
                <td>{{$item->unit}}</td>
                <td>
                    @if ($item->end)
                    {{
                        
                        round(abs(strtotime($item->end) - strtotime($item->start)) / 60,0)}} phút {{round(abs(strtotime($item->end) - strtotime($item->start)) % 60,0)}} giây
                    @else
                    Đang làm bài
                    @endif
                </td>
                <td>{{$item->mark}}</td>
                <td>{{$item->classification}}</td>
                <td>
                        <a href="{{route('detailExam',$item->de_id)}}"  target="_blank">Xem chi tiết</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
