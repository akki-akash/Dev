<?php
/**
 * Created by Damien G. (damien.galicher@gmail.com)
 * Date: 08/08/2016 - Time: 17:45
 */

namespace Admin\Controller;


use Admin\Model\PostRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Helper\ViewModel;
    use Zend\Paginator\Paginator;
use Zend\ServiceManager\Factory\InvokableFactory;

class ListController extends AbstractActionController
{

    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @return array
     */
    public function indexAction()
    {
        return [
            'posts' => $this->postRepository->findAllPosts(),
        ];
    }
    
    public function detailAction()
    {
        $id = $this->params()->fromRoute('id');

        try {
            $post = $this->postRepository->findPost($id);
        } catch (\InvalidArgumentException $ex) {
            return $this->redirect()->toRoute('admin');
        }

        return [
            'post' => $post,
        ];
    }
}