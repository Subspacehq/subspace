<?php

namespace Subspace\CustomerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Spaces;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        // Get the global Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        // Load Spaces Doctrine Reporitory 
        $Messages = $em->getRepository('SubspaceCustomerBundle:Messages');
        // Fake User ID for now
        $user_id = 1;
        // Get messages from Database
        $NewMessages = $Messages->findUserMessages($user_id);  

        // Add sign-up form
        $form = $this->createFormBuilder()
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Post'))
            ->getForm();

        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:signup.html.twig', array('messages' => $NewMessages, 'form' => $form->createView()));
    }


    /**
     * Matches /locations exactly
     *
     * @Route("/locations")
     */

    public function locationsAction(Request $request)
    {
        // Get the global Doctrine Manager
        // Get the global Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        // Load Spaces Doctrine Reporitory 
        $Messages = $em->getRepository('SubspaceCustomerBundle:Messages');
        // Fake User ID for now
        $user_id = 1;
        // Get messages from Database
        $NewMessages = $Messages->findUserMessages($user_id);  
        // Load Spaces Doctrine Reporitory 
        $SpacesRepository = $em->getRepository('SubspaceCustomerBundle:Spaces');
        // Query to get all spaces
        $spaces = $SpacesRepository->findAllSpaces(); 

        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:locations.html.twig', array('messages' => $NewMessages, 'spaces' => $spaces));
    }

    /**
     * Matches /tour exactly
     *
     * @Route("/tour")
     */

    public function tourAction(Request $request)
    {
        // Get the global Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        // Load Spaces Doctrine Reporitory 
        $Messages = $em->getRepository('SubspaceCustomerBundle:Messages');
        // Fake User ID for now
        $user_id = 1;
        // Get messages from Database
        $NewMessages = $Messages->findUserMessages($user_id);  
        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:tour.html.twig', array('messages' => $NewMessages));
    }

    /**
     * Matches /pricing exactly
     *
     * @Route("/pricing")
     */

    public function pricingAction(Request $request)
    {
        // Get the global Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        // Load Spaces Doctrine Reporitory 
        $Messages = $em->getRepository('SubspaceCustomerBundle:Messages');
        // Fake User ID for now
        $user_id = 1;
        // Get messages from Database
        $NewMessages = $Messages->findUserMessages($user_id);         
        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:pricing.html.twig', array('messages' => $NewMessages));
    }

    /**
     * Matches /forgottenpassword exactly
     *
     * @Route("/forgottenpassword")
     */

    public function forgottenpasswordAction(Request $request)
    {
        // Get the global Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        // Load Spaces Doctrine Reporitory 
        $Messages = $em->getRepository('SubspaceCustomerBundle:Messages');
        // Fake User ID for now
        $user_id = 1;
        // Get messages from Database
        $NewMessages = $Messages->findUserMessages($user_id); 
        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:forgottenpassword.html.twig', array('messages' => $NewMessages));
    }

    /**
     * Matches /resetpassword exactly
     *
     * @Route("/resetpassword")
     */
    public function resetpasswordAction(Request $request)
    {
        // Get the global Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        // Load Spaces Doctrine Reporitory 
        $Messages = $em->getRepository('SubspaceCustomerBundle:Messages');
        // Fake User ID for now
        $user_id = 1;
        // Get messages from Database
        $NewMessages = $Messages->findUserMessages($user_id); 
        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:resetpassword.html.twig', array('messages' => $NewMessages));
    }

    /**
     * Matches /profile exactly
     *
     * @Route("/profile")
     */
    public function profileAction(Request $request)
    {
        // Get the global Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        // Load Spaces Doctrine Reporitory 
        $Messages = $em->getRepository('SubspaceCustomerBundle:Messages');
        // Fake User ID for now
        $user_id = 1;
        // Get messages from Database
        $NewMessages = $Messages->findUserMessages($user_id); 
        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:profile.html.twig', array('messages' => $NewMessages));
    }
}
