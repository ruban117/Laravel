<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
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
            'username'=>'required',
            'useremail'=>'required|email',
            'userage'=>'required|numeric|min:18',
            'userpass'=>'required|alpha_num',
            'usercity'=>'required'
        ];
    }

    public function messages(){
        return [
            "username.requried"=>'Username Is Requried'
        ];
    }

    public function attributes(){
        return[
            'username'=>'User Name'
        ];
    }

    protected function prepareForValidation():void{
        $this->merge([
            'username'=>strtoupper($this->username),
            'username'=>Str::slug($this->username)
        ]);
    }

    protected $stopOnFirstFailure=true;
}
