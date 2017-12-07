<?php declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\GoneHttpException as SymfonyGoneHttpException
		};

		/**
		 * Class GoneHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class GoneHttpException extends SymfonyGoneHttpException
		{

		}
	}