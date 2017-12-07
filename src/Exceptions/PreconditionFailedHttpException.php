<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\PreconditionFailedHttpException as SymfonyPreconditionFailedHttpException
		};

		/**
		 * Class PreconditionFailedHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class PreconditionFailedHttpException extends SymfonyPreconditionFailedHttpException
		{

		}
	}