<?php

namespace Jkirkby91\Boilers\RestServerBoiler;

/**
 * Interface TransformerContract
 *
 * @package Jkirkby91\LumenRestServerComponent\Contracts
 * @author James Kirkby <jkirkby91@gmail.com>
 */
interface TransformerContract
{
    /**
     * @param $object
     * @return mixed
     */
    public function transform($object);
}