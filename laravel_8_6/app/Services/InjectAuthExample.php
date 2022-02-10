<?php

namespace App\Services;

use Illuminate\Container\Container;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Factory as AuthFactory;

class InjectAuthExample
{
    private AuthFactory $auth;

    public function __construct(AuthFactory $auth)
    {
        $this->auth = $auth;
    }

    public function getUser(): Authenticatable
    {
        return $this->auth->guard()->user();
    }

    public function viaContainer()
    {
        return Container::getInstance()
            ->make(AuthFactory::class)
            ->guard()
            ->user();
    }

}
