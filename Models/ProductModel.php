<h3>Product Model</h3>
<?php

class ProductModel
{
    const TABLE="product";

    public function GetAll(){
        return __METHOD__;
    }

    public function findByID($id){
        return [
        [
            'id'=>1,
            'brand'=>'Apple',
        ],
        [
            'id'=>2,
            'brand'=>'Microsolf'
        ]
            ];
    }

    public function delete(){
        return __METHOD__;
    }
}