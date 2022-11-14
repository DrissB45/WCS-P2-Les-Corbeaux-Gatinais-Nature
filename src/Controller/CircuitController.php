<?php

namespace App\Controller;

use App\Model\CircuitManager;

class CircuitController extends AbstractController
{
    /**
     * Display circuits page
     */
    public function index(): string
    {
        $circuitManager = new CircuitManager();
        $circuits = $circuitManager->selectAll();

        return $this->twig->render('Circuits/chooseCircuits.html.twig', ['circuits' => $circuits]);
    }

    public function show(int $id): string
    {
        $circuitManager = new CircuitManager();
        $circuit = $circuitManager->selectOneById($id);

        return $this->twig->render('Circuits/show.html.twig', ['circuit' => $circuit]);
    }

    public function indexCircuitsAdmin(): string
    {
        $circuitManager = new CircuitManager();
        $circuits = $circuitManager->selectAll('title');

        return $this->twig->render('Circuits/index-circuits.html.twig', ['circuits' => $circuits]);
    }
}
