<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\NotFoundHttpException as SymfonyNotFoundHttpException
		};

		/**
		 * Class NotFoundHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class NotFoundHttpException	 extends SymfonyNotFoundHttpException
		{

		}
	}
