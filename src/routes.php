<?php

use Slim\Http\Request;
use Slim\Http\Response;
use api\controllers\EmployeeController;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/api/employees', EmployeeController::class . ':getEmployees');

$app->post('/api/employees', EmployeeController::class . ':createEmployee');

$app->get('/api/employees/{id: [0-9]+}', EmployeeController::class . ':getEmployee');

$app->put('/api/employees/{id: [0-9]+}', EmployeeController::class . ':updateEmployee');

$app->delete('/api/employees/{id: [0-9]+}', EmployeeController::class . ':deleteEmployee');
