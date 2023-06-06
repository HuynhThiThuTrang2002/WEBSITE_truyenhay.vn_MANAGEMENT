<?php require_once './mvc/core/libs.php'; require_once './mvc/core/route.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title'] ?></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php public_patch('img/trang.jpg') ?>">
    <link rel="stylesheet" type="text/css" href="<?php public_patch('home/css/trang0102.css') ?>">
</head>
<body id="body_home" style="background: top center repeat-x #F4F4F4">
    <div id="ads-install-app"></div>
    <div id="wrap">
        <div class="navbar navbar-default navbar-static-top" role="navigation" id="nav">
            <!--
            <script type="text/javascript">function getCookie(d){d+="=";for(var b=decodeURIComponent(document.cookie).split(";"),c=[],a=0;a<b.length;a++)0==b[a].trim().indexOf(d)&&(c=b[a].trim().split("="));return 0<c.length?c[1]:""}var js_bgcolor=getCookie("bgcolor-cookie");"#232323"==js_bgcolor&&(document.getElementsByTagName("body")[0].className+=" dark-theme");</script>-->
            <div class="container">
                <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Hiện menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <h1>
                    <a class="header-logo" href="<?php echo APP_URL ?>" title="Tủ sách healthy"><img src="<?php public_patch('img/trang.jpg') ?>" width="45">TỦ SÁCH HEALTHY</a>
                </h1>
            </div>
            <div class="navbar-collapse collapse" itemscope>
                <ul class="control nav navbar-nav ">
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-list"></span> Danh sách 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" title="Truyện mới cập nhật">Sách mới cập nhật</a></li>
                            <li><a href="#" title="Truyện Hot">Sách Hot</a></li>
                            <li><a href="#" title="Truyện Full">Sách Full</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-list"></span> Thể loại 
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu multi-column">
                            <div class="row">
                                <!-- start loop -->
                                <?php foreach(getTheLoai_Header() as $val) { ?>
                                <div class="col-md-4">
                                    <ul class="dropdown-menu">
                                        <li><a href="#" title="<?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></a></li>
                                    </ul>
                                </div>
                                <?php } ?>
                                <!-- end loop-->
                            </div>
                        </div>
                    </li> 
                    <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> Phân loại theo Chương <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" title="Dưới 100 chương">Dưới 10 chương</a></li>
                            <li><a href="#" title="100 - 500 chương">10 - 20 chương</a></li>
                            <li><a href="#" title="500 - 1000 chương">20 - 30 chương</a></li>
                            <li><a href="#" title="Trên 1000 chương">Trên 30 chương</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                            <a href="<?php echo dangnhap ?>" title="Admin"><span class="glyphicon glyphicon-user"></span> Admin</a>
                    </li>
                    <!--
                    <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> Tùy chỉnh <span class="caret"></span></a>
                        <div class="dropdown-menu dropdown-menu-right settings">
                            <form class="form-horizontal">
                                <div class="form-group form-group-sm">
                                    <label class="col-sm-2 col-md-5 control-label" for="truyen-background">Màu nền</label>
                                    <div class="col-sm-5 col-md-7">
                                        <select class="form-control" id="truyen-background">
                                            <option value="#F4F4F4" selected>Xám nhạt</option>
                                            <option value="#232323">Màu tối</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    -->
                </ul>
                <form class="navbar-form navbar-right" action="#" role="search" itemprop="potentialAction" itemscope>
                    <div class="input-group search-holder">
                        <meta itemprop="target" content="#" />
                        <input aria-label="Từ khóa tìm kiếm" role="search key" class="form-control" id="search-input" type="search" name="tukhoa" placeholder="Tìm kiếm..." value="" itemprop="query-input" required>
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" aria-label="Tìm kiếm" role="search"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>
                    <div class="list-group list-search-res hide"></div>
                </form>
            </div>
        </div>
        <div class="navbar-breadcrumb">
            <div class="container breadcrumb-container"> Đọc sách online, cứu rỗi linh hồn. Tổng hợp đầy đủ và cập nhật liên tục. </div>
        </div>
    </div>
    <?php require_once './mvc/views/home/'.$data['page'].'.php' ?>
    </div>
    <div id="footer" class="footer">
        <div class="container">
            <div class="hidden-xs col-sm-5">
                <strong>Tủ sách healthy</strong> - <a title="Đọc sách online" href="http://localhost/truyenhay.vn/">Đọc sách</a> online, 
                <a title="Đọc truyện chữ" href="#">đọc sách</a> chữ, 
                <a title="Sách hay" href="#">sách hay</a>. Website luôn cập nhật những quyển 
                <a title="Sách mới" href="#">sách mới</a> thuộc các thể loại đặc sắc như 
                <a title="Viễn tưởng" href="#">viễn tưởng</a>, 
                <a title="Khoa học" href="#">khoa học</a>, hay 
                <a title="Lãng mạn" href="#">lãng mạn</a> một cách nhanh nhất. Hỗ trợ mọi thiết bị như di động và máy tính bảng.
            </div>
            <ul class="col-xs-12 col-sm-7 list-unstyled">
                <li class="text-right pull-right">
                    <a href="#" title="Contact">Contact</a> - 
                    <a href="#" title="Terms of Service">ToS</a>
                    <a class="backtop" title="Trở lên đầu trang" href="#wrap" rel="nofollow" aria-label="Trở về đầu trang">
                        <span class="glyphicon glyphicon-upload"></span>
                    </a>
                </li>
                <li class="hidden-xs tag-list">
                    <!-- start loop -->
                    <?php foreach(getTheLoai_Header() as $val) { ?>
                    <a href="#" title="<?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></a>
                    <?php } ?>
                    <!-- end loop -->
                </li>
            </ul>
        </div>
    </div>
    <script src="<?php public_patch('home/js/main.js') ?>"></script>
    <!--
    <noscript>
        <link rel="stylesheet" type="text/css" href="https://static.8cache.com/min/g/maincss-08122021_1.css"/>
    </noscript>
    <script>
        $('head').append('<link rel="stylesheet" type="text/css" href="https://static.8cache.com/min/g/maincss-08122021_1.css"/>');
    </script>-->
</body>
</html>