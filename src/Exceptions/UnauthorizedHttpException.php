<?php

namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions;

/**
 * Class UnauthorizedHttpException
 * @package Jkirkby91\LumenRestServerComponent\Exceptions
 */
class UnauthorizedHttpException	 extends \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
{
    public function __construct()
    {
        parent::__construct(null,'Unauthorized Request',null,401);
    }
}