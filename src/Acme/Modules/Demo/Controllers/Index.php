<?php
namespace Acme\Modules\Demo\Controllers;

use Splot\Framework\HTTP\Request;
use Splot\Framework\Controller\AbstractController;

use Splot\TwigModule\View\View;

class Index extends AbstractController
{

    public function respond() {
        return new View('AcmeDemoModule:Index:index.html.twig', array(
            'message' => 'Hello World!'
        ));
    }

}