<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{

    /**
     * @var PropertyRepository
     */

     private $em;

     public function __construct(PropertyRepository $repository, EntityManagerInterface $em)
     {
         $this->repository = $repository;
         $this->em = $em;
     }

    /**
     * @Route ("/biens", name="property.index")
     */
    public function index(): Response
    {
        return $this->render("property/index.html.twig", [
            'current_menu' => 'properties'
        ]);
    }

    /**
     * @Route("/biens/{id}", name="property.show")
     * @param Property $property
     * @return Response
     */
     public function show(Property $property): Response
     {
         return $this->render('property/show.html.twig', [
             'current_menu' => 'properties',
             'property' => $property,
         ]);
     }

}