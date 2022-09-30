<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'phone' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials()
    {
        // The form field for providing username or password
        // have name of "username", however, in order to support
        // logging users in with both (username and email)
        // we have to check if user has entered one or another
        $phone = $this->get('phone');

        if ($this->isEmail($phone)) {
            return [
                'email' => $phone,
                'password' => $this->get('password')
            ];
        }

        return $this->only('phone', 'password');
    }

    private function isEmail($param)
    {
        $factory = $this->container->make(ValidationFactory::class);

        return ! $factory->make(
            ['phone' => $param],
            ['phone' => 'email']
        )->fails();
    }
}
