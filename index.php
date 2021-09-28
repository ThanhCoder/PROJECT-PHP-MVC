<?php
require("E:\\xampp\htdocs\Project_MVC\Controllers\\BaseController.php");
    // Hàm strtolower(str) biến tất cả chữ thành chữ thường
    // hàm ucfirst đổi chữ cái đầu thành chữ hoa, sử dụng toán tử 3 ngôi ? :
    // dùng $_REQUEST sẽ lấy cả URL của $_GET là Server của $_POST
    // nối ."Controller để sau khi khai báo sẽ gọi mục Controller sau tên"
    $controllername = $_REQUEST["controller"] ? ucfirst((strtolower( $_REQUEST["controller"]))) ."Controller" : "WelcomeController" ;
    echo $controllername;
    
    $actionname = strtolower($_REQUEST["action"] ?? 'index') ; // cho thuộc tính
    //$actionname = $_REQUEST["action"] ?  strtolower($_REQUEST["action"].'()') : "index"; // cho phương thức
    echo "<br>".$actionname."<br>";
    
    //require("E:\\xampp\htdocs\Project_MVC\Controllers\ProductController.php");
    require("E:\\xampp\htdocs\Project_MVC\Controllers\\$controllername.php");
    
    $cate = new $controllername;
    //$cate->index();
    $cate->$actionname();
?>
<h3>MVC PROJECT</h3>