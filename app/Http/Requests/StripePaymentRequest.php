<?php

namespace App\Http\Requests;

use App\Rules\ReCaptcha;
use Illuminate\Foundation\Http\FormRequest;

class StripePaymentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'card_name' => 'required|string|max:255',
            'line1' => 'required|string|max:255',
            'line2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'currency' => 'required|string|max:255',
            'card_number' => 'required|numeric|digits_between:16,20',
            'exp_month' => 'required|numeric|min:1|max:12|digits_between:1,2',
            'exp_year' => 'required|numeric|digits:4|min:'.date('Y').'',
            'cvc' => 'required|numeric|digits_between:3,4',
            'zip' => 'required|numeric|digits_between:5,6',
            'amount' => 'required|numeric|min:1',
            'email' => 'required|string|max:255|email',
            'mobile' => 'required|numeric|digits_between:10,14',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ];
    }
}
