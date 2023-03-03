<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->user->name,
            "username" => $this->user->username,
            "user_avatar" => asset($this->user->avatar ? '/images/user/'. $this->user->avatar : 'images/avatar.png'),
            "comment" => $this->comment,
            "replies" => CommentResource::collection($this->comments),
            "created_at" => $this->created_at->diffForHumans()
        ];
    }
}
