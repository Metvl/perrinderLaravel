<?php

namespace App\Http\Controllers;

use App\Repositories\dogRepository;
use Illuminate\Http\Request;
use App\Http\Requests\dogRequest;

class DogController extends Controller
{
    protected dogRepository $dogRepository;

    public function __construct(dogRepository $dogRepository)
    {
        $this->dogRepository = $dogRepository;
    }

    public function getDogs()
    {
        return $this->dogRepository->getDogs();
    }

    public function getDog($id)
    {
        return $this->dogRepository->getDog($id);
    }

    public function postDog(dogRequest $request)
    {
        return $this->dogRepository->postDog($request);
    }

    public function putDog(Request $request, $id)
    {
        return $this->dogRepository->putDog($request, $id);
    }

    public function deleteDog($id)
    {
        return $this->dogRepository->deleteDog($id);
    }

}
