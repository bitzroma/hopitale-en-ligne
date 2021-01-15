<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpecialisationController extends AbstractController
{
    /**
     * @Route("/immunologie", name="immunologie")
     */
    public function index(): Response
    {
        return $this->render('specialisation/immunologie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }

    /**
     * @Route("/anesthesiologie", name="anesthesiologie")
     */
    public function anesthesiologie(): Response
    {
        return $this->render('specialisation/anesthesiologie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    /**
     * @Route("/cardiologie", name="cardiologie")
     */
    public function cardiologie(): Response
    {
        return $this->render('specialisation/cardiologie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    /**
     * @Route("/chirurgie", name="chirurgie")
     */
    public function chirurgie(): Response
    {
        return $this->render('specialisation/chirurgie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    /**
     * @Route("/dermatologie", name="dermatologie")
     */
    public function dermatologie(): Response
    {
        return $this->render('specialisation/dermatologie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    /**
     * @Route("/gynecologie", name="gynecologie")
     */
    public function gynecologie(): Response
    {
        return $this->render('specialisation/gynecologie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    /**
     * @Route("/neurologie", name="neurologie")
     */
    public function neurologie(): Response
    {
        return $this->render('specialisation/neurologie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    /**
     * @Route("/urologie", name="urologie")
     */
    public function urologie(): Response
    {
        return $this->render('specialisation/urologie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    /**
     * @Route("/psychiatrie", name="psychiatrie")
     */
    public function psychiatrie(): Response
    {
        return $this->render('specialisation/dermatologie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
       /**
     * @Route("/ophtalmologie", name="ophtalmologie")
     */
    public function ophtalmologie(): Response
    {
        return $this->render('specialisation/ophtalmologie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    /**
     * @Route("/medecinegenerale", name="medecine_generale")
     */
    public function medecinegenerale(): Response
    {
        return $this->render('specialisation/medecinegenerale.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    /**
     * @Route("/infectiologie", name="infectiologie")
     */
    public function infectiologie(): Response
    {
        return $this->render('specialisation/infectiologie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    /**
     * @Route("/radiotherapie", name="radiotherapie")
     */
    public function radiotherapie(): Response
    {
        return $this->render('specialisation/radiotherapie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
     /**
     * @Route("/pediatrie", name="pediatrie")
     */
    public function pediatrie(): Response
    {
        return $this->render('specialisation/pediatrie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    /**
     * @Route("/odontologie", name="odontologie")
     */
    public function odontologie(): Response
    {
        return $this->render('specialisation/odontologie.html.twig', [
            'controller_name' => 'SpecialisationController',
        ]);
    }
    
}
