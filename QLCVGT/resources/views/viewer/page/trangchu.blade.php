@extends('viewer.layout.index')
@section('title')
	<title>Trang chủ</title>
@endsection
@section('content')
	<div class="fix-container">
            <div class="col-lg-10 pl-0 float-right">
                <div class="main-body">
                    <div class="sub-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="title">Trường đại học công nghiệp Hà Nội</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="search text-right">
                                    <input type="text" placeholder="Tìm kiếm">
                                    <button type="submit" class="btn btn-info">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="board">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 66px"></th>
                                    <th>Công văn</th>
                                    <th style="width: 155px;">Trạng thái</th>
                                    <th style="width: 200px;">Loại công văn</th>
                                    <th style="width: 135px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($congvandens as $congvanden)
                                <tr class="notseen">
                                    <td>
                                        <div class="icons float-right">
                                            <div class="icon-status">
                                                <div class="square"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="name">
                                            <span class="url group-name text-alt text-uppercase" data-url="a">
                                                [{{$congvanden->documentary_send->updated_at}}] </span>
                                            <span class="url text-uppercase">{{$congvanden->documentary_send->name}}</span>
                                        </div>
                                        <div class="info">
                                            <span style="margin-right: 10px;">
                                                <i class="ti-folder"></i>
                                                <span>Nhóm công văn: </span>
                                                <span>Không xác định</span>
                                            </span>
                                            <span>
                                                <i class="ti-user"></i>
                                                <span>Ban hành bởi: </span>
                                                <span class="url">{{$congvanden->documentary_send->User->name}}</span> /  
                                                @if($congvanden->documentary_send->User->major->id == 9)
                                                    <span class="url"> 
                                                       Trường : {{$congvanden->documentary_send->User->major->name}}</span>
                                                    </span>
                                                @else 
                                                    <span class="url"> 
                                                       Khoa : {{$congvanden->documentary_send->User->major->name}}</span>
                                                    </span>
                                                    @endif 

                                        </div>
                                    </td>
                                    <td>
                                        <div class="status status-1">
                                            Đã ban hành
                                        </div>
                                        <div class="info">
                                            <span>Tgian: </span>
                                            <span>{{$congvanden->documentary_send->updated_at}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="url">{{$congvanden->documentary_send->type_documentary->name}}</span>
                                        <div class="info">{{$congvanden->documentary_send->category->name}}</div>
                                        <div class="info">
                                            Số người xem: {{$congvanden->documentary_send->number_read}}</div>
                                    </td>
                                    <td>
                                        <div class="action">
                                            <a href="viewer/congvanden/chitiet/{{$congvanden->id}}" class="action-text">Chi tiết</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection