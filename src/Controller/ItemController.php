<?php

namespace App\Controller;

use App\Entity\Item;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ItemRepository;
use App\Form\ItemFormType;

/**
     * @Route("/item", name="item.")
     */
class ItemController extends AbstractController
{
    /**
     * @Route("", name="index")
     */
    public function index(ItemRepository $itemRepository)
    {
        $item = new Item();
        $items = $itemRepository->findAll();
        $form = $this->createForm(ItemFormType::class, $item);

        if ($form->isSubmitted() && $form->isValid()) {
          dump($item);
        }

        return $this->render('item/index.html.twig', [
            'items' => $items,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/create", name="create")
     * @return Response
     */
    public function create(Request $request) {
        $item = new Item();

        $form = $this->createForm(ItemFormType::class, $item);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $em->persist($item);
        $em->flush();

        return $this->redirect($this->generateUrl('item.index'));
    }

    /**
    *@Route("/delete/{id}", name="delete")
    */
    public function delete(Item $item) {
      $em = $this->getDoctrine()->getManager();
      $em->remove($item);
      $em->flush();

      return $this->redirect($this->generateUrl('item.index'));
    }
}
