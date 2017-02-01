<?php

namespace Subspace\CustomerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:signup.html.twig');
    }


    /**
     * Matches /locations exactly
     *
     * @Route("/locations")
     */

    public function locationsAction(Request $request)
    {
        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:locations.html.twig');
    }

    /**
     * Matches /tour exactly
     *
     * @Route("/tour")
     */

    public function tourAction(Request $request)
    {
        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:tour.html.twig');
    }

    /**
     * Matches /pricing exactly
     *
     * @Route("/pricing")
     */

    public function pricingAction(Request $request)
    {
        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:pricing.html.twig');
    }

    /**
     * Matches /login exactly
     *
     * @Route("/login")
     */

    public function loginAction(Request $request)
    {
        // Load the template
        return $this->render('SubspaceCustomerBundle:FrontEnd:login.html.twig');
    }
}
