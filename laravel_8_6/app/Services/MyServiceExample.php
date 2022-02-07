<?php
namespace App\Services;

class MyServiceExample
{
    public function __construct(OtherServiceExample $otherService)
    {
        $otherService->testMe();
        echo "\n" . __CLASS__;
    }
}
