<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">THỂ LOẠI SÁCH</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo bangdieukhien ?>">Bảng Điều Khiển</a></li>
                    <li class="breadcrumb-item active">Thể Loại Sách</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>THỂ LOẠI</th>
                                <th>THỂ LOẠI KHÔNG DẤU</th>
                                <th>NGÀY TẠO</th>
                                <th>HÀNH ĐỘNG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt = 1; foreach ($data['theloai'] as $val) { ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $val['ten'] ?></td>
                                <td><?php echo $val['ten_khongdau'] ?></td>
                                <td><span class="tag tag-success"><?php echo DateToTime($val['ngaytao']) ?></span></td>
                                <td>
                                    <button class="btn" onclick="ChinhSua('<?php echo $val['id'] ?>', '<?php echo $val['ten'] ?>')"><i class="fas fa-edit"></i></button>
                                    <a href="<?php echo XuLyXoaTheLoaiTruyen.'/'.$val['id'] ?>" class="btn" onclick="return confirm('Bạn có muốn xóa thể loại [<?php echo $val['ten'] ?>]?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php $stt++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo XuLyThemTheLoaiTruyen ?>" method="POST">
                            <div class="form-group">
                                <label for="ten">Tên Thể Loại (*)</label>
                                <input type="text" class="form-control" name="ten" id="ten" required autocomplete="off">
                                <small class="form-text text-muted">Tên thể loại phải là duy nhất, không được trùng.</small>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo XuLySuaTheLoaiTruyen ?>" method="POST">
                        <input id="id_chinhsua" type="text" name="id" hidden>
                            <div class="form-group">
                                <label for="ten">Sửa Tên Thể Loại (*)</label>
                                <input id="ten_chinhsua" type="text" class="form-control" name="ten" id="ten" required autocomplete="off">
                                <small class="form-text text-muted">Tên thể loại phải là duy nhất, không được trùng.</small>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-sync-alt"></i> Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    function ChinhSua(id, ten, noidung){
        document.getElementById('id_chinhsua').value = id;
        document.getElementById('ten_chinhsua').value = ten;
    }
</script>