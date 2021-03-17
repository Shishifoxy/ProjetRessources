<?php

namespace App\Controller;

use App\Entity\TypesRessources;
use App\Form\TypesRessourcesType;
use App\Repository\TypesRessourcesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/types/ressources")
 */
class TypesRessourcesController extends AbstractController
{
    /**
     * @Route("/", name="types_ressources_index", methods={"GET"})
     */
    public function index(TypesRessourcesRepository $typesRessourcesRepository): Response
    {
        return $this->render('types_ressources/index.html.twig', [
            'types_ressources' => $typesRessourcesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="types_ressources_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $typesRessource = new TypesRessources();
        $form = $this->createForm(TypesRessourcesType::class, $typesRessource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typesRessource);
            $entityManager->flush();

            return $this->redirectToRoute('types_ressources_index');
        }

        return $this->render('types_ressources/new.html.twig', [
            'types_ressource' => $typesRessource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="types_ressources_show", methods={"GET"})
     */
    public function show(TypesRessources $typesRessource): Response
    {
        return $this->render('types_ressources/show.html.twig', [
            'types_ressource' => $typesRessource,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="types_ressources_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TypesRessources $typesRessource): Response
    {
        $form = $this->createForm(TypesRessourcesType::class, $typesRessource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('types_ressources_index');
        }

        return $this->render('types_ressources/edit.html.twig', [
            'types_ressource' => $typesRessource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="types_ressources_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TypesRessources $typesRessource): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typesRessource->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typesRessource);
            $entityManager->flush();
        }

        return $this->redirectToRoute('types_ressources_index');
    }
}
