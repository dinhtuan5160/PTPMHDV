@extends('viewer.layout.index')
@section('title')
	<title>Danh sách công văn</title>
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
                                    <form action="{{route('get-timcv')}}" method="get">
                                    <input type="text" placeholder="Tìm kiếm" name="timcongvan">
                                    <button type="submit" class="btn btn-info">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="board">
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
                                                [01-2019-00010] </span>
                                            <span class="url text-uppercase">Thông báo thay đổi mức đóng bảo hiểm ý
                                                tế</span>
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
                                                <span class="url">Vân Anh</span> / <span class="url">Ban giám
                                                    đốc</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="status status-1">
                                            Đã ban hành
                                        </div>
                                        <div class="info">
                                            <span>Tgian: </span>
                                            <span>13:35 19/08/2019</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="url">Thông báo</span>
                                        <div class="info">Nội bộ</div>
                                        <div class="info">33 người đã xem</div>
                                    </td>
                                    <td>
                                        <div class="action">
                                            <a href="chitiet.html" class="action-text">Chi tiết</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="seen">
                                    <td>
                                        <div class="icons float-right">
                                            <div class="icon-status">
                                                <div class="square"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="name">
                                            <span class="url group-name text-uppercase" data-url="a">
                                                [01-2019-00010] </span>
                                            <span class="url text-uppercase">Thông báo thay đổi mức đóng bảo hiểm ý
                                                tế</span>
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
                                                <span class="url">Vân Anh</span> / <span class="url">Ban giám
                                                    đốc</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="status status-1">
                                            Đã ban hành
                                        </div>
                                        <div class="info">
                                            <span>Tgian: </span>
                                            <span>13:35 19/08/2019</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="url">Thông báo</span>
                                        <div class="info">Nội bộ</div>
                                        <div class="info">33 người đã xem</div>
                                    </td>
                                    <td>
                                        <div class="action">
                                            <a href="chitiet.html" class="action-text">Chi tiết</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="seen">
                                    <td>
                                        <div class="icons float-right">
                                            <div class="icon-status">
                                                <div class="square"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="name">
                                            <span class="url group-name text-uppercase" data-url="a">
                                                [01-2019-00010] </span>
                                            <span class="url text-uppercase">Thông báo thay đổi mức đóng bảo hiểm ý
                                                tế</span>
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
                                                <span class="url">Vân Anh</span> / <span class="url">Ban giám
                                                    đốc</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="status status-1">
                                            Đã ban hành
                                        </div>
                                        <div class="info">
                                            <span>Tgian: </span>
                                            <span>13:35 19/08/2019</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="url">Thông báo</span>
                                        <div class="info">Nội bộ</div>
                                        <div class="info">33 người đã xem</div>
                                    </td>
                                    <td>
                                        <div class="action">
                                            <a href="chitiet.html" class="action-text">Chi tiết</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="seen">
                                    <td>
                                        <div class="icons float-right">
                                            <div class="icon-status">
                                                <div class="square"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="name">
                                            <span class="url group-name text-uppercase" data-url="a">
                                                [01-2019-00010] </span>
                                            <span class="url text-uppercase">Thông báo thay đổi mức đóng bảo hiểm ý
                                                tế</span>
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
                                                <span class="url">Vân Anh</span> / <span class="url">Ban giám
                                                    đốc</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="status status-1">
                                            Đã ban hành
                                        </div>
                                        <div class="info">
                                            <span>Tgian: </span>
                                            <span>13:35 19/08/2019</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="url">Thông báo</span>
                                        <div class="info">Nội bộ</div>
                                        <div class="info">33 người đã xem</div>
                                    </td>
                                    <td>
                                        <div class="action">
                                            <a href="chitiet.html" class="action-text">Chi tiết</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="seen">
                                    <td>
                                        <div class="icons float-right">
                                            <div class="icon-status">
                                                <div class="square"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="name">
                                            <span class="url group-name text-uppercase" data-url="a">
                                                [01-2019-00010] </span>
                                            <span class="url text-uppercase">Thông báo thay đổi mức đóng bảo hiểm ý
                                                tế</span>
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
                                                <span class="url">Vân Anh</span> / <span class="url">Ban giám
                                                    đốc</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="status status--1">
                                            Không thông qua
                                        </div>
                                        <div class="info">
                                            <span>Tgian: </span>
                                            <span>13:35 19/08/2019</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="url">Thông báo</span>
                                        <div class="info">Nội bộ</div>
                                        <div class="info">33 người đã xem</div>
                                    </td>
                                    <td>
                                        <div class="action">
                                            <a href="chitiet.html" class="action-text">Chi tiết</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                    <div class="news">
                        <div class="row pb-4 pl-3 pr-3">
                            @foreach($congvans as $congvan)
                            <div class="col-lg-4">
                                <div class="news-item">
                                    <div class="news-item--img">
                                        <a href="" class="hvr-grow">
                                            <img class="img-fluid " src="pmhdv/images/thongbao.png" alt="">
                                        </a>
                                    </div>
                                    <div class="news-item-text">
                                        <div class="news-type">
                                            <ul class="pagination">
                                                <li>
                                                    <div class="ban-hanh">Đã ban hành</div>
                                                </li>
                                                <li>
                                                    <div class="ban-hanh loai-congvan">Loại công văn: {{$congvan->type_documentary->name}}</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="news-avatar">
                                            <!-- <figure class="author-figure float-left mb-0 mr-3">
                                                <a href="">
                                                    <img src="pmhdv/images/4.jpg" alt="">
                                                </a>
                                            </figure> -->
                                                <!-- <span class="d-inline-block mt-1">
                                                    <a href="">{{$congvan->User->name}}</a>
                                                </span> -->
                                            <!-- <span> - </span> -->
                                            
                                            <span>Thời gian tạo: {{$congvan->created_at}}</span>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="news-name">
                                            <a href="viewer/congvan/danhsach">
                                                <h4>{{$congvan->name}}</h4>
                                            </a>
                                        </div>
                                        <div class="news-info">
                                            <p>
                                            <span class="macv"> Tên file : {{$congvan->file}}
                                            </p>
                                            <p>Dung lượng
                                                <span class="macv"> {{number_format($congvan->storage/1048576,2)}}KB </span>
                                            </p>
                                            <p>Loại công văn:
                                                <span class="pdf">
                                                    <?php
                                                    $arr = explode(".",$congvan->file);
                                                    ?>
                                                    @if(strcmp(trim($arr[1]),'doc') == 0 || strcmp(trim($arr[1]),'docx') == 0)                                                  
                                                    <i class="fas fa-file-word"></i>
                                                    @else
                                                        @if(strcmp(trim($arr[1]),'xslt') == 0)
                                                        <i class="fas fa-file-excel"></i>
                                                        @else
                                                            @if(strcmp(trim($arr[1]),'pdf') == 0)
                                                            <i class="fas fa-file-pdf"></i>
                                                            @endif
                                                        @endif
                                                    @endif
                                                    
                                                </span>
                                            </p>
                                        </div>
                                        <div class="text-center mt-4">
                                            <a href="download/{{$congvan->file}}" download="{{$congvan->file}}">
                                            <button type="button" class="btn btn-primary">Dowdload</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
