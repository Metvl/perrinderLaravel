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

    public function putDog($request)
    {
        try{
            $dogs = dog::findorFail($request->id);
            isset($request->name) && $dogs->name = $request->name;
            $dogs = dog::where('id', $request->id)
                ->update([
                    "name" => $request->name,
            ]);
            isset($request->image) && $dogs->img = $request->image;
            $dogs = dog::where('id', $request->id)
            ->update([
                "img" => $request->img,
            ]);
            isset($request->descript) && $dogs->description = $request->descript;
            $dogs = dog::where('id', $request->id)
            ->update([
                "description" => $request->description,
            ]);
            return response()->json(["dogs"=>$dogs], Response::HTTP_OK);
            }catch (Exception $e) {
                return response()->json(["error" => $e], Response::HTTP_BAD_REQUEST);
            }
    }
    public function deleteDog($request)
    {
        $dog = dog::find($request);
        if (is_null($dog)) {
            return response(["message" => "Dog not found"], Response::HTTP_NOT_FOUND);
        }
        $dog->delete();
        return response()->json(["dogs"=>$dog], Response::HTTP_OK);
    }
}
