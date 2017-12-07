<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\AccessDeniedHttpException as SymfonyAccessDeniedHttpException
		};

		/**
		 * Class AccessDeniedHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class AccessDeniedHttpException extends SymfonyAccessDeniedHttpException
		{

		}
	}