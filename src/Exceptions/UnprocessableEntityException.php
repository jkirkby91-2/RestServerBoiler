<?php

namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions;

/**
 * Class DeleteResourceFailedException
 * @package Jkirkby91\LumenRestServerComponent\Exceptions
 */
class UnprocessableEntityException extends \Symfony\Component\HttpKernel\Exception\HttpException
{
    public function __construct($statusCode = 422, $message = 'Unprocessable Entity Exception', \Exception $previous = null, array $headers = array(), $code = 0)
    {
        parent::__construct($statusCode,$message,$previous);
    }
}