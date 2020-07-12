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

      $this->addFlash("success", "Item deleted");

      return $this->redirect($this->generateUrl('item.index'));
    }
}
