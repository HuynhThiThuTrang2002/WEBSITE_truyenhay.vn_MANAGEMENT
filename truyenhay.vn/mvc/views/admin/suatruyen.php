<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">SỬA SÁCH</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo bangdieukhien ?>">Bảng Điều Khiển</a></li>
                    <li class="breadcrumb-item active">Sửa Sách</li>
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
                    <form action="<?php echo XuLySuaTruyen ?>" method="POST" enctype="multipart/form-data">
                        <input type="text" name="id" value="<?php echo $data['truyen']['id'] ?>" hidden>
                        <div class="form-group">
                            <label>Tên Truyện (*)</label>
                            <input type="text" class="form-control" name="ten" value="<?php echo $data['truyen']['ten'] ?>" required autocomplete="off" maxlength="150">
                            <small class="form-text text-muted">Tên truyện phải là duy nhất, không được vượt quá 150 ký tự.</small>
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
                            <input type="text" class="form-control" name="tacgia" value="<?php echo $data['truyen']['tacgia'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Nguồn (*)</label>
                            <input type="text" class="form-control" name="nguon" value="<?php echo $data['truyen']['nguon'] ?>" maxlength="255" required>
                        </div>
                        <div class="form-group">
                            <label>Trạng Thái</label>
                            <select class="form-control" name="trangthai">
                                <option value="Đang cập nhật" <?php if($data['truyen']['trangthai'] == 'Đang cập nhật') echo 'selected';?>>Đang cập nhật</option>
                                <option value="Tạm ngừmg" <?php if($data['truyen']['trangthai'] == 'Tạm ngừng') echo 'selected';?>>Tạm ngừng</option>
                                <option value="Hoàn thành" <?php if($data['truyen']['trangthai'] == 'Hoàn thành') echo 'selected';?>>Hoàn thành</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Thể Loại (*)</label>
                            <div class="select2-purple">
                                <select class="select2" multiple="multiple" data-placeholder="Chọn ít nhất 1 thể loại" style="width: 100%;" name="theloai[]" required>
                                    <?php foreach ($data['theloai'] as $val) { ?>
                                    <?php if(count($data['truyen_tl']) > 0) { ?>
                                    <?php foreach ($data['truyen_tl'] as $val_2) { ?>
                                    <option value="<?php echo $val['ten'] ?>" <?php if($val['ten'] == $val_2['ten']){ echo 'selected'; } ?>><?php echo $val['ten'] ?></option>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <option value="<?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></option>
                                    <?php }} ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Giới Thiệu</label>
                            <textarea class="form-control ckeditor" name="gioithieu" id="gioithieu" rows="3"><?php echo $data['truyen']['gioithieu'] ?></textarea>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-primary"><i class="fas fa-sync-alt"></i> Cập nhật</button></div>
                    </form>
                </div>
            </div>
        </div>
    
        </div>
    </div>
</section>
