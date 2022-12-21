<?php
namespace App\Repositories;

use Illuminate\Http\Response;
use App\Models\dog;
use App\Models\interaction;

class interactionRepository
{
    public function getInteraction()
    {
        $interaction = interaction::all();
        return response()->json(["interactions" => $interaction], Response::HTTP_OK);
    }

    public function getInteractionId($id)
    {
        $interaction = interaction::where('dog_id', $id)->get();
        return response()->json(["interactions" => $interaction], Response::HTTP_OK);
    }

    public function postInteraction($request)
    {
        $interaction = interaction::create([
            'id_interested_dog' => $request->id_interested_dog,
            'id_candidate_dog' => $request->id_candidate_dog,
            'preference' => $request->preference,
        ]);
        return response()->json(["interaction" => $interaction], Response::HTTP_CREATED);
    }
}

