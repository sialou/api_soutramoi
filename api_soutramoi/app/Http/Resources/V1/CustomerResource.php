<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\InvoiceResource;

class CustomerResource extends JsonResource
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
            'id'=>$this->id,
            "name"=>$this->name,
            "type"=>$this->type,
            "email"=>$this->email,
            "address"=>$this->address,
            "city"=>$this->city,
            "state"=>$this->state,
            "created_at"=>$this->created_at,
            "updated_at"=>$this->updated_at,
            "invoices"=>InvoiceResource::collection($this->whenLoaded('invoices'))
        ];
    }
}
