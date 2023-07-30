<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ItemService
{

    public function validate($data)
    {
        $rules = [
            'uuid' => 'required|max:255|unique:items',
            'name' => 'required|max:255',
            'amount' => 'required',
            'price' => 'required',
        ];
        $validator = Validator::make($data, $rules);

        if(!empty($validator->errors()->all())) {
            return ['status' => 'fail','message' => $validator->errors()->all()[0]];
        }
        return  ['status' => 'success'];
    }

}
