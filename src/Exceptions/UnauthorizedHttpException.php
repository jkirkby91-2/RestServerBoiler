<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\UnauthorizedHttpException as SymfonyUnauthorizedHttpException
		};

		/**
		 * Class UnauthorizedHttpException
		 *
		 * @package Jkirkby91\LumenRestServerComponent\Exceptions
		 * @author James Kirkby <jkirkby91@gmail.com>
		 */
		class UnauthorizedHttpException extends SymfonyUnauthorizedHttpException
		{

			/**
			 * UnauthorizedHttpException constructor.
			 *
			 * @param string $msg
			 */
			public function __Construct(string $msg = 'Unauthorized Request')
			{
				parent::__Construct(null,$msg,null,401);
			}
		}
	}