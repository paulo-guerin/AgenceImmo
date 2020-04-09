<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Property;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
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
                'contactForm' => $form->createView(),
            ]
        );
    }

}