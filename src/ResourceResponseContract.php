<?php

namespace Jkirkby91\Boilers\RestServerBoiler;

use Psr\Http\Message\ResponseInterface;

/**
 * Interface ResourceResponseContract
 *
 * @package Jkirkby91\LumenRestServerComponent\Contracts
 * @author James Kirkby <jkirkby91@gmail.com>
 */
interface ResourceResponseContract
{
    /**
     * @param array $data
     * @return mixed
     */
    function createdResponse($data);

    /**
     * @param array $data
     * @return mixed
     */
    function showResponse($data);

    /**
     * @param array $data
     * @return mixed
     */
    function listResponse($data);

    /**
     * @return mixed
     */
    function notFoundResponse();

    /**
     * @return mixed
     */
    function deletedResponse();

    /**
     * @return mixed
     */
    function clientErrorResponse();

}