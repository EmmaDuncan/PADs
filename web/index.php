<?php 
require 'vendor/autoload.php';
$app = new \Slim\App();

$app->get('/hello/{name}', function($request, $response, $args) {
	return $response->write("Hello ".$args['name']);
});

$app->get('/bye/{name}', function($request, $response, $args) {
	return $response->write("Bye ".$args['name']);
});

$app->post('/event', function ($request, $response, $args) {
	$data = $request->getParsedBody(); //creates array from data posted by user
	return $response->write($data["abc"]);

});

$app->run();

?>