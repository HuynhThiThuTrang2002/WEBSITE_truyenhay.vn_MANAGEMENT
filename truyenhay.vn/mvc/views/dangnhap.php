<?php require_once "./mvc/core/libs.php"; require_once "./mvc/core/route.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng Nhập</title>
    <link rel="shortcut icon" href="<?php public_patch('img/trang.jpg') ?>" type="image/x-icon">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php public_patch('css/style_login-4.css') ?>">
</head>
<body>
    <div class="form-login px-3 shadow-sm">
        <div class="temp"></div>
        <div class="frame-ing">
            <a href="<?php echo APP_URL ?>">
                <img src="<?php public_patch('img/trang.jpg') ?>">
            </a>
        </div>
        <div class="notice mt-2">
            <p class="text-muted">
                Nếu chưa có tài khoản, vui lòng đăng ký tài khoản mới.
            </p>
        </div>
        <?php if(isset($_COOKIE['message'])){ ?>
        <div class="alert-alert-warning-shadow-sm-px-2" role="alert">
            <?php echo $_COOKIE['message']; ?>
        </div>
        <?php } ?>
        <form action="<?php echo XuLyDangNhap ?>" method="POST" class="mt-2">
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="text" name="tendangnhap" class="form-control-input-1" placeholder="Tên đăng nhập" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="password" name="matkhau" class="form-control-input-1" placeholder="Mật khẩu" required>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-12">
                    <div class="checkbox-checkbox-primary-float-left-p-t-0">
                        <input id="checkbox-signup" name="remember" type="checkbox">
                        <label for="checkbox-signup">Nhớ mật khẩu </label>
                    </div>
                    <a href="<?php echo dangky ?>" id="to-recover" class="text-dark-float-right"><i class="fa fa-lock m-r-5"></i> Quên mật khẩu?</a>
                </div>
            </div>
            </br>
            <div class="form-group text-center m-t-20 mt-2">
                <div class="col-xs-12">
                    <button type="submit" class="btn-btn-info-btn-lg-btn-block-text-uppercase-waves-effect-waves-light-btn-dangnhap">Đăng Nhập</button>
                </div>
            </div>
            <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                    <p>Bạn chưa có tài khoản? <a href="<?php echo dangky ?>" class="text-primary m-1-5"><b>Đăng ký</b></a></p>
                </div>
            </div>
        </form>
    </div>
    <script src="./public/js/jquery-3.5.1.min.js"></script>
    <script src="./public/js/popper.min.js"></script>
     <script src=".public/js/bootstrap.min.js"></script>
</body>
</html>