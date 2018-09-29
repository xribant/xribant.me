<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Services\Mailer;


class CoreController extends AbstractController
{
	/**
	* @Route("/", name="home")
	*/
	public function indexAction(Request $request, Mailer $mailer)
	{
		$form = $this->createFormBuilder()
        	->add('name', TextType::class, [
        		'label' => 'name',
                'required' => true,
            ])
            ->add('email', EmailType::class, [
                'label' => 'email',
                'required' => true,
            ])
            ->add('message', TextareaType::class, [
                'label' => 'message',
                'required' => true,
            ])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
        	$data = $form->getData();

        	// on utilise le service Mailer créé précédemment
            $bodyMail = $mailer->createBodyMail('emails/email.html.twig', [
                'name' => $data['name'],
                'email' => $data['email'],
                'message' => $data['message']
            ]);

            $mailer->sendMessage('contact@xribant.me', 'xribant@gmail.com' ,'Contact From Personal Website', $bodyMail);
            $request->getSession()->getFlashBag()->add('notice', "Merci, votre message a bien été envoyé.");

            return $this->redirectToRoute('home');
        }

        return $this->render('base.html.twig', array(
            'form' => $form->createView(),
        ));
	}

}