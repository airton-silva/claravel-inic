<?php

namespace App\Http\Controllers;

use App\Telefone;
//use App\Pessoa;
use Illuminate\Http\Request;

class TelefonesController extends Controller
{
    public function store(Telefone $telefone)
    {
    	try {
    		$telefone->save();

    	} catch (Exception $e) {
    		return "ERRO: " . $e->getMessage();
    	}
    	
    }
}
