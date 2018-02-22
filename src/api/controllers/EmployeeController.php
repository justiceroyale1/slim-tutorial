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

    public function createEmployee(Request $request, Response $response)
    {
    	$requestParams = $request->getParams();

    	$employee = new Employee($requestParams);

    	$employee->save();

    	return $response->withJson($employee);
    }

    public function getEmployee(Request $request, Response $response, $args)
    {
        $requestId = $args['id'];

        $employee = Employee::find($requestId);

        return $response->withJson(['employee' => $employee]);
    }

    public function updateEmployee(Request $request, Response $response, $args)
    {
        $requestId = $args['id'];
        $requestDetails = $request->getParams();
        $employee = Employee::find($requestId);
        $employee->update($requestDetails);
        return $response->withJson(['employee' => $employee]);
    }

    public function deleteEmployee(Request $request, Response $response, $args)
    {
        $requestId = $args['id'];
        Employee::destroy($requestId);
        return $response->withJson("Employee with id: $requestId has been deleted");
    }
}