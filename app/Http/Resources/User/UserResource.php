<?php

declare(strict_types=1);

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Stevebauman\Location\Facades\Location;

final class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {

        // dd( Location::get('172.20.10.9'));

        $country = 'GH';

        if ($this->country == null) {
            if ($position = Location::get('172.20.10.9')) {
                $country = $position->countryName;
            }
        }

        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'email' => $this->email,
            'prefix' => $this->prefix,
            'phone' => $this->phone,
            'first_name' => $this->first_name,
            'other_names' => $this->other_names,
            'user_id' => $this->user_id,
            'sex' => $this->sex,
            'dob' => $this->dob ? $this->dob->format('D, M d, Y') : null,
            'time_zone' => $this->time_zone,
            'country' => $this->country ?? $country,
            'address' => $this->address,
            'display_name' => $this->display_name,
            'full_name' => $this->full_name,

        ];

        return parent::toArray($request);
    }
}
