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
        //$endereco = EnderecoResource::collection($this->endereco)
        //$endereco = EnderecoResource::collection($this->endereco);
        $endereco = $this->endereco;
        return [
            'id' => $this->id,
            'name' => $this->name,
            'endereco' => $endereco
        ];
    }
}
