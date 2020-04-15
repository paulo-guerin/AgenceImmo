<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ContactController extends AbstractController
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }
    
    public function contactShow(Contact $contact)
    {       
        $message = (new \Swift_Message('AgenceImmo'))
            ->setFrom($contact->getEmail())
            ->setTo('florian.vidal@lapiscine.pro')
            ->setReplyTo($contact->getEmail())
            ->setBody($this->renderView('emails/model2.html.twig', [
                'contact' => $contact,
            ]), 'text/html')
        ;
        $this->mailer->send($message);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, \Swift_Mailer $mailer)
    {       
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $this->addFlash('success', 'Votre mail a bien été envoyé, merci. Nous y répondrons dès que possible.');

            $message = (new \Swift_Message('AgenceImmo'))
                ->setFrom($contact->getEmail())
                ->setTo('florian.vidal@lapiscine.pro')
                ->setReplyTo($contact->getEmail())
                ->setBody($this->renderView('emails/model2.html.twig', [
                    'contact' => $contact,
                ]), 'text/html')
            ;
    
            $mailer->send($message);
            return $this->redirectToRoute('home');
        }

        return $this->render('emails/contact.html.twig',
            [
                'current_menu'  => 'contact',
                'contactForm' => $form->createView(),
            ]
        );
    }

}