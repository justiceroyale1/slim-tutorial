<?php
namespace api\controllers;


use Slim\Http\Request;
use Slim\Http\Response;
use api\controllers\BaseController;
use api\models\Employee;


class EmployeeController extends BaseController
{
    public function getEmployees(Request $request, Response $response, array $args)
    {
    	// log visit to this route
    	$this->container->logger->info("/api/employees route");

    	// get all employees from the database
    	$employees = Employee::all();

    	// return employees as json response
    	return $response->withJson(['employees' => $employees]);
    }
}