<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\Component\HttpKernel\Exception\{
			UnsupportedMediaTypeHttpException as SymfonyUnsupportedMediaTypeHttpException
		};

		/**
		 * Class UnsupportedMediaTypeHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class UnsupportedMediaTypeHttpException extends SymfonyUnsupportedMediaTypeHttpException
		{

		}
	}