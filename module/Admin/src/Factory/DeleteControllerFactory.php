<?php
/**
 * Created by Damien G. (damien.galicher@gmail.com)
 * Date: 08/08/2016 - Time: 20:02
 */

namespace Admin\Factory;

use Admin\Controller\DeleteController;
use Admin\Model\PostCommandInterface;
use Admin\Model\PostRepositoryInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class DeleteControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return DeleteController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new DeleteController(
            $container->get(PostCommandInterface::class),
            $container->get(PostRepositoryInterface::class)
        );
    }
}