<?php

namespace App\Repository;

use illuminate\Database\Eloquent\Model;

class CrudRepository{

    protected $model;

    public function getAll($columns = array('*')){
        return $this->model->get($columns);
    }

    public function create($data){
        return $this->model->create($data);
    }

    public function update($data, $id){
        return $this->model->where("id", "=", $id)->update($data);
    }

    public function delete($id){
        return $this->model->destroy($id);
    }

    public function read($id){
        return $this->model->find($id);
    }

}
