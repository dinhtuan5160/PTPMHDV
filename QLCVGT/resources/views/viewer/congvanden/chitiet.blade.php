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
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Thông báo</a></li>
                        <li class="breadcrumb-item"><a href="#">SALE-MKT-2019-00002</a></li>
                    </ul>
                    <div class="doc-main">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="doc-main_content">
                                    <div class="top-content">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="title">
                                                    {{$chitiet->documentary_send->name}}
                                                </div>
                                                <div class="subtitle">
                                                    <span>Người gửi </span>
                                                    <span>{{$chitiet->documentary_send->User->email}}</span>
                                                    <span>lúc </span>
                                                    <span>{{$chitiet->documentary_send->updated_at}}</span>
                                                </div>
                                                <div class="subtitle">
                                                    <span class="tag tag-alt7-more">SALE-MKT-2019-00002</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="seal">
                                                    <img src="images/effective.png" alt="" class="float-left">
                                                    <div class="text">
                                                        <p class="mb-0">Đã ban hành</p>
                                                        <p class="range">30/9/2019</p>
                                                    </div>
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
                                                            6.00 MB · {{$chitiet->documentary_send->User->email}}
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
                                <div class="comment">
                                    <div class="box-post">
                                        <div class="user">
                                            <div class="avatar float-left">
                                                <img src="images/4.jpg" alt="" class="img-circle" width="50">
                                            </div>
                                            <div class="name float-left ml-3">
                                                <em>Nguyễn Quỳnh</em>
                                                <div class="info">
                                                    <span>BC</span>
                                                    <span>@quynhnt</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="form-post mt-4">
                                            <form action="">
                                                <textarea name="" id="" placeholder="Viết bình luận của bạn"></textarea>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="box-comment">
                                        <div class="box-cmt_header">
                                            <span>4</span> Thảo luận
                                        </div>
                                        <div class="list-cmt mt-4">
                                            <div class="post">
                                                <div class="user">
                                                    <div class="avatar float-left">
                                                        <img src="images/4.jpg" alt="" class="img-circle" width="50">
                                                    </div>
                                                    <div class="name float-left ml-3">
                                                        <em>Nguyễn Quỳnh</em>
                                                        <div class="info">
                                                            <span>10:26</span>
                                                            <span>21/6/2019</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="cmt-text mt-4">
                                                    <em>Đọc quyết định mới nhé</em>
                                                </div>
                                                <div class="reply mt-4">
                                                    <span class="tra-loi" id="tra-loi1">Trả lời</span>
                                                    <div class="hidden reply-input" id="rep1">
                                                        <input type="text" placeholder="Comment và nhấn Enter để gửi">
                                                    </div>
                                                </div>
                                                <div class="box-reply">
                                                    <div class="user">
                                                        <div class="avatar float-left">
                                                            <img src="images/4.jpg" alt="" class="img-circle"
                                                                width="50">
                                                        </div>
                                                        <div class="name float-left ml-3">
                                                            <em>Nguyễn Quỳnh</em>
                                                            <div class="info">
                                                                <span>10:26</span>
                                                                <span>21/6/2019</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="cmt-text mt-4">
                                                        <em>Đọc quyết định mới nhé</em>
                                                    </div>
                                                    <div class="reply mt-4">
                                                        <span class="tra-loi" id="tra-loi2">Trả lời</span>
                                                        <div class="hidden reply-input" id="rep2">
                                                            <input type="text"
                                                                placeholder="Comment và nhấn Enter để gửi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="doc-side">
                                    <div class="box-info">
                                        <div class="form-group">
                                            <label for="">Nhóm công văn</label>
                                            <div class="type">
                                                <span>Sale & MKT</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Ban hành bởi</label>
                                            <div class="type">
                                                <span>Đại học công nghiệp Hà Nội</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Loại công văn</label>
                                            <div class="type">
                                                <span>{{$chitiet->documentary_send->type_documentary->name}} {{$chitiet->documentary_send->category->name}}</span>
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
                                        <div class="form-group">
                                            <label for="">Khẩn cấp</label>
                                            <div class="box-more-info">Không</div>
                                        </div>
                                    </div>
                                    <div class="box-info">
                                        <div class="title">Chữ ký</div>
                                        <div class="form-group">
                                            <div class="sig-name">Nguyễn Thu Thảo</div>
                                            <div class="sig-work">CEO</div>
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