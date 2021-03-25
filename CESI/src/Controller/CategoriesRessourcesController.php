<?php

namespace App\Controller;

use App\Entity\CategoriesRessources;
use App\Form\CategoriesRessources1Type;
use App\Form\CategoriesRessourcesType;
use App\Repository\CategoriesRessourcesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categories/ressources")
 */
class CategoriesRessourcesController extends AbstractController
{
    /**
     * @Route("/", name="categories_ressources_index", methods={"GET"})
     */
    public function index(CategoriesRessourcesRepository $categoriesRessourcesRepository): Response
    {
        return $this->render('categories_ressources/index.html.twig', [
            'categories_ressources' => $categoriesRessourcesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="categories_ressources_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $categoriesRessource = new CategoriesRessources();
        $form = $this->createForm(CategoriesRessourcesType::class, $categoriesRessource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categoriesRessource);
            $entityManager->flush();

            return $this->redirectToRoute('categories_ressources_index');
        }

        return $this->render('categories_ressources/new.html.twig', [
            'categories_ressource' => $categoriesRessource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categories_ressources_show", methods={"GET"})
     */
    public function show(CategoriesRessources $categoriesRessource): Response
    {
        return $this->render('categories_ressources/show.html.twig', [
            'categories_ressource' => $categoriesRessource,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="categories_ressources_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CategoriesRessources $categoriesRessource): Response
    {
        $form = $this->createForm(CategoriesRessourcesType::class, $categoriesRessource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categories_ressources_index');
        }

        return $this->render('categories_ressources/edit.html.twig', [
            'categories_ressource' => $categoriesRessource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categories_ressources_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CategoriesRessources $categoriesRessource): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categoriesRessource->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categoriesRessource);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categories_ressources_index');
    }
}
