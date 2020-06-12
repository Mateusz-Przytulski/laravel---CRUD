<?php

namespace App\Repository;

use App\User;

class UserRepository extends CrudRepository{

    public function __construct(user $model)
    {
        $this->model = $model;
    }

    public function getAllUsers(){
        return $this->model->get();
    }
}
