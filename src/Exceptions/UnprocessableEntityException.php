<?php

namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions;

/**
 * Class DeleteResourceFailedException
 *
 * @package Jkirkby91\LumenRestServerComponent\Exceptions
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class UnprocessableEntityException extends \Symfony\Component\HttpKernel\Exception\HttpException
{
    public function __construct( $message = 'UnProcessable Entity Exception', $statusCode = 422, \Exception $previous = null, array $headers = array(), $code = 0)
    {
        parent::__construct($statusCode,$message,$previous);
    }
}