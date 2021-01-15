<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
//use App\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
//use App\Entity\Maladie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function list(): Response
    {
        return $this->render('user/home.html.twig');
    }

     /**
     * @Route("/patient", name="espace_patient")
     */
    public function bureau(): Response
    {
        return $this->render('user/espacepatient.html.twig');
    }
     /**
     * @Route("/assistance", name="espace_assistance")
     */
    public function assistance(): Response
    {
        return $this->render('user/assistance.html.twig');
    }
    /**
     * @Route("/covid-19", name="espace_covid_19")
     */
    public function covid(): Response
    {
        return $this->render('user/covid.html.twig');
    }
    

    
    
    

    

}

?>