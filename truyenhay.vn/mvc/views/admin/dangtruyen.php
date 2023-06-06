<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">ĐĂNG SÁCH</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo bangdieukhien ?>">Bảng Điều Khiển</a></li>
                    <li class="breadcrumb-item active">Đăng Sách</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-body">
                    <form action="<?php echo XuLyDangTruyen ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên Truyện (*)</label>
                            <input type="text" class="form-control" name="ten" required autocomplete="off" maxlength="150">
                            <small class="form-text text-muted">Tên sách phải là duy nhất, không được vượt quá 150 ký tự.</small>
                        </div>
                        <div>
                            <label>Hình Truyện</label>
                            <div class="input-group mb-3">
                                <input type="file" class="custom-file-input" id="hinh" name="hinh" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="hinh">Chọn hình ảnh</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tác Giả (*)</label>
                            <input type="text" class="form-control" name="tacgia" required>
                        </div>
                        <div class="form-group">
                            <label>Nguồn (*)</label>
                            <input type="text" class="form-control" name="nguon" value="TuSach.vn" maxlength="255" required>
                        </div>
                        <div class="form-group">
                            <label>Trạng Thái</label>
                            <select class="form-control" name="trangthai">
                                <option value="Đang cập nhật">Đang cập nhật</option>
                                <option value="Tạm ngừmg">Tạm ngừng</option>
                                <option value="Hoàn thành">Hoàn thành</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Thể Loại</label>
                            <div class="select2-purple">
                                <select class="select2" multiple="multiple" data-placeholder="Chọn ít nhất 1 thể loại" style="width: 100%;" name="theloai[]" required>
                                    <?php foreach ($data['theloai'] as $val) { ?>
                                    <option value="<?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Giới Thiệu</label>
                            <textarea class="form-control ckeditor" name="gioithieu" id="gioithieu" rows="3"></textarea>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Lưu Truyện</button></div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
</script>