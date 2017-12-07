<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler\Exceptions {

		use Symfony\Component\HttpKernel\Exception\HttpException as SymfonyHttpException;

		/**
		 * Class RequestValidationFailedException
		 *
		 * @package Jkirkby91\LumenRestServerComponent\Exceptions
		 * @author James Kirkby <jkirkby91@gmail.com>
		 */
		class RequestValidationFailedException extends SymfonyHttpException
		{
			/**
			 * RequestValidationFailedException constructor.
			 *
			 * @param string          $message
			 * @param int             $statusCode
			 * @param \Exception|null $previous
			 * @param array           $headers
			 * @param int             $code
			 */
			public function __Construct(string $message = 'Request Validation Failed Exception', int $statusCode = 400, \Exception $previous = null, array $headers = [], int $code = 0)
			{
				parent::__Construct($statusCode, $message, $previous, $headers, $code);
			}
		}
	}