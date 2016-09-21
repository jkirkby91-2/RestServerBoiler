<?php

namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions;

/**
 * Class DeleteResourceFailedException
 * @package Jkirkby91\LumenRestServerComponent\Exceptions
 */
class StoreResourceFailedException extends \Symfony\Component\HttpKernel\Exception\HttpException
{
    public function __construct($statusCode = 422, $message = 'Store Resource Exception', \Exception $previous = null, array $headers = array(), $code = 0)
    {
        //
    }
}