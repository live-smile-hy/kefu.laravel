<?php

namespace App\Http\Controllers\Admin;

class UserController extends AdminController
{
    public function user()
    {
        return $this->success($this->getUser());
    }
}
