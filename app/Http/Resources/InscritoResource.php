<?php

namespace App\Http\Resources;

use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InscritoResource extends JsonResource
{

    public $preserveKeys = true;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        //$endereco = EnderecoResource::collection($this->endereco);
        //$endereco = $this->endereco;

        $endereco = new EnderecoResource($this->endereco);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'document' => $this->document,
            'birthDate' => $this->birthDate,
            'phone' => $this->phone,
            'endereco' => $endereco
        ];
    }
}

/*
NOME - DATA DE NASCIMENTO - TELEFONE - DOCUMENTO - RUA -
NUMERO - COMPLEMENTO - BAIRRO

*/
