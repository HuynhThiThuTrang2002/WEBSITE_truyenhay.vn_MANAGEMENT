<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-uppercase"><?php echo $data['truyen']['ten'] ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo bangdieukhien ?>">Bảng Điều Khiển</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo Truyen ?>">Bộ sưu tập sách</a></li>
                    <li class="breadcrumb-item active">Chương</li>
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
                                <th>TÊN CHƯƠNG</th>
                                <th>TÊN CHƯƠNG KHÔNG DẤU</th>
                                <th>CẬP NHẬT</th>
                                <th>HÀNH ĐỘNG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt = 1; foreach ($data['chuong'] as $val) { ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $val['ten'] ?></td>
                                <td><?php echo $val['ten_khongdau'] ?></td>
                                <td><span class="tag tag-success"><?php echo DateToTime($val['capnhat']) ?></span></td>
                                <td>
                                    <button class="btn" onclick="ChinhSua('<?php echo $val['id'] ?>', '<?php echo $val['ten'] ?>')"><i class="fas fa-edit"></i></button>
                                    <a href="<?php echo XuLyXoaChuong.'/'.$data['truyen']['ten_khongdau'].'/'.$val['id'] ?>" class="btn" onclick="return confirm('Bạn có muốn xóa thể loại [<?php echo $val['ten'] ?>]?')"><i class="fas fa-trash-alt"></i></a>
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
                        <form action="<?php echo XuLyDangChuong ?>" method="POST">
                            <input type="text" name="truyen_id" value="<?php echo $data['truyen']['id'] ?>" hidden>
                            <input type="text" name="ten_khongdau" value="<?php echo $data['truyen']['ten_khongdau'] ?>" hidden>
                            <div class="form-group">
                                <label for="ten">Tên Chương (*)</label>
                                <input type="text" class="form-control" name="ten" id="ten" value="Chương <?php echo $data['truyen']['chuong'] + 1 ?>: " required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea class="form-control ckeditor" name="noidung" id="noidung" rows="3"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Lưu Chương</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo XuLySuaChuong ?>" method="POST">
                        <input id="id_chinhsua" type="text" name="chuong_id" hidden>
                        <input type="text" name="ten_khongdau" value="<?php echo $data['truyen']['ten_khongdau'] ?>" hidden>
                            <div class="form-group">
                                <label for="ten">Sửa Tên Chương (*)</label>
                                <input id="ten_chinhsua" type="text" class="form-control" name="ten" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Sửa Nội Dung</label>
                                <textarea class="form-control ckeditor" name="noidung" id="noidung_sua" rows="3"></textarea>
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
        CKEDITOR.instances['noidung_sua'].setData(noidung);
    }
</script>