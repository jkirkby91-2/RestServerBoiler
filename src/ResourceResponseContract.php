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
     * @param ResponseInterface $data
     * @return mixed
     */
    function createdResponse(ResponseInterface  $data);

    /**
     * @param ResponseInterface $data
     * @return mixed
     */
    function showResponse(ResponseInterface $data);

    /**
     * @param ResponseInterface $data
     * @return mixed
     */
    function listResponse(ResponseInterface $data);

    /**
     * @return mixed
     */
    function notFoundResponse();

    /**
     * @return mixed
     */
    function deletedResponse();

    /**
     * @param ResponseInterface $data
     * @return mixed
     */
    function clientErrorResponse(ResponseInterface $data);

}