<?php

namespace App\Http\Common;

class RspCodeStr
{

    const SUCCESS = 0;

    const UNAUTHORIZED = 400001;

    const FAIL = 500;

    const STATUS_TEXT = [
        self::SUCCESS  => '成功',

        self::FAIL => '错误',
    ];


    public static function getCodeMsg(int $code): string
    {
        return self::STATUS_TEXT[$code] ?? '未定义的错误码';
    }
}
