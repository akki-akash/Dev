<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
		$viewModel = new ViewModel();

		$viewModel->setTemplate('/application/index/index');
		//echo "hello this is demo";
		//exit;
		return $viewModel;
		
    }
	
	
	
	public function index1action()
	{
		 if($this->getRequest()->isPost()) {
      
	  // Retrieve form data from POST variables
	  $data = $this->params()->fromPost();     
	  
	  // ... Do something with the data ...
	  print_r($data);	  
    } 
   
		return new ViewModel([
          'hello' ]);
		
	}
	
	
	
	
	
	
	
}

