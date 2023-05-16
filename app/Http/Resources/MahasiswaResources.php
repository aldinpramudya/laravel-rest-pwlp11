<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Nim'=>$this->Nim,
            'Nama'=>$this->Nama,
            'Jurusan'=>strtoupper($this->Jurusan),
        ];
    }
}
