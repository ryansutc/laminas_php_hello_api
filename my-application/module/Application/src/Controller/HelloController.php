<?php
namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

// Create an action controlller
class HelloController extends AbstractActionController
{
    public function worldAction()
    {
        // Get "message" from the query params
        $message = $this->params()->fromQuery('message', 'Hello, World!');

        return new ViewModel([
            'message' => $message,
        ]);
    }
}