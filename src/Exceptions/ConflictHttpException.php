<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\ConflictHttpException as SymfonyConflictHttpException
		};

		/**
		 * Class ConflictHttpException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class ConflictHttpException extends SymfonyConflictHttpException
		{

		}
	}