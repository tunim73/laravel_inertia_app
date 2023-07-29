<?php

namespace App\Http\Controllers;

use App\Http\Resources\InscritoResource;
use App\Models\Inscrito;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class InscritoController extends Controller
{
    public function showInscritos () {
       $inscritos = Inscrito::all()->load(['endereco']);

       $inscritosResource = InscritoResource::collection($inscritos);

       //return $inscritosResource;
       return Inertia::render('Inscrito/index', [
            'inscritos' => $inscritosResource
       ]);

    }

    public function createInscrito (string $name) {
        $inscrito = new Inscrito();
        $inscrito->name = $name;
        $save = $inscrito->save();
        dd($name, $save);
    }

    public function deleteInscrito(int $id)
    {
        /* 'use ($id)' serve para que eu utilize a variavel id dentro dessa função anonima,
        aparentemente a função anônima é um casulo, e não deixa entrar variáveis do escopo externo
        dentro da função, a menos que utilize "use ($variavel)"
        */
        DB::transaction(function () use ($id) {
            Inscrito::destroy($id);
        }, 5);

        /*
            $inscrito = Inscrito::find($id);
            $inscrito->delete();
        */
        return to_route('dashboardInscritos');

    }

    public function addEndereco (Inscrito $inscrito, string $rua) {

        $newEndereco = compact('rua');
        $save = $inscrito->endereco()->create($newEndereco);
        dd($save);

    }
    public function deleteEndereco (Inscrito $inscrito) {
        $delete = $inscrito->endereco()->delete();
        return to_route('dashboardInscritos');
    }


}
