<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">BỘ SƯU TẬP SÁCH</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo bangdieukhien ?>">Bảng Điều Khiển</a></li>
                    <li class="breadcrumb-item active">Bộ sưu tập sách</li>
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
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>HÌNH</th>
                                <th>TÊN TRUYỆN</th>
                                <th>TÁC GIẢ</th>
                                <th>TRẠNG THÁI</th>
                                <th>SỐ CHƯƠNG</th>
                                <th>THỂ LOẠI</th>
                                <th>CẬP NHẬT</th>
                                <th>HÀNH ĐỘNG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- start loop -->
                            <?php $stt = 1; foreach ($data['truyen'] as $val) { ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><img src="<?php storage_patch($val['hinh']) ?>" width="45"></td>
                                <td><?php echo $val['ten'] ?></td>
                                <td><?php echo $val['tacgia'] ?></td>
                                <td><?php echo $val['trangthai'] ?></td>
                                <td><?php echo $val['chuong'] ?></td>
                                <td><?php getTheLoai($val['id']) ?></td>
                                <td><span class="tag tag-success"><?php echo DateToTime($val['capnhat']) ?></span></td>
                                <td>
                                    <a class="btn" href="<?php echo DanhSachChuong.'/'.$val['ten_khongdau'] ?>"><i class="fas fa-list"></i></a>
                                    <a class="btn" href="<?php echo SuaTruyen.'/'.$val['ten_khongdau'] ?>"><i class="fas fa-edit"></i></a>
                                    <a href="<?php echo XuLyXoaTruyen.$val['id'] ?>" class="btn" onclick="return confirm('Bạn có muốn xóa sách [<?php echo $val['ten'] ?>]?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php $stt++; } ?>
                            <!-- end loop -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>