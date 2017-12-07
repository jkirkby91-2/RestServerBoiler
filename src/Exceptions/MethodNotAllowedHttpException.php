<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\MethodNotAllowedHttpException as SymfonyMethodNotAllowedHttpException
		};

		/**
		 * Class MethodNotAllowedHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class MethodNotAllowedHttpException	 extends SymfonyMethodNotAllowedHttpException
		{

		}
	}