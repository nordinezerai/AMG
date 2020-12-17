<?php

namespace App\Controller;


use App\Form\AMGType;
use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AmgController extends AbstractController
{
    /**
     * @Route("/creation_amg", name="amg.create")
     * @param ClientRepository $clientRepository
     * @return Response
     */
    public function create(ClientRepository $clientRepository): Response
    {
        $clients = $clientRepository->findAll();

        $form = $this->createForm(AMGType::class);

        $form->add('clients', ChoiceType::class
            , array('choices' => $clients,
                'choice_label' => 'sigle_nom_commercial',
                'placeholder' => 'Choisir un client',
                'label' => 'Client : '));

        return $this->render('pages/amg.create.html.twig',[
            'form' => $form->createView()
        ]);
    }
}