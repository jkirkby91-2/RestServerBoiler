<?php

	namespace Jkirkby91\Boilers\RestServerBoiler;

	use Psr\Http\Message\ServerRequestInterface;
	use Zend\Diactoros\Response\JsonResponse;

	/**
	 * Interface ResourceControllerContract
	 *
	 * @package Jkirkby91\Boilers\RestServerBoiler
	 * @author  James Kirkby <jkirkby@protonmail.ch>
	 */
	interface ResourceControllerContract
	{

		/**
		 * index()
		 * @param \Psr\Http\Message\ServerRequestInterface $request
		 *
		 * @return \Zend\Diactoros\Response\JsonResponse
		 */
		public function index(ServerRequestInterface $request) : JsonResponse;

		/**
		 * show()
		 * @param \Psr\Http\Message\ServerRequestInterface $request
		 * @param                                          $id
		 *
		 * @return \Zend\Diactoros\Response\JsonResponse
		 */
		public function show(ServerRequestInterface $request, $id) : JsonResponse;

		/**
		 * store()
		 * @param \Psr\Http\Message\ServerRequestInterface $request
		 *
		 * @return \Zend\Diactoros\Response\JsonResponse
		 */
		public function store(ServerRequestInterface $request) : JsonResponse;

		/**
		 * update()
		 * @param \Psr\Http\Message\ServerRequestInterface $request
		 * @param                                          $id
		 *
		 * @return \Zend\Diactoros\Response\JsonResponse
		 */
		public function update(ServerRequestInterface $request, $id) : JsonResponse;

		/**
		 * destroy()
		 * @param \Psr\Http\Message\ServerRequestInterface $request
		 * @param                                          $id
		 *
		 * @return \Zend\Diactoros\Response\JsonResponse
		 */
		public function destroy(ServerRequestInterface $request, $id) : JsonResponse;

	}
