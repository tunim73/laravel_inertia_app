<?php

namespace App\Http\Controllers;

use App\Http\Resources\InscritoResource;
use App\Models\Inscrito;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InscritosExport;

class InscritoController extends Controller 
{
    public function showInscritos () {

       $inscritos = Inscrito::with('endereco')->paginate(10);
       $inscritosResource = InscritoResource::collection($inscritos);

       return Inertia::render('Inscrito/Index', [
            'inscritos' => $inscritosResource
       ]);

    }

    public function export() 
    {
        return Excel::download(new InscritosExport, 'inscritos.xlsx');
    }

    public function createInscrito (string $name) {
        $inscrito = new Inscrito();
        $inscrito->name = $name;
        $save = $inscrito->save();
        dd($name, $save);
    }

    public function deleteInscrito(int $id)
    {
        $inscrito = Inscrito::find($id);
        $inscrito->delete();
        session()->flash('flash.banner', 'Inscrito removido com sucesso!');
        session()->flash('flash.bannerStyle', 'success');
        return to_route('showInscritos');

    }

    public function addEndereco (Inscrito $inscrito, string $rua) {

        $newEndereco = compact('rua');
        $save = $inscrito->endereco()->create($newEndereco);
        dd($save);

    }
}
