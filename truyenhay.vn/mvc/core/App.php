<?php
    class App{
        //Tạo thuộc tính lưu trữ các thành phần của thanh địa chỉ
        protected $controller = 'home';
        protected $action = 'index';
        protected $params = [];

        function __construct(){
            $url = $this->URLProcess();

            //Nếu thanh địa chỉ không có url nào, thì gán cứng cho phần tử thứ 0 thành controller mặc định
            if($url == null){
                $url[0] = $this->controller;
            }

            //Kiểm tra trong thư mục controllers, xem có file nào tên giống với thuộc tính controller ($url[0]) hay không
            if(file_exists("./mvc/controllers/".$url[0].".php")){
                //Gán thuộc tính controller bằng $url[0], sau đó xóa nó khỏi mảng
                $this->controller = $url[0];
                unset($url[0]);
            }

            //Gọi file chứa controller đó vào và khởi tạo nó luôn
            require_once "./mvc/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;

            //Tương tự với phần action, thay thế "-" trên thanh địa chỉ thành rỗng
            if(isset($url[1])){
                $url[1] = str_replace("-", "", $url[1]);
                //Kiểm tra xem hàm có trong file controller không
                if(method_exists($this->controller, $url[1])){
                    $this->action = $url[1];
                    unset($url[1]);
                }
            }
            //Gán tất cả phần còn lại cho params
            $this->params = $url?array_values($url):[];
            call_user_func_array([$this->controller, $this->action], $this->params);
        }

        function URLProcess(){
            if(isset($_GET['url'])){
                return explode("/", filter_var(trim($_GET['url'], '/')));
            }
        }
    }
?>