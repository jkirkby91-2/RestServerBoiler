<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\{
			Component\HttpKernel\Exception\HttpException as SymfonyHttpException
		};

		/**
		 * Class DeleteResourceFailedException
		 *
		 * @package Jkirkby91\LumenRestServerComponent\Exceptions
		 * @author James Kirkby <jkirkby91@gmail.com>
		 */
		class UnprocessableEntityException extends SymfonyHttpException
		{
			/**
			 * UnprocessableEntityException constructor.
			 *
			 * @param string          $message
			 * @param int             $statusCode
			 * @param \Exception|null $previous
			 * @param array           $headers
			 * @param int             $code
			 */
			public function __Construct(string $message = 'UnProcessable Entity Exception', int $statusCode = 422, \Exception $previous = null, array $headers = [], int $code = 0)
			{
				parent::__Construct($statusCode, $message, $previous, $headers, $code);
			}
		}
	}
