<?php

namespace App\Http\Controllers;

use App\Models\Inscrito;
use Illuminate\Http\Request;

class InscritoController extends Controller
{
    public function showInscritos () {
       $inscritos = Inscrito::all();
       dd($inscritos);

    }

    public function createInscrito (string $name) {
        $inscrito = new Inscrito();
        $inscrito->name = $name;
        $save = $inscrito->save();
        dd($name, $save);
    }

    public function addEndereco (Inscrito $inscrito, string $rua) {

        $newEndereco = compact('rua');
        $save = $inscrito->endereco()->create($newEndereco);
        dd($save);

    }
    public function deleteEndereco (Inscrito $inscrito) {
        $delete = $inscrito->endereco()->delete();
        dd($delete);
    }


}
