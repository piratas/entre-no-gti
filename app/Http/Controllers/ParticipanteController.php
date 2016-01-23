<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ParticipanteController extends Controller
{

    public function criar(Request $request){



      $participante = new \App\Participante;
      $participante->nome = $request->input('nome');
      $participante->save();


      return redirect()->to('http://gti.pirata.xyz/entre-no-gti/');
    }
}
