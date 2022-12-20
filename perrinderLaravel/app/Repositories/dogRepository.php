<?php
namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\dog;

class dogRepository
{
    public function getDogs()
    {
        $dog = dog::all();
        return response(["dogs" => $dog], Response::HTTP_OK);
    }
    public function getDog($id)
    {
        $dog = dog::find($id);
        if (is_null($dog)) {
            return response(["message" => "Dog not found"], Response::HTTP_NOT_FOUND);
        }
        return response(["dog" => $dog], Response::HTTP_OK);
    }

}
