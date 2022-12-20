<?php
namespace App\Repositories;

// use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\dog;
// use App\Http\Requests\dogRequest;

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

    public function postDog($request)
    {
        $dog = dog::create([
            'name' => $request->name,
            'img' => $request->img,
            'description' => $request->description,
        ]);
        return response()->json(["dog" => $dog], Response::HTTP_CREATED);
    }

    public function putDog($request, $id)
    {
        $dog = dog::find($id);
        if (is_null($dog)) {
            return response(["message" => "Dog not found"], Response::HTTP_NOT_FOUND);
        }
        $dog->update($request->all());
        return response(["dog" => $dog], Response::HTTP_OK);
    }
    // public function deleteDog($id)
    // {
    //     $dog = dog::find($id);
    //     if (is_null($dog)) {
    //         return response(["message" => "Dog not found"], Response::HTTP_NOT_FOUND);
    //     }
    //     $dog->delete();
    //     return response(null, Response::HTTP_NO_CONTENT);
    // }
}
