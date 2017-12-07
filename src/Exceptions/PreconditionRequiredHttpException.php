<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\Component\HttpKernel\Exception\PreconditionRequiredHttpException as SymfonyPreconditionRequiredHttpException;

		/**
		 * Class PreconditionRequiredHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class PreconditionRequiredHttpException	 extends SymfonyPreconditionRequiredHttpException
		{

		}
	}