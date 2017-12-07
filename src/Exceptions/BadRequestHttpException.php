<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\BadRequestHttpException as SymfonyBadRequestHttpException
		};

		/**
		 * Class BadRequestHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class BadRequestHttpException extends SymfonyBadRequestHttpException
		{

		}
	}