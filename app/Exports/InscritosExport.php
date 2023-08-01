<?php

namespace App\Exports;

use App\Models\Inscrito;
use Maatwebsite\Excel\Concerns\FromCollection;

class InscritosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {        
        return Inscrito::with('endereco')->get();
    }
}
