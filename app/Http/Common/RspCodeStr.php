<?php

namespace App\Http\Common;

class RspCodeStr
{

    const SUCCESS = 0;

    const PARAMETER_EMPTY = 100000;
    const PARAMETER_ERROR = 100001;

    const UNAUTHORIZED = 400001;

    const FAIL = 500;

    const STATUS_TEXT = [
        self::SUCCESS  => '成功',

        self::PARAMETER_EMPTY => '请求参数不能为空',
        self::PARAMETER_ERROR => '参数错误',

        self::FAIL => '错误',
    ];


    public static function getCodeMsg(int $code): string
    {
        return self::STATUS_TEXT[$code] ?? '未定义的错误码';
    }
}
