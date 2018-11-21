<?php
namespace Akash;
use Akash\Controller\WriteController;
use Akash\Form\PostForm;
use Akash\Model\PostCommandInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Akash\Model\PostRepositeryInterface;

class WriteController implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
    	$formManager=$container->get('FromElementManager');

    	return new WriteController(
    		$container->get(PostCommandInterface::class);
    		$formManager->get(PostForm::class);
    		$container->get(PostRepositeryInterface);
    	);
    }
} 