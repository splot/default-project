<?php
require_once realpath(dirname(__FILE__) .'/../vendor/autoload.php');
require_once realpath(dirname(__FILE__) .'/../app/Application.php');


try {
    // Splot Framework and application initialization
    $splot = Splot\Framework\Framework::init();
    $application = $splot->bootApplication(new Application());

    // handling the request
    $request = Splot\Framework\HTTP\Request::createFromGlobals();
    $response = $application->handleRequest($request);

    // rendering the response
    $application->sendResponse($response, $request);
} catch (\Exception $e) {
    MD\Foundation\Debug\Debugger::handleException($e, Splot\Log\LogContainer::exportLogs());
}


/*
 * Symfony2 components to look into:
 * - symfony/console - for commands in framework
 * - symfony/finder - for finding routes, resources, files, etc in framework
 * - symfony/locale - for easy translations in text/trans
 * - symfony/process - for general purpose in framework or wherever else
 */