<?php
namespace Locastic\HpExpressApi;

class EnumResponseStatus
{
    const __default = 'OK';
    const OK = 'OK';
    const ERROR = 'ERROR';
    const REJECTED = 'REJECTED';

    public static function getAllConsts() {
        return (new \ReflectionClass(get_class()))->getConstants();
    }
}
