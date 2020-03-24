<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {

        $variavel = "Sistema de grupo de investimento";

        return view('welcome', [
            'title' => $variavel
        ]);
    }
    
    public function cadastrar()
    {
        echo "Tela de Cadastro";
    }

    /*
    * Method to user login VIEW
    * --------------------------------------------------------------------------
    */

    public function fazerLogin()
    {
        return view('user.login');
        echo "Tela de Login";
    }

}
