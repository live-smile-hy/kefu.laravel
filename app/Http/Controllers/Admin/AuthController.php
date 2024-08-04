<?php

namespace App\Http\Controllers\Admin;

use App\Http\Common\RspCodeStr;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminUser;

class AuthController extends BaseController
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        $email = $request->post('email', '');
        $username = $request->post('username', '');
        $realname = $request->post('realname', '');
        $password = $request->post('password', '');

        if (!$email || !$password) {
            return $this->fail(RspCodeStr::PARAMETER_EMPTY);
        }

        $model = new AdminUser();
        $model->username = $username;
        $model->realname = $realname;
        $model->email = $email;
        $model->password = Hash::make($password);
        $model->save();

        return $this->success();
    }

    public function login(Request $request): JsonResponse
    {
        $email = $request->post('email', '');
        $password = $request->post('password', '');

        if (!$token = auth()->attempt(['email' => $email, 'password' => $password])) {
            return $this->fail();
        };

        $user = $request->user();
        return $this->success([
            'user' => $user,
            'token' => $token
        ]);
    }

    public function me()
    {

    }


}
