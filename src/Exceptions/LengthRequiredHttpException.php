<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\LengthRequiredHttpException as SymfonyLengthRequiredHttpException
		};

		/**
		 * Class LengthRequiredHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class LengthRequiredHttpException extends SymfonyLengthRequiredHttpException
		{

		}
	}
