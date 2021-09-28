<?php
class ProductController extends BaseController
{
    private $productModel;

    public function __construct(){
         // require view($modelPath)=>bên trong truyền dữ liệu cho modelpath sau đó chạy require ModelPath(đường dẫn...+php)
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;
    }

    public function index(){
       
        // Load Model ok khởi tạo model
        
        echo $this->productModel->GetAll();

        $pageTitle = "Danh Sách Sản Phẩm Theo Danh Mục: Laptop";

        //include("E:\\xampp\htdocs\Project_MVC\Views\\frontend\products\index.php");  
        // require view($viewPath)=>bên trong truyền dữ liệu cho view path sau đó chạy require viewPath(đường dẫn...+php)
        return $this->view('frontend.products.index',[
            "pagetitle"=>$pageTitle
        ]);
    }

    public function show(){
        $product = $this->productModel->findByID(1);
        //echo __METHOD__;
        return $this->view('frontend.products.show',[
            'Product'=>$product
        ]);
    }
}