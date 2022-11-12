<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JurusanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray([
            'id' => $this->id,
            'nama_jurusan' => $this->nama_jurusan,
            'kajur' => $this->kajur,
            'kalab' => $this->kalab,
            'jumlah_prodi' => $this->jumlah_prodi,
        ]);
    }
}
