<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class interactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id_interested_dog' => 'required|integer',
            'id_candidate_dog' => 'required|integer',
            'preference' => 'in:Accepted, Declined',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'integer' => 'The :attribute field must be an integer.',
            'in' => 'The :attribute field must be Accepted or Declined.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json($validator->errors()->all(), Response::HTTP_BAD_REQUEST)
        );
    }
}
