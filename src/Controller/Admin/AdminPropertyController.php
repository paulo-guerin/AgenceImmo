<?php

namespace App\Controller\Admin;

use App\Entity\Property;
use App\Form\PropertyType;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPropertyController extends AbstractController{

    /**
     * @var PropertyRepository
     */
    private $repository;

    public function __construct(PropertyRepository $repository, EntityManagerInterface $em){
        $this->em = $em;
        $this->repository = $repository;

    }

    /**
    * @Route("/admin/property/index", name="admin.property.index")
    */
    public function index(){

        $properties = $this->repository->findAll();
        return $this->render("admin/property/index.html.twig", [
            "properties" => $properties,
        ]);

    }

    /**
    * @Route("/admin/property/create", name="admin.property.create")
    */
    public function new(Request $request){

        $property = new Property;
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $this->em->persist($property);
            $this->em->flush();
            $this->addFlash("success", "Le bien a été crée");
            return $this->redirectToRoute("admin.property.index");
        }
        return $this->render("admin/property/new.html.twig", [
            "property" => $property,
            "form" => $form->createView(),
        ]);
    }

    /**
    * @Route("/admin/property/edit/{id}", name="admin.property.edit")
    */
    public function edit(Property $property, Request $request){
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            $this->addFlash("success", "Le bien a été modifié");
            return $this->redirectToRoute("admin.property.index");
        }
        return $this->render("admin/property/edit.html.twig", [
            "property" => $property,
            "form" => $form->createView(),
        ]);

    }

    /**
    * @Route("/admin/property/delete/{id}", name="admin.property.delete")
    */
    public function delete(Property $property, Request $request){
        if($this->isCsrfTokenValid('delete'.$property->getId(), $request->get('_token'))){
            $this->em->remove($property);
            $this->em->flush();
            $this->addFlash("success", "Le bien a été supprimé");
        }
        return $this->redirectToRoute("admin.property.index");
    }

}