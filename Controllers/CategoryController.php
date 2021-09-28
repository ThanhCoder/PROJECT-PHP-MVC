<?php

class CategoryController extends BaseController
{
    public function __construct(){
        echo __METHOD__;
    }
    public function index(){
        $categories = [
            [
                'id' => 1,
                'name' => "laptop"
            ],
            [
                'id'   => 2,
                'name' => "laptop"
            ],
            [
                'id' => 3,
                'name' => "laptop"
            ],
            [
                'id' => 4,
                'name' => "laptop"
            ],
            [
                'id' => 5,
                'name' => "laptop"
            ],
            [
                'id' => 6,
                'name' => "laptop"
            ]
        ];

        $pageTitle = "Danh Sách Sản Phẩm Theo Danh Mục: Laptop";

        return $this->view('frontend.categories.index',[
            'categories'=>$categories,
            'pageTitle'=>$pageTitle,
            ]);
    }

    public function show(){
        echo __METHOD__;
    }
}
