<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 12345567,
            'Name' => 'Thoriq Aziz M',
            'Phone' => '088218682879',
            'Class' => 'XII RPL 6'
        ];
    }
}
