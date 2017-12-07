<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\HttpException as SymfonyHttpException
		};

		/**
		 * Class UpdateResourceFailedException
		 *
		 * @package Jkirkby91\Boilers\RestServerBoiler\Exceptions
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		class UpdateResourceFailedException	extends SymfonyHttpException
		{
			/**
			 * UpdateResourceFailedException constructor.
			 *
			 * @param int             $statusCode
			 * @param string          $message
			 * @param \Exception|null $previous
			 * @param array           $headers
			 * @param int             $code
			 */
			public function __Construct(int $statusCode = 422, string $message = 'Update Resource Exception', \Exception $previous = null, array $headers = [], int $code = 0)
			{
				parent::__construct($statusCode, $message, $previous, $headers, $code);
			}
		}
	}
