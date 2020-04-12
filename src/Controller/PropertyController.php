<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Property;
use App\Entity\PropertySearch;
use App\Form\ContactType;
use App\Form\PropertySearchType;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        // Créer une entité qui représenter notre recherche
        $search = new PropertySearch();

        // Créer un formulaire
        $form = $this->createForm(PropertySearchType::class, $search);

        // Gérer le traitement dans le controller
        $form->handleRequest($request);

        $properties = $paginator->paginate(
            $this->repository->findAllVisibleQuery($search),
            $request->query->getInt('page', 1),
            12
        );
        return $this->render("property/index.html.twig", [
            'current_menu'  => 'properties',
            'properties'    => $properties,
            'form'          => $form->createView(),
        ]);
    }

    /**
     * @Route("/biens/{slug}-{id}", name="property.show", requirements={"slug": "[a-z0-9\-]*"})
     * @param Property $property
     * @return Response
     */
    public function show(Property $property, string $slug, Request $request, ContactController $contactController, \Swift_Mailer $mailer): Response
    {
        if ($property->getSlug() !== $slug) {
            return $this->redirectToRoute('property.show', [
                'id'    => $property->getId(),
                'slug'  => $property->getSlug(),
            ], 301);
        }

        // Formulaire de contact lié à un bien
        $contact = new Contact();
        $contact->setProperty($property);
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contactController->contact($request, $mailer);
            $this->addFlash('success', 'Votre mail a bien été envoyé, merci. Nous y répondrons dès que possible.');
            return $this->redirectToRoute('property.show', [
                'id'    => $property->getId(),
                'slug'  => $property->getSlug(),
            ]);
        }

        return $this->render('property/show.html.twig', [
            'current_menu' => 'properties',
            'property'     => $property,
            'form'         => $form->createView(),
        ]);
    }

}