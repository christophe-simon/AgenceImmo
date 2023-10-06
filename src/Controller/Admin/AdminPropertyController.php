<?php

namespace App\Controller\Admin;

use App\Entity\Property;
use App\Form\PropertyType;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminPropertyController extends AbstractController
{
    private $repo;
    private $em;

    public function __construct(PropertyRepository $repo, EntityManagerInterface $em)
    {
        $this->repo = $repo;
        $this->em = $em;
    }

    #[Route('/admin', name: 'app.admin.property.index')]
    public function index(): Response
    {
        $properties = $this->repo->findAll();

        return $this->render('admin/properties/index.html.twig', compact('properties'));
    }

    #[Route('/admin/property/create', name: 'app.admin.property.new')]
    public function new(Request $request)
    {
        $property = new Property();
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($property);
            $this->em->flush();
            $this->addFlash('success', 'Bien créé avec succès');
            return $this->redirectToRoute('app.admin.property.index');
        }

        return $this->render('admin/properties/new.html.twig', [
            'property' => $property,
            'form'     => $form->createView()
        ]);
    }

    #[Route('/admin/property/{id}', name: 'app.admin.property.delete', methods:["DELETE"])]
    public function delete(Property $property, Request $request)
    {
        // if ($this->isCsrfTokenValid('delete' . $property->getId(), $request->get('_token'))) {
            $this->em->remove($property);
            $this->em->flush();
            $this->addFlash('success', 'Bien supprimé avec succès');
            // dump('Condition remplie');
        // }
        return $this->redirectToRoute('app.admin.property.index');
    }

    #[Route('/admin/property/{id}', name: 'app.admin.property.edit', methods:["GET", "POST"])]
    public function edit(Property $property, Request $request)
    {
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash('success', 'Bien modifié avec succès');
            return $this->redirectToRoute('app.admin.property.index');
        }

        return $this->render('admin/properties/edit.html.twig', [
            'property' => $property,
            'form'     => $form->createView()
        ]);
    }


}
