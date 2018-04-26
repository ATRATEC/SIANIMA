<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public static $messages = [
                                'required' => 'Campo :attribute obrigatório.',
                                'unique' => 'Informação do Campo :attribute já existe na base.',
                                'confirmed' => 'A confirmação da senha não corresponde.',
                                'numeric' => 'Campo :attribute deve ser do tipo numerico.',
                                'max' => 'Campo :attribute não pode ser maior que :max caracteres.',
                                'after' => 'Data informada deve ser maior que data inicial',
                                'date' => 'Data informada no campo :attribute é invalída',
                              ];
}
