<?php

namespace App\Http\Controllers\Admin;

use App\Http\Common\HttpCode;
use App\Http\Common\RspCodeStr;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
    public array $user = [];
    public int $uid;
    public string $username;
    public string $realName;
    public string $email;
    public bool $status;

    public function __construct(Request $request)
    {
        $user = $request->user()->toArray();
        $this->setUser($user);
        $this->setUid($user['id']);
        $this->setEmail($user['email']);
        $this->setStatus(boolval($user['status']));
        $this->setUsername($user['username']);
        $this->setRealName($user['realname']);
    }


    /**
     * @return array
     */
    public function getUser(): array
    {
        return $this->user;
    }

    /**
     * @param array $user
     */
    public function setUser(array $user): void
    {
        $this->user = $user;
    }

    /**
     * @return int
     */
    public function getUid(): int
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid(int $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getRealName(): string
    {
        return $this->realName;
    }

    /**
     * @param string $realName
     */
    public function setRealName(string $realName): void
    {
        $this->realName = $realName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function status(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }
}
