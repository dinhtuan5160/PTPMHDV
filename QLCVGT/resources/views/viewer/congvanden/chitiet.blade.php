@extends('viewer.layout.index')
@section('title')
    <title>Chi Tiết</title>
@endsection
@section('content')

<body>
  



        <div class="fix-container">
            <div class="col-lg-10 pl-0 float-right">
                <div class="main-body">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="viewer/congvanden/danhsach">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Thông báo</a></li>
                    </ul>
                    <div class="doc-main">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="doc-main_content">
                                    <div class="top-content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="title">
                                                    {{$chitiet->documentary_send->name}}
                                                </div>
                                                <div class="subtitle">
                                                    <span>Người gửi </span>
                                                    <span>{{$chitiet->documentary_send->User->email}}</span>
                                                    <span>lúc </span>
                                                    <span>{{$chitiet->documentary_send->updated_at}}</span>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="document-content">
                                        {{$chitiet->documentary_send->content}}

                                    </div>
                                    <div class="files">
                                        <div class="subheader">
                                            Tài liệu
                                        </div>
                                        <div class="file">
                                            <div class="file-header">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="file-name">
                                                            {{$chitiet->documentary_send->file}}
                                                        </div>
                                                        <div class="file-info">
                                                        {{number_format($chitiet->documentary_send->storage/1048576,2)}}KB
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="file-display">
                                                <object data="file/copy.docx" type="application/docx">
                                                    <iframe src=""></iframe>
                                                </object>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-3">
                                <div class="doc-side">
                                    <div class="box-info">
                                        <div class="form-group">
                                            <label for="">Người gửi</label>
                                            <div class="type">
                                                <span>{{$chitiet->documentary_send->User->name}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Loại văn bản</label>
                                            <div class="type">
                                                <span>{{$chitiet->documentary_send->type_documentary->name}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Thời gian gửi</label>
                                            <div class="type">
                                                <span>{{$chitiet->documentary_send->created_at}} </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-seen">
                                        <div class="title">
                                            <span>{{$chitiet->documentary_send->number_read}}</span>
                                            <span> người đã xem.</span>
                                        </div>
                                        <div class="avatars">
                                            <div class="image">
                                                <img src="pmhdv/images/1.jpg" alt="">
                                            </div>
                                            
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="box-info">
                                        <div class="title">Thông tin thêm</div>
                                        <div class="form-group">
                                            <label for="">Ngày ban hành</label>
                                            <div class="box-more-info">19/9/2019</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Ngày hiệu lực</label>
                                            <div class="box-more-info">19/9/2019</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Ngày hết hạn</label>
                                            <div class="box-more-info">31/9/2020</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
@endsection