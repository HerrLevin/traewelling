<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserSettingsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request) {
        return [
            'id'             => (int) $this->id,
            'displayName'    => (string) $this->name,
            'username'       => (string) $this->username,
            'trainDistance'  => (float) $this->train_distance,
            'trainDuration'  => (int) $this->train_duration,
            'trainSpeed'     => (float) $this->averageSpeed,
            'points'         => (int) $this->points,
            'twitterUrl'     => $this->twitterUrl ?? null,
            'mastodonUrl'    => $this->mastodonUrl ?? null,
            'privateProfile' => (bool) $this->private_profile,
            'role'           => $this->role,
            'home'           => $this->home,
            'private'        => $this->private_profile,
            'prevent_index'  => $this->prevent_index,
            'dbl'            => $this->always_dbl,
            'language'       => $this->language
        ];
    }
}