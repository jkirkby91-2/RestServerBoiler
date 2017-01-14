<?php

namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions;

/**
 * Class UpdateResourceFailedException
 * @package Jkirkby91\LumenRestServerComponent\Exceptions
 */
class UpdateResourceFailedException	 extends \Symfony\Component\HttpKernel\Exception\HttpException
{
    public function __construct($statusCode = 422, $message = 'Update Resource Exception', \Exception $previous = null, array $headers = array(), $code = 0)
    {

    }
}