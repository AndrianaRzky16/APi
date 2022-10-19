<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'alamat' => $this->alamat,
            'kecamatan' => $this->kecamatan,
            'kabupaten' => $this->kabupaten,
            'kodepos' => $this->kodepos,
            'detail_lainnya' => $this->detail_lainnya,
            'jenis' => $this->jenis,
        ];
    }
}
