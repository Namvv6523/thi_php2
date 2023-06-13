<?php
namespace App\Models;

class Product extends BaseModel {

    public $table = "product";
    function getListProduct() {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}


?>