<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\ServiceUnavailableHttpException as SymfonyServiceUnavailableHttpException
		};

		/**
		 * Class ServiceUnavailableHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class ServiceUnavailableHttpException extends SymfonyServiceUnavailableHttpException
		{

		}
	}