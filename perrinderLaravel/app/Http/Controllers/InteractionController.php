<?php

namespace App\Http\Controllers;

use App\Repositories\interactionRepository;
use Illuminate\Http\Request;
use App\Http\Requests\interactionRequest;

class InteractionController extends Controller
{
    protected interactionRepository $interactionRepository;

    public function __construct(interactionRepository $interactionRepository)
    {
        $this->interactionRepository = $interactionRepository;
    }

    public function getInteraction()
    {
        return $this->interactionRepository->getInteraction();
    }

    public function getInteractionId($id)
    {
        return $this->interactionRepository->getInteractionId($id);
    }

    public function postInteraction(interactionRequest $request)
    {
        return $this->interactionRepository->postInteraction($request);
    }
}
