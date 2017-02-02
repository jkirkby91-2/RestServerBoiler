<?php

namespace Jkirkby91\Boilers\RestServerBoiler;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface ResourceControllerContract
 *
 * @package Jkirkby91\LumenRestServerComponent\Contracts
 * @author James Kirkby <jkirkby91@gmail.com>
 */
interface ResourceControllerContract
{

    /**
     * @return mixed
     */
    public function index(ServerRequestInterface $request);

    /**
     * @param $id
     * @return mixed
     */
    public function show($id);

    /**
     * @param ServerRequestInterface $request
     * @return mixed
     */
    public function store(ServerRequestInterface $request);

    /**
     * @param ServerRequestInterface $request
     * @param $id
     * @return mixed
     */
    public function update(ServerRequestInterface $request,$id);

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);

}
