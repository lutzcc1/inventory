<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Item;
use App\Repository\ItemRepository;
use App\Form\ItemFormType;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ItemRepository $itemRepository) {
        $item = new Item();
        $items = $itemRepository->findAll();
        $form = $this->createForm(ItemFormType::class, $item);

        return $this->render('item/index.html.twig', [
            'items' => $items,
            'form' => $form->createView()
        ]);
    }
}
