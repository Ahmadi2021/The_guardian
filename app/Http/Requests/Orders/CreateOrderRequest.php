<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->hasRole('customer');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>['required', 'min:5', 'max:250'],
            'description'=>['required', 'min:200'],
            'budget'=>['required', 'numeric', 'min:0'],
            'deadline'=>['required', 'date', 'after_or_equal:start_date'],
            'document'=>['required', 'file', 'mimes:pdf,txt,docx,doc','max:2048']
        ];
    }
}
