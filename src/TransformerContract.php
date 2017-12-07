<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler {

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
			 * @TODO on 7.2 release typehint object
			 */
			public function transform($object) : array;
		}
	}