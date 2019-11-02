<?php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Console\Application;
use Symfony\Component\Debug\Debug;

Debug::enable();

// $application = new Application();
// $application->run();

$request = Request::createFromGlobals();

$name = $request->get('name', 'World');
dump($request);
dump($request->getPathInfo());

$response = new Response('sad!');
$response->send();