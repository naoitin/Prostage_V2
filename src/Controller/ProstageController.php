<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProstageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('ProStage/accueil/index.html.twig');
    }

    /**
     * @Route("/entreprise", name="entreprise")
     */
    public function indexEntreprise()
    {
        return $this->render('ProStage/entreprise/index.html.twig', [
            'controller_name' => 'EntrepriseController',
        ]);
    }

    /**
     * @Route("/formations", name="formations")
     */
    public function indexFormation()
    {
        return $this->render('ProStage/formations/index.html.twig', [
            'controller_name' => 'formationsController',
        ]);
    }

    /**
     * @Route("/stages/{id}", name="stages")
     */
    public function indexStages($id)
    {
        return $this->render('ProStage/stages/index.html.twig', 
        ['idTransmise' => $id,]
        );
    }


}
