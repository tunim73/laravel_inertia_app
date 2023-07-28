<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EnderecoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'street' => $this->street,
            'number' => $this->number,
            'complement' => $this->complement,
            'locality' => $this->locality
        ];
    }
}

/*
NOME - DATA DE NASCIMENTO - TELEFONE - DOCUMENTO - RUA -
NUMERO - COMPLEMENTO - BAIRRO

*/
/*

[
    {
        "id":1,"name":"Wesley Jos\u00e9 Benites Filho",
        "document":"289.154.231-27","birthDate":"2015-12-27",
        "phone":"94879-1817",
        "endereco":
            {
             "id":1,"street":"Vitor Trail",
             "number":"2119","complement":"14L",
             "locality":"Sergioside"
            }
    },
]
*/
