<?php
// BaseController để thực hiện gọi require đến các View mà không phải mất công gọi đến theo từng lệnh

class BaseController
{
    // cái tên của hằng constant là VIEW_FOLDER_NAME không thay đổi nghĩa là luôn là Views
    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';
    /**
     * Quy tắc :
     * path name: FolderName.fileName
     * Lấy tên thư mục từ sau thư mục View : VD return view('frontend.products.index')
     * Tất cả các Controller muốn node đc View phải kế thừa BaseController mới sử dụng được method view của lớp cha 
     */
    protected function view($viewPath,array $data = []){
        // Ghép self:: (của hằng thì dùng self:: k phải dùng this) gọi đến Views nối với đoạn muốn đến và nối với .php
        // Dùng hàm str_replace để chuyển dấu . thành dấu /
        //echo '<pre>';
        //print_r($data);
        //echo '</pre>';
        //die;

        // giá trị của $data và gán cho $key xử lý sau đó in ra gtri
        foreach($data as $key =>$value ){
            // lấy gtri của hàm $$key và in $$key 
            $$key = $value;
        }
        

        //$viewPath = self::VIEW_FOLDER_NAME .'/'. str_replace('.','/',$viewPath).'.php';
        require(self::VIEW_FOLDER_NAME .'/'. str_replace('.','/',$viewPath).'.php');
        
    }

    protected function loadModel($ModelPath){
        require(self::MODEL_FOLDER_NAME .'/'. $ModelPath.'.php');
    }
}