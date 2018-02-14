<?php
namespace api\controllers;

use Slim\Container;


class BaseController
{
	protected $container;
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
}