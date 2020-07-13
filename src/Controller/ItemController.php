<?php

namespace App\Controller;

use App\Entity\Item;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Form\ItemFormType;

/**
     * @Route("/item", name="item.")
     */
class ItemController extends AbstractController
{
    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request) {
        $item = new Item();

        $form = $this->createForm(ItemFormType::class, $item);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $em->persist($item);
        $em->flush();

        return $this->redirect($this->generateUrl('home'));
    }

    /**
    *@Route("/delete/{id}", name="delete")
    */
    public function delete(Item $item) {
      $em = $this->getDoctrine()->getManager();
      $em->remove($item);
      $em->flush();

      return $this->redirect($this->generateUrl('home'));
    }
}
