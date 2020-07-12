<?php

namespace App\Controller;

use App\Entity\Item;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ItemRepository;

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

        $items = $itemRepository->findAll();

        dump($items);

        return $this->render('item/index.html.twig', [
            'controller_name' => 'ItemController',
        ]);
    }

    /**
     * @Route("/create", name="create")
     * @return Response
     */
    public function create(Request $request) {
        $item = new Item();

        $item->setQuantity(5);
        $item->setPrice(12);
        $item->setName('Primer item');
        $item->setDescription('Im testing the DB...');

        $em = $this->getDoctrine()->getManager();
        $em->persist($item);
        $em->flush();

        return new Response('Item was created');
    }
}
