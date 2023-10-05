<?php

namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    private $repo;

    public function __construct(PropertyRepository $repo)
    {
        $this->repo = $repo;
    }

    #[Route('/biens', name: 'app_property.index')]
    public function index(): Response
    {
        return $this->render('properties/index.html.twig', [
            'current_menu' => 'properties'
        ]);
    }

    #[Route('/bien/{slug}-{id}', name: 'app_property.show', requirements: ["slug" => "[a-z0-9\-]*"])]
    public function show($slug, $id): Response
    {
        $property = $this->repo->find($id);

        if ($property->getSlug() !== $slug) {
            return $this->redirectToRoute('app_property.show', [
                'id' => $property->getId(),
                'slug' => $property->getSlug()
            ], 301);
        }

        return $this->render('properties/show.html.twig', [
            'property' => $property,
            'current_menu' => 'properties'
        ]);
    }

    /**
     * @Route("/biens/{slug}-{id}", name="property.show", requirements={"slug": "[a-z0-9\-]*"})
     */
    // public function show(Property $property, string $slug): Response
    // {
    //     if ($property->getSlug() !== $slug) {
    //         return $this->redirectToRoute('property.show', [
    //             'id' => $property->getId(),
    //             'slug' => $property->getSlug()
    //         ], 301);
    //     }
    //     return $this->render('property/show.html.twig', [
    //         'property' => $property,
    //         'current_menu' => 'properties'
    //     ]);
    // }

}
