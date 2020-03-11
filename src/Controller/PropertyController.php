<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{

    /**
     * @Route ("/biens", name="property.index")
     */
    public function index(PropertyRepository $repository)
    {
        $property = new Property();
        $property->setTitle('Mon nouveau bien')
            ->setPrice(200000)
            ->setRooms(4)
            ->setBedrooms(3)
            ->setDescription('Une petite description')
            ->setSurface(60)
            ->setFloor(4)
            ->setHeat(1)
            ->setCity('Montpellier')
            ->setAddress('15 rue de démo')
            ->setPostalCode('34000');

        return $this->render("property/index.html.twig", [
            'current_menu' => 'properties'
        ]);
    }

}