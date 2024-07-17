<?php

namespace App\Http\Controllers;

use App\Http\Common\RspCodeStr;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class BaseController
{
    /**
     * @param array|string $data
     * @param int $code
     * @return JsonResponse
     */
    public function success(array|string $data = [], int $code = RspCodeStr::SUCCESS): JsonResponse
    {
        return $this->handleResponse($code, $data);
    }

    /**
     * @param int $code
     * @param string $msg
     * @param array|string $data
     * @return JsonResponse
     */
    public function fail(int $code = RspCodeStr::FAIL, string $msg = '', array|string $data = []): JsonResponse
    {
        return $this->handleResponse($code, $data, $msg);
    }

    /**
     * @param int $code
     * @param array|string $data
     * @param string $msg
     * @return JsonResponse
     */
    public function handleResponse(int $code, array|string $data, string $msg = ''): JsonResponse
    {
        return Response::json([
            'code' => $code,
            'msg' => $msg ?: RspCodeStr::getCodeMsg($code),
            'data' => $data
        ]);
    }


}
