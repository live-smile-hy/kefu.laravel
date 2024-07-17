<?php

namespace App\Http\Middleware;

use App\Http\Common\HttpCode;
use App\Models\AdminUser;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\JWT;

class JWTMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure(Request): (Response) $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        /** @var AdminUser $user */
        if (!$user = $request->user()) {
            return \Illuminate\Support\Facades\Response::json([
                'code' => 401,
                'msg' => '您还未登录，请先登录',
                'data' => []
            ])->setStatusCode(HttpCode::StatusUnauthorized);
        }


        if ($user->status === AdminUser::STATUS_BAN) {
            return \Illuminate\Support\Facades\Response::json([
                'code' => 400,
                'msg' => '您的账号已被禁止登录，无法登录',
                'data' => []
            ])->setStatusCode(HttpCode::StatusBadRequest);
        }

        if ($user->status === AdminUser::STATUS_DEL_DELETED) {
            return \Illuminate\Support\Facades\Response::json([
                'code' => 400,
                'msg' => '您的账号已注销，无法登录',
                'data' => []
            ])->setStatusCode(HttpCode::StatusBadRequest);
        }
        return $next($request);
    }
}
