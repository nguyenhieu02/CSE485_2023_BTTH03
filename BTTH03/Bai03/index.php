<!-- Routing là gì? Định tuyến/Điều hướng
<!-- Phân tích xem: URL của người dùng > Muốn gì -->
<!-- Ví dụ: Trang chủ, Quản lý bài viết hay Thêm bài viết -->
<!-- Chuyển quyền cho Controller tương ứng điều khiển tiếp -->
<!-- URL của tôi thiết kế luôn có dạng: -->

<!-- http://localhost/btth02v2/index.php?controller=A&action=B -->
<!-- http://localhost/btth02v2/index.php -->
<!-- http://localhost/btth02v2/index.php?controller=home&action=index -->

<!-- Controller là tên của FILE controller mà chúng ta sẽ gọi -->
<!-- Action là tên cả HÀM trong FILE controller mà chúng ta gọi -->

<?php
require_once 'vendor/autoload.php';
require './view/includes/inc_change_slug.php';
// B1: Bắt giá trị controller và action
$controller = isset($_GET['controller'])?   $_GET['controller']:'home';
$action     = isset($_GET['action'])?       $_GET['action']:'index';
$id         = isset($_GET['id'])?       $_GET['id'] : null;
// B2: Chuẩn hóa tên trước khi gọi
$controller = ucfirst($controller);
$controller .= 'Controller';
$controllerPath = 'controllers/'.$controller.'.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__);
$twig = new \Twig\Environment($loader);

// B3. Để gọi nó Controller
if(!file_exists($controllerPath)){
    die('Lỗi! Controller này không tồn tại');
}
require_once($controllerPath);
// B4. Tạo đối tượng và gọi hàm của Controller
$myObj = new $controller($twig);  //controller=home > new HomeController()
$myObj->$action($twig,$id); //action=index > index()
