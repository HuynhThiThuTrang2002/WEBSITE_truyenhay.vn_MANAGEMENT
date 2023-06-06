<?php require_once "./mvc/core/libs.php"; require_once "./mvc/core/route.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .col-lg-7-connectedSortable{
      flex: 0 0 100%;
      flex-grow: 0;
      flex-shrink: 0;
      flex-basis: 100%;
      max-width: 100%;
    }
  </style>
</head>
<body>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">THÔNG TIN CỦA CÁC THÀNH VIÊN TRONG NHÓM SOS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo bangdieukhien ?>"><i class="ion-home"></i> Home</a>
            </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 style="font-size: 25px">Lê Võ Huỳnh Nga</h3>

                <p>Bến Tre</p>
              </div>
              <div class="icon">
                <i class="ion-woman"></i>
              </div>
              <a href="https://www.facebook.com/ngalvh.it" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="font-size: 25px">Trần Minh Minh Đức</h3>

                <p>Tây Ninh</p>
              </div>
              <div class="icon">
                <i class="ion-man"></i>
              </div>
              <a href="https://www.facebook.com/profile.php?id=100048401718388" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 style="font-size: 25px">Cao Thị Thu Hương</h3>

                <p>Đắk Lắk</p>
              </div>
              <div class="icon">
                <i class="ion-woman"></i>
              </div>
              <a href="https://www.facebook.com/profile.php?id=100022418955774" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 style="font-size: 25px">Huỳnh Thị Thu Trang</h3>

                <p>Quảng Ngãi</p>
              </div>
              <div class="icon">
                <i class="ion-woman"></i>
              </div>
              <a href="https://www.facebook.com/hana.huynh.79219/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <section class="col-lg-7-connectedSortable" width="100%">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="font-size: 25px">
                  <i class="ion-clipboard"></i>
                  Nội dung
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0" style="font-size: 20px" >
                  <!-- Morris chart - Sales -->
                  <div>
                    <strong>CHÀO THẦY VÀ CÁC BẠN ĐẾN VỚI TRANG WEB CỦA NHÓM SOS</strong><i class="ion-heart"></i>
                  </div>
                  <div>
                    Trang web được tạo nhằm mục đích cập nhật những cuốn sách hay với nhiều thể loại phục vụ những người có nhu cầu đọc sách online.
                  </div>
                  <div>
                    Sách là kho tàng lưu trữ những di sản, thành tựu vô giá được truyền từ thời kỳ này sang thời kỳ khác, từ thế hệ này qua thế hệ khác.
                  </div></br>
                  <div>
                    Chúng ta có thể chủ động tiếp cận tiếp nhận thêm nhiều kiến thức hơn nữa thông qua việc đọc sách. Những cuốn sách về mọi lĩnh vực từ kinh tế, văn hóa, chính trị cho đến những cuốn tiểu thuyết phiêu lưu, tâm lý tình cảm, các cuốn sách tạo động lực hay quyển tự sự về cuộc đời có thực của một nhân vật có sự ảnh hưởng đến chúng ta.
                  </div></br>
                  <div>
                    Đọc sách có thể là một sở thích như thích nhân vật truyện tranh nào đó, là một hoạt động để giết thời gian khi không biết làm gì, là vài phút ngẫu hứng ngồi tìm đọc trong một thư viện, cửa hàng sách nào đó ngày mưa hoặc là một thói quen của người người ham đọc sách.
                  </div></br>
                  <div>
                    Tuy nhiên dù vô tình hay chủ động thì bạn cũng sẽ nhận được những trải nghiệm thú vị khi  đọc sách. Không phải tự nhiên người ta khuyến khích việc mọi người đọc sách hay có thể dành cả cuộc đời mình để viết sách.
                  </div></br>
                  <div>
                    Vì vậy “Tủ Sách Healthy” được tạo ra để việc đọc sách của mọi người được tiện lợi hơn được cập nhật dễ hơn. Trang web này giúp những người đam mê sách có thể đọc sách ở mọi nơi bất kì lúc nào nơi nào. Tạo nên sự thuận tiện cho người đọc, cũng như tạo sự tiện lợi cho những tác giả muốn chia sẻ cho người đọc những câu chuyện của mình.
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</body>
</html>