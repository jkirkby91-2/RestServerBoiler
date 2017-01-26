<?php

namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions;

/**
 * Class UnauthorizedHttpException
 *
 * @package Jkirkby91\LumenRestServerComponent\Exceptions
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class UnauthorizedHttpException	 extends \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
{
    public function __construct($msg = 'Unauthorized Request')
    {
        parent::__construct(null,$msg,null,401);
    }
}