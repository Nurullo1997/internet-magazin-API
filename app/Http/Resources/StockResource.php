<?php

namespace App\Http\Resources;

use App\Models\Value;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
   

    public function toArray(Request $request): array
    {
        $result = [
            'quantity' => $this->quantity,
        ];

        return $this->getAttributes($result);
    }


    public function getAttributes(array $result): array
    {

        $attributes = json_decode($this->attributes);
        foreach ($attributes as $stockAttribute) {
            /* TODO cache id */

            $attribute = Attribute::find($stockAttribute->attribute_id);

            $valu = Value::find($stockAttribute->value_id);


            $result[$attribute->name] = $valu->getTranslations('name');
        }


        return $result;
    }
}
