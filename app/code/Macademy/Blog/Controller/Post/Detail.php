<?php declare(strict_types=1);

namespace Macademy\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;
use Magento\Framework\Session\SessionManagerInterface as Session;

class Detail implements HttpGetActionInterface
{

    public function __construct(
        private Session $session,
    ) {}
    
    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface|ResponseInterface
     * @throws NotFoundException
     */
    public function execute()
    {
        echo "<pre>";
        var_dump($this->session->getData());
        die('Blog post detail');
    }
}
