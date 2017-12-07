<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\HttpException as SymfonyHttpException
		};

		/**
		 * Class HttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class HttpException extends SymfonyHttpException
		{

		}
	}