<?php

namespace App\Http\Requests\Websystem;


use Illuminate\Support\Facades\Validator;

class ConfigGeneralRequest
{
    /**
     * Validate and create a newly registered customer.
     *
     * @param  array<string, string>  $input
     */
    public function validate(array $input)
    {
        Validator::make($input, [
            'app_url' => ['required'],
        ])->validate();
    }
}
