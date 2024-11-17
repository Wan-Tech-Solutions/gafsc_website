<?php

declare(strict_types=1);

namespace App\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class PackageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'package_name' => $this->package_name,
            'package_category_name' => $this->package_category_name,
            'min_investment_amount' => $this->min_investment_amount,
            'max_investment_amount' => $this->max_investment_amount,
            'min_percentage' => $this->min_percentage,
            'max_percentage' => $this->max_percentage,
            'duration' => $this->duration,
            'compounding_duration' => $this->compounding_duration,
            'compounding_percentage' => $this->compounding_percentage,
            'popular' => $this->popular,
            'more_features' => $this->more_features,
        ];
    }
}
