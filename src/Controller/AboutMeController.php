<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Module\AboutMe\App\HobbyService;
use App\View\AboutMe\AboutMePageView;

class AboutMeController extends AbstractController
{
    public function aboutMePage(HobbyService $hs): Response
    {
        $view = new AboutMePageView($hs->getHobbies());
        return $this->render('homepage/index.html.twig', $view->buildParams());
    }

    public function updateImages(): Response
    {
        return new Response(
            'OK',
            Response::HTTP_OK,
            ['Content-Type' => 'text/plain']
        );
    }
}
