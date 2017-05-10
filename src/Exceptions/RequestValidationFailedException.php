<?php

namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions;

/**
 * Class RequestValidationFailedException
 *
 * @package Jkirkby91\LumenRestServerComponent\Exceptions
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class RequestValidationFailedException extends \Symfony\Component\HttpKernel\Exception\HttpException
{
    public function __construct( $message = 'Request Validation Failed Exception', $statusCode = 400, \Exception $previous = null, array $headers = array(), $code = 0)
    {
        parent::__construct($statusCode,$message,$previous);
    }
}