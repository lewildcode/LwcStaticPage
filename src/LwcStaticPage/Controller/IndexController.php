<?php
namespace LwcStaticPage\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction ()
    {
        $route = $this->getEvent()->getRouteMatch();
        $file = $route->getParam('file');
        
        $viewModel = new ViewModel();
        $viewModel->setTemplate($file);
        return $viewModel;
    }
}