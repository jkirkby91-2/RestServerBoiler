<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Jkirkby91\{
			Boilers\RestServerBoiler\Exceptions\AccessDeniedHttpException
		};

		/**
		 * Class SecurityException
		 *
		 * @package Healer\Api\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class SecurityException extends AccessDeniedHttpException
		{
			/**
			 * SecurityException Constructor.
			 *
			 * @param string $message
			 */
			public function __Construct(string $message = 'un-acceptable security violation')
			{
				parent::__construct($message);
			}
		}
	}

