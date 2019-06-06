<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    private string $tst;

    /**
     * @Route("/", name="default")
     */
    public function index(): ResponseAlias
    {
        $this->tst = 'asdf';
        dump($this->tst);
        $this->tst = 1;

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
