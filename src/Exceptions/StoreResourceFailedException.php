<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\HttpException as SymfonyHttpException
		};

		/**
		 * Class StoreResourceFailedException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class StoreResourceFailedException extends SymfonyHttpException
		{
			/**
			 * StoreResourceFailedException constructor.
			 *
			 * @param int             $statusCode
			 * @param string          $message
			 * @param \Exception|null $previous
			 * @param array           $headers
			 * @param int             $code
			 */
			public function __Construct(int $statusCode = 422, string $message = 'Store Resource Exception', \Exception $previous = null, array $headers = [], int $code = 0)
			{
				parent::__construct($statusCode, $message, $previous, $headers, $code);
			}
		}
	}