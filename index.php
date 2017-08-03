<?php
require_once __DIR__.'/../php/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/',function() {
  return new Response("This page intentionally left blank.");
});

$app->get('/test',function() {
  return new Response("Mobius API test was successful!");
});

$app->get('/test_json',function() {
  return new JsonResponse(array("response" => "Mobius API JSON test was successful!"));
});

$app->post('/auth',function()) {
  // Do some magic here and return a JWT
};

$app->post('/user',function(Request $request) {
  // Return user settings determined by the JWT
});

$app->post('/game',function(Request $request) {
  // Return game related information detemined by POST variables and the supplied JWT.
});
?>
