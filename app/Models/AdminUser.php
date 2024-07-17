<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * @property int id ID
 * @property string username 用户名
 * @property string realname 真实名称
 * @property string email 邮箱
 * @property string password 密码
 * @property int status 账号状态 0=正常 1=禁用 2=注销中 3=已注销
 * @property string created_at
 * @property string updated_at
 * @property string active_at
 */
class AdminUser extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    const STATUS_NORMAL = 0;
    const STATUS_BAN = 1;
    const STATUS_DEL_PROCESS = 2;
    const STATUS_DEL_DELETED = 3;
    const STATUS_TEXT = [
        self::STATUS_NORMAL => '正常',
        self::STATUS_BAN => '禁用',
        self::STATUS_DEL_PROCESS => '注销中',
        self::STATUS_DEL_DELETED => '已注销'
    ];

    protected $fillable = [
        'username','realname','email',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array
    {
        return [];
    }
}
