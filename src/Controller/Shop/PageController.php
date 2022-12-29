<?php

namespace Qamar\SyliusCmsPlugin\Controller\Shop;

use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PageController extends AbstractController
{
    public function __construct(private EntityRepository $repository)
    {
    }

    public function __invoke(string $slug): Response
    {
        $page = $this->repository->findOneBy(['slug' => $slug]);
        if (null === $page || !$page->getEnabled()) {
            return new Response('', Response::HTTP_NOT_FOUND);
        }

        return $this->render('@QamarSyliusCmsPlugin/shop/page/show.html.twig', compact('page'));
    }
}
