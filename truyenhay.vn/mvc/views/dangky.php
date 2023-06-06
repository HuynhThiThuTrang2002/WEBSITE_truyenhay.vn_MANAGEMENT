<?php require_once "./mvc/core/libs.php"; require_once "./mvc/core/route.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng Ký Tài Khoản</title>
    <link rel="shortcut icon" href="<?php public_patch('img/trang.jpg') ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php public_patch('css/login1.css') ?>">
</head>
<body>
    <div class="container">
    <div class="card-bg-dark">
        <article class="card-body-mx-auto" style="max-width: 400px;">
            <h4 class="t1 card-title mt-3 text-center">Tạo Tài Khoản</h4>
            <p class="t1 text-center">Bắt đầu tạo tài khoản miễn phí</p>
            <p>
                <a href="#" class="btn-btn-block-btn-twitter" onclick="Alert('Tinh năng này hiện đang phát triển!')" > <i class="fab fa-twitter"></i> Đăng nhập với Twitter</a></br></br>
                <a href="#" class="btn-btn-block-btn-facebook" onclick="Alert('Tính năng này hiện dang phát triển!')"> <i class="fab fa-facebook-f"></i> Đăng nhập với Facebook</a>
            </p>
            <p class="divider-text"><span class="bg-light rounded-circle"><b>Hoặc</b></span></p>
            
            <form action="<?php echo xulydangky; ?>" method="POST">
                <div class="form-group-input-group position-relative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input id="check_user" name="tendangnhap" class="form-control" placeholder="Tên đăng nhập..." type="text" maxlength="50" onchange="check_KyTula()" required>
                </div>
</br>
                <div class="form-group-input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input id="pass" name="matkhau" class="form-control" placeholder="Mật khẩu..." type="password" maxlength="50" required>
                </div>
</br>
                <div class="form-group-input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input id="re_pass" name="nhaplaimatkhau" class="form-control" placeholder="Nhập lại mật khẩu..." type="password" maxlength="50" required>
                </div>
            </br>
                <div class="form-group">
                    <button name="CreateAccount" type="submit" class="btn-btn-primary-btn-block"><i class="fas fa-user-plus"></i> Tạo Tài Khoản</button>
                </div>
                <p class="t1 text-center">Bạn đã có tài khoản? <a href="<?php echo dangnhap ?>" style="color: gold;">Đăng nhập</a> </p>
                <p class="t1 text-center"><a class="text-light" href="<?php echo APP_URL ?>"><i class="fas fa-home"></i> Trở về Trang Chủ</a> </p>
            </form>
        </article>
    </div>

    </div>
    <!--container end.//-->

    <script src="<?php public_patch('js/jquery-3.5.1.min.js') ?>"></script>

    <script src="<?php public_patch('js/popper.min.js') ?>"></script>
    <script src="<?php public_patch('js/bootstrap.min.js') ?>"></script>
    <script src="<?php public_patch('js/jquery-confirm.min.js') ?>"></script>

    <?php
        // if(isset (S COOKIE['error message 1))(
        //  echo '<script type="text/javascript">Error("'.$_COOKIE["error_message"].'")</script>';
        // }
    ?>
</body>
</html>