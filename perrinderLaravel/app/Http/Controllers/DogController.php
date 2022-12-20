<?php

namespace App\Http\Controllers;

use App\Repositories\dogRepository;
use Illuminate\Http\Request;

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

}
