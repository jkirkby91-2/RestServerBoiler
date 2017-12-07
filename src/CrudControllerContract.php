<?php declare(strict_types=1);

	namespace Jkirkby91\Boilers\RestServerBoiler {

		use Psr\{
			Http\Message\ServerRequestInterface
		};

		use Zend\{
			Diactoros\Response\JsonResponse
		};

		/**
		 * Interface ResourceControllerContract
		 *
		 * @package Jkirkby91\LumenRestServerComponent\Contracts
		 * @author James Kirkby <jkirkby91@gmail.com>
		 */
		interface CrudControllerContract
		{

			/**
			 * Return all for resource
			 *
			 * @return mixed
			 */
			public function create(ServerRequestInterface $request) : JsonResponse;

			/**
			 * show individual resource
			 *
			 * @param $id
			 * @return mixed
			 */
			public function read(int $id) : JsonResponse;

			/**
			 * Store a new resource
			 *
			 * @param ServerRequestInterface $request
			 * @return mixed
			 */
			public function update(ServerRequestInterface $request) : JsonResponse;

			/**
			 * Destroy single resource
			 *
			 * @param $id
			 * @return mixed
			 */
			public function delete(int $id) : bool;
		}
	}
