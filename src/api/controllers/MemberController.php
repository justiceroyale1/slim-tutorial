<?php
namespace api\controllers;


use Slim\Http\Request;
use Slim\Http\Response;
use api\controllers\BaseController;


class MemberController extends BaseController
{
    public function getMembers(Request $request, Response $response, array $args)
    {
    	// log visit to this route
    	$this->container->logger->info("/api/members route");

    	// create an array of employees
    	$employees = [
    		['name' => 'John Doe', 'department' => 'Sales'],
    		['name' => 'Mary Jane', 'department' => 'IT']
    	];

    	// return employees as json response
    	return $response->withJson(['employees' => $employees]);
    }
}