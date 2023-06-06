<div class="container" id="intro-index">
    <div class="title-list">
        <h2>
            <a href="#" title="Truyện hot">Sách hot</a>
        </h2>
        <a href="#" title="Truyện hot">
            <span class="glyphicon glyphicon-fire"></span>
        </a>
        <select id="hot-select" class="form-control new-select" aria-label="Chọn thể loại">
            <option value="all">Tất cả</option>
            <?php foreach(getTheLoai_Header() as $val) { ?>
            <option value="1"><?php echo $val['ten'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="index-intro">
        <?php $stt = 1; foreach($data['truyenHOT'] as $val){ ?>
        <div class="item top-<?php echo $stt; ?>" itemscope>
            <a href="<?php echo APP_URL.'home/truyen/' ?>" itemprop="url">
                <?php if($val['trangthai'] == "Hoàn thành"){ ?>
                <span class="full-label"></span>
                <?php } ?>
                <img src="<?php public_patch('home/img/pixel-cover.gif') ?>" lazysrc="<?php storage_patch($val['hinh']) ?>" alt="<?php echo $val['ten'] ?>" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name"><?php echo $val['ten'] ?></h3>
                </div>
            </a>
        </div>
        <?php $stt++; } ?>
    </div>
    </div>
    <div class="container" id="list-index">
        <div class="row text-center">
            <div id="banner-bio-link"></div>
        </div>
        <div class="hide" id="history-holder"></div>
        <div class="list list-truyen list-new col-xs-12 col-sm-12 col-md-8 col-truyen-main">
            <div class="title-list">
                <h2><a href="#" title="Truyện mới">Sách mới cập nhật</a></h2>
                <a href="#" title="Truyện mới">
                    <span class="glyphicon glyphicon-menu-right"></span>
                </a>
                <select id="new-select" class="form-control new-select" aria-label="Chọn thể loại">
                    <option value="all">Tất cả</option>
                    <?php foreach(getTheLoai_Header() as $val) { ?>
                    <option value="1"><?php echo $val['ten'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <?php foreach($data['truyenCapNhat'] as $val) { ?>
            <div class="row" itemscope>
                <div class="col-xs-9 col-sm-6 col-md-5 col-title">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <h3 itemprop="name">
                        <a href="#" title="<?php echo $val['ten'] ?>" itemprop="url"><?php echo $val['ten'] ?></a>
                    </h3>
                    <span class="label-title label-new"></span>
                </div>
                <div class="hidden-xs col-sm-3 col-md-3 col-cat text-888">
                    <?php getTheLoai_HOME($val['id']) ?>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 col-chap text-info">
                    <a href="#">
                        <span class="chapter-text"><span>Chương </span></span><?php echo $val['chuong'] ?>
                    </a>
                </div>
                <div class="hidden-xs hidden-sm col-md-2 col-time text-888"><?php echo DateToTime($val['capnhat']) ?></div>
            </div>
            <?php } ?>
        </div>
        <div class="col-md-4 col-truyen-side">
            <div class="visible-md-block visible-lg-block text-center">
                <div class="hide" id="history-holder-side"></div>
                <div class="list list-truyen list-cat col-xs-12">
                    <div class="title-list">
                        <h4>Thể loại sách</h4>
                    </div>
                    <div class="row">
                        <!-- start loop -->
                        <?php foreach($data['theLoaiTruyen'] as $val) { ?>
                        <div class="col-xs-6">
                            <a href="#" title="Truyện <?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></a>
                        </div>
                        <?php } ?>
                        <!-- end loop -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container" id="truyen-slide">
        <div class="list list-thumbnail col-xs-12">
            <div class="title-list">
                <h2><a href="#" title="Truyện hay">Sách đã hoàn thành</a></h2>
                <a href="#" title="Truyện hay">
                    <span class="glyphicon glyphicon-menu-right"></span>
                </a>
            </div>
            <div class="row">
                <?php foreach($data['truyenHoanThanh'] as $val) { ?>
                <div class="col-xs-4 col-sm-3 col-md-2">
                    <a href="#" title="<?php echo $val['ten'] ?>">
                        <img src="<?php storage_patch($val['hinh']) ?>" alt="<?php echo $val['ten'] ?>" style="height: 245px; width: 163px;">
                        <div class="caption">
                            <h3><?php echo $val['ten'] ?></h3>
                            <small class="btn-xs label-primary">Full - <?php echo $val['chuong'] ?> chương</small>
                        </div> 
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>