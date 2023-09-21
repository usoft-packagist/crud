<?php

namespace Usoft\Crud\Services\User\Services;

use Usoft\Models\User;
use Usoft\Crud\Abstracts\Service;

class UserService extends Service
{
    protected $model = User::class;
    protected $balance = 0;

    public function getUserId()
    {
        return $this->model->id;
    }
}
