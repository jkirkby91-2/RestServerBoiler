<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\TooManyRequestsHttpException as SymfonyTooManyRequestsHttpException
		};

		/**
		 * Class TooManyRequestsHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class TooManyRequestsHttpException extends SymfonyTooManyRequestsHttpException
		{

		}
	}